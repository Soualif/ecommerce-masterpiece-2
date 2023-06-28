<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    //Manage Payment
    public function checkout() {
        return view('checkout');
    }
    Public function store(Request $request) {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = \Stripe\Charge::create([
                'amount' => session()->has('coupon') ? round(Cart::total() - session()->get('coupon')['discount'], 2) *100 : Cart::total() * 100,
                'currency' => 'chf',
                'description' => 'My Payment',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email,
                'metadata' => [
                    'owner' => $request->name,
                    //'products' => Cart::content()->toJson()
                ]
            ]);

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'paiement_firstname' => $request->firstname,
                'paiement_name' => $request->name,
                'paiement_phone' => $request->phone,
                'paiement_email' => $request->email,
                'paiement_address' => $request->address,
                'paiement_city' => $request->city,
                'paiement_postalcode' => $request->postalcode,
                'discount' => session()->get('coupon')['name'] ?? null,
                'paiement_total' => session()->has('coupon') ? round(Cart::total() - session()->get('coupon')['discount'], 2) : Cart::total(),
            ]);

            foreach(Cart::content() as $product) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->qty
                ]);
            }

            return redirect()->route('checkout.success')->with('success', 'Payment has been Accepted !');
            
        }
        catch(\Stripe\Exception\CardException $e) {
            throw $e;
        }
    }

    //Success Payment
    public function success() {
        if(!session()->has('success')) {
            return redirect()->route('home');
        }
        $order = Order::latest()->first();
        
        Cart::destroy();
        session()->forget('coupon');

        return view('success', [
            'order' => $order,
        ]);
    }
}

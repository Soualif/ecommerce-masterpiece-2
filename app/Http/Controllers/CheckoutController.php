<?php

namespace App\Http\Controllers;

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
        Cart::destroy();
        session()->forget('coupon');
        return view('success');
    }
}

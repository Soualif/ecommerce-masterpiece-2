<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

// $cartContent = Cart::content();
// $productData = [];

// foreach ($cartContent as $row) {
//     $productData[] = $row->id . ': ' . $row->qty;
// }

// $productString = implode(', ', $productData);
class CheckoutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    //Manage Payment
    public function checkout() {
        return view('checkout');
    }

    public function store(Request $request) {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Calculate total in cents
        $total = intval(Cart::total() * 100);

        // Apply discount if a coupon exists
        if (session()->has('coupon')) {
            $discount = intval(session()->get('coupon')['discount'] * 100);
            $total = max(0, $total - $discount); // Ensure total is not negative
        }

        // Check total is at least 1 (1 cent)
        if ($total < 1) {
            return redirect()->back()->withErrors(['message' => 'Total amount must be at least 1 cent after discount.']);
        } 

        try {
            $cartContent = Cart::content();
            $productData = [];

            foreach ($cartContent as $row) {
                $productData[] = $row->id . ': ' . $row->qty;
            }

            $productString = implode(', ', $productData);

            $charge = \Stripe\Charge::create([
                'amount' => $total,
                'currency' => 'chf',
                'description' => 'My Payment',
                'source' => $request->stripeToken,
                'receipt_email' => $request->email,
                'metadata' => [
                'owner' => $request->name,
                'products' => $productString
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

            // ... any other operations to do after successful charge
            session()->put('success', 'Payment has been successful!');  // Add this line
            
            return redirect()->route('checkout.success'); // Replace with your success route

        } catch (\Stripe\Exception\CardException $e) {
            // The card has been declined or
            // some other exception occurred in the Stripe API
            return redirect()->back()->withErrors(['message' => 'Error processing card. Please try again.']);
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
<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();
        
        if(!$coupon) return redirect()->route('checkout.index')->withErrors('Invalid coupon. Please try again.');

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->value,
        ]);
        return redirect()->route('checkout.index')->with('success', 'Coupon has been applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('checkout.index')->with('success', 'Coupon has been removed.');
    }
}

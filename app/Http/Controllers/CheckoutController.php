<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //Manage Payment
    public function checkout() {
        return view('checkout');
    }

    //Success Payment
    public function success() {
        return view('success');
    }
}

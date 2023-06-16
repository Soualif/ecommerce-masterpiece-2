<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $products = Product::all();
        return view('home', [
            'products' => $products
        ]
    );
    }
    public function cart() {
        return view('cart');
    }

    public function orders() {
        return view('orders');
    }
    // public function checkout() {
    //     return view('checkout');
    // }
}

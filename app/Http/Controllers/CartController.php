<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function index() {
        return view('cart');
    }

  /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1,$request->price)->associate('App\Models\Product');

        return redirect()->route('cart.index')->with('success', 'Product Added to your cart !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function reset() {
        Cart::destroy();
    }
}
<?php

namespace App\Http\Controllers;


use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $item = Cart::instance('save')->get($id);
        Cart::instance('save')->remove($id);

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)->associate('App\Models\Product');
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::instance('save')->remove($id);
        return back()->with('success', 'Product has been removed !');

    }
}

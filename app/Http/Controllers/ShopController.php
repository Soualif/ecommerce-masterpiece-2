<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginate = 3;
        if(request()->category) {
            $category = Category::where('slug', request()->category)->firstOrFail();
            $products = Product::where('category_id', $category->id);
        }
        else {
            $products = product::take(3);
        }

        if(request()->sort == 'asc') {
            $products =$products->orderBy('price')->paginate($paginate);
        }
        else if (request()->sort == 'desc'){
            $products =$products->orderBy('price', 'desc')->paginate($paginate);
        }
        else {
            $products = $products->paginate($paginate);
        }

        $categories = Category::all();
        return view('shop', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        //$category = Category::where('id', $product->category_id)->firstOrFail();
        return view('product', [
            'product' => $product,
            //'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
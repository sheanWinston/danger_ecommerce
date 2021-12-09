<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function add()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('add_product', compact('categories') );

    }


    public function store(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $filename = \Str::slug($request->title).time(). '.' .$ext;
        $request->image->move(public_path('products'), $filename);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        $product->image = $filename;
        $product->save();

        return back();
    }


    public function products()
    {
        $products = Product::all();

        return view('products', compact('products') );
    }
}

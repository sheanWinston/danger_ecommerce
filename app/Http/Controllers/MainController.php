<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $products = Product::latest()->get();

        return view('welcome', compact('products'));
    }

    public function hot()
    {
        return view('hot');
    }
}

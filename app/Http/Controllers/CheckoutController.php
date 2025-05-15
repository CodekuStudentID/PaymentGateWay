<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index () {
        $products = Product::all();

        return view('products', compact('products'));

    }

    public function store ($id) {
        // @dd($id);
    }
}

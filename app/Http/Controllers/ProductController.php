<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $data = Product::all();
        
        return view('admin.form', compact('data'));
    }

    public function store (Request $request) {
        // @dd($request->all());

        $data = $request->validate([
            'title' => 'required|string|max:225',
            'deskripsi' => 'required|string|max:225',
            'harga' => 'required|integer',
            'gambar' => 'required|image|mimes:jpg,png,gif,svg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')->with('session', 'created successfully');
    }

}

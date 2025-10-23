<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact ('products'));
    }

   public function create() {
    return view('products.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        'description' => 'nullable|string',
    ]);
    $product = Product::create($validated);
    return redirect()->route('products.show', $product)->with('success', 'Produkts veiksmīgi izveidots!');
}


    public function show(Product $product) {
    return view('products.show', compact('product'));
}


    public function destroy(Product $product) {
        $product->delete();
        return redirect('/products/');
    }

    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }

   public function update(Request $request, Product $product) {
    $data = $request->only('name', 'quantity', 'description');
    $product->update($data);

    return redirect()->route('products.show', $product);
}

}

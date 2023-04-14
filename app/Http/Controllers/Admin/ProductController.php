<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            
            'price' => 'required|numeric|min:0',
            
        ]);

        // Create the product
        $product = Product::create([
            'name' => $validatedData['name'],
            
            'price' => $validatedData['price'],
            
        ]);

        // Redirect to the product index page with a success message
        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            
            'price' => 'required|numeric|min:0',
           
        ]);

        // Update the product
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $validatedData['name'],
            
            'price' => $validatedData['price'],
            
        ]);

        // Redirect to the product index page with a success message
        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect to the product index page with a success message
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}

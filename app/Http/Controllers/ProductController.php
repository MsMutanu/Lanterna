<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $products = product::all();
    return view('products.index',compact('products'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $products = new Product();
    return view('products.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'nullable',
    ]);

    Product::create($request->all());

    return redirect()->route('products.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $products = product::findOrFail($id);
    return view('products.show', compact('products'));
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $products = product::findOrFail($id);
    return view('products.edit', compact('products'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'nullable',
    ]);

    $products = product::findOrFail($id);
    $products->update($request->all());

    Session::flash('message', 'Product updated successfully.');
    return redirect()->route('products.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $products = product::findOrFail($id);
    $products->delete();

    Session::flash('message', 'Product deleted successfully.');
    return redirect()->route('products.index');
}
public function stocklevel()
{
    $products = Product::all();
    return view('user.index', ['products' => $products]);
}


}

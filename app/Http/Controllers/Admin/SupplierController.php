<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('admin.suppliers', ['suppliers' => $suppliers]);
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(Request $request)
    {
        $supplier = new Suppliers();
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->save();
        return redirect()->route('admin.suppliers')->with('success', 'Supplier has been added successfully');
    }

    public function show($id)
    {
        $supplier = Suppliers::find($id);
        return view('admin.suppliers.show', ['supplier' => $supplier]);
    }

    public function edit($id)
    {
        $supplier = Suppliers::find($id);
        return view('admin.suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, $id)
    {
        $supplier = Suppliers::find($id);
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->address = $request->input('address');
        $supplier->save();
        return redirect()->route('admin.suppliers')->with('success', 'Supplier has been updated successfully');
    }

    public function destroy($id)
    {
        $supplier = Suppliers::find($id);
        $supplier->delete();
        return redirect()->route('admin.suppliers')->with('success', 'Supplier has been deleted successfully');
    }
}

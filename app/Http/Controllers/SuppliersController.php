<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;
use Illuminate\Support\Facades\Session;

class SuppliersController extends Controller
{
    /**
     * Index Method:
     *  This method will retrieve a list of all suppliers from the Suppliers model 
     * and pass it to the view for display.

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $suppliers = Suppliers::all();
    return view('suppliers.index', compact('suppliers'));
}


    /**
     * Create Method: 
     * This method will pass an empty suppliers object to the view 
     * for creating a new supplier.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $supplier = new Suppliers();
    return view('suppliers.create');
}

    /**
     * Store Method: 
     * This method will handle the form submission for creating a new supplier,
     *  validate the input, 
     * store the new supplier to the database,
     *  and redirect to the index page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required',
        
    ]);

    Suppliers::create($request->all());

    return redirect()->route('suppliers.index');
}

    /**
     *  Show Method: 
     * This method will retrieve a single supplier 
     * from the Suppliers model
     *  based on the id passed in the route 
     * and pass it to the view for display.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $supplier = Suppliers::findOrFail($id);
    return view('suppliers.show', compact('supplier'));
}

    /**
     * Edit Method: 
     * This method will retrieve a single supplier 
     * from the Suppliers model
     *  based on the id passed in the route
     *  and pass it to the view for editing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $supplier = Suppliers::findOrFail($id);
    return view('suppliers.edit', compact('supplier'));
}

    /**
     * Update Method:
     *  This method will handle the form submission 
     * for updating an existing supplier, 
     * validate the input,
     *  update the supplier in the database, 
     * and redirect to the index page
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required',
    ]);

    $supplier = Suppliers::findOrFail($id);
    $supplier->update($request->all());

    Session::flash('message', 'Supplier updated successfully.');
    return redirect()->route('suppliers.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $supplier = Suppliers::findOrFail($id);
    $supplier->delete();

    Session::flash('message', 'Supplier deleted successfully.');
    return redirect()->route('suppliers.index');
}

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::all();
        return view('admin.deliveries', compact('deliveries'));
    }

    public function create()
    {
        return view('admin.deliveries.create');
    }

    public function store(Request $request)
    {
        // validate the input
        $validatedData = $request->validate([
            'oder_id' => 'required',
            
            'delivery_date' => 'required|date',
            'supplier_id' => 'required',
        ]);

        // create the delivery
        $delivery = new Delivery();
        $delivery->order_id = $validatedData['order_id'];
       
        $delivery->delivery_date = $validatedData['delivery_date'];
        $delivery->supplier_id = $validatedData['supplier_id'];
        $delivery->save();

        return redirect()->route('admin.deliveries')->with('success', 'Delivery created successfully.');
    }

    public function show($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('admin.deliveries.show', compact('delivery'));
    }

    public function edit($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('admin.deliveries.edit', compact('delivery'));
    }

    public function update(Request $request, $id)
    {
        // validate the input
        $validatedData = $request->validate([
            'order_id' => 'required',
          
            'delivery_date' => 'required|date',
            'supplier_id' => 'required',
        ]);

        // update the delivery
        $delivery = Delivery::findOrFail($id);
        $delivery->order_id = $validatedData['order_id'];
        
        $delivery->delivery_date = $validatedData['delivery_date'];
        $delivery->supplier_id = $validatedData['supplier_id'];
        $delivery->save();

        return redirect()->route('admin.deliveries')->with('success', 'Delivery updated successfully.');
    }

    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->delete();

        return redirect()->route('admin.deliveries')->with('success', 'Delivery deleted successfully.');
    }
}

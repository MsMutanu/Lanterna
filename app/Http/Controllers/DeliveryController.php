<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the deliveries.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new delivery.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created delivery in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'delivery_date' => 'required|date',
           
            
            'status' => 'required',
        ]);

        $delivery = new Delivery();
        $delivery->delivery_date = $request->input('delivery_date');
        
        $delivery->status = $request->input('status');
        $delivery->save();

        return redirect()->route('deliveries.index')->with('success', 'Delivery created successfully.');
    }

    /**
     * Display the specified delivery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('deliveries.show', compact('delivery'));
    }

    /**
     * Show the form for editing the specified delivery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::findOrFail($id);
        return view('deliveries.edit', compact('delivery'));
    }

    /**
     * Update the specified delivery in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        /**
     * Update the specified delivery in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'delivery_date' => 'required',
            'status' => 'required',
        ]);

        $delivery = Delivery::findOrFail($id);
        $delivery->delivery_date = $request->input('delivery_date');
        
        $delivery->status = $request->input('status');
        $delivery->save();

        return redirect()->route('deliveries.index')->with('success', 'Delivery updated successfully.');
    }

    /**
     * Remove the specified delivery from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);
        $delivery->delete();

        return redirect()->route('deliveries.index')->with('success', 'Delivery deleted successfully.');
    }

}

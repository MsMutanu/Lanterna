<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders', ['orders' => $orders]);
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        // validation logic here

        $order = new Order();
        $order->customer = $request->customer;
        $order->total_price = $request->total_price;
        $order->save();

        // redirect to index page with success message
        return redirect()->route('admin.orders.index')->with('success', 'Order created successfully');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.show', ['order' => $order]);
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {
        // validation logic here

        $order = Order::findOrFail($id);
        $order->customer = $request->customer;
        $order->total_price = $request->total_price;
        $order->save();

        // redirect to index page with success message
        return redirect()->route('admin.orders')->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        // redirect to index page with success message
        return redirect()->route('admin.orders')->with('success', 'Order deleted successfully');
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Delivery;

class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function orders(Request $request)
    {
        $orders = Order::all();
        return view('reports.orders', ['orders' => $orders]);
    }

    public function deliveries(Request $request)
    {
        $deliveries = Delivery::all();
        return view('reports.deliveries', ['deliveries' => $deliveries]);
    }

    public function generateOrderReport(Request $request)
    {
        // Code to generate an order report goes here
    }

    public function generateDeliveryReport(Request $request)
    {
        // Code to generate a delivery report goes here
    }
}

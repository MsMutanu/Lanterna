<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $recentOrdersCount = Order::where('created_at', '>=', Carbon::now()->subDays(7))->count();
        $lowStockItems = Item::where('stock_level', '<', 10)->get();
        $upcomingDeliveries = Delivery::where('delivery_date', '>=', Carbon::now())->get();
        return view('dashboard', compact('recentOrdersCount', 'lowStockItems', 'upcomingDeliveries'));
    }
     //
}

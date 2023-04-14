<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Delivery;
use illuminate\Support\Carbon;
use App\Models\Product;


class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }
    public function generateSalesReportData(Request $request) {
        // Retrieve orders between the given start and end dates
        $orders = Order::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
        
        // Generate the sales report data
        $report_data = $orders->groupBy(function($order) {
            return $order->created_at->format('Y-m-d');
        })->map(function($orders) {
            return $orders->sum('total');
        });
        
        // Check if there is no data in the report
        if ($report_data->isEmpty()) {
            return null;
        }
        
        return $report_data;
    }
    
    public function generateInventoryReportData(Request $request) {
        // Retrieve products with current inventory levels
        $products = Product::where('quantity', '>', 0)->get();
        
        // Generate the inventory report data
        $report_data = $products->sortByDesc('quantity')->map(function($product) {
            return [
                'name' => $product->name,
                'quantity' => $product->quantity
            ];
        });
        
        // Check if there is no data in the report
        if ($report_data->isEmpty()) {
            return null;
        }
        
        return view('reports.inventory', compact('products'));

    }
    
    public function generateDeliveriesReportData(Request $request) {
        // Retrieve deliveries between the given start and end dates
        $deliveries = Delivery::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
        
        // Generate the deliveries report data
        $report_data = $deliveries->groupBy(function($delivery) {
            return $delivery->created_at->format('Y-m-d');
        })->map(function($deliveries) {
            return $deliveries->count();
        });
        
        // Check if there is no data in the report
        if ($report_data->isEmpty()) {
            return null;
        }
        
        return $report_data;
    }
    
    public function generate(Request $request) {
        if ($request->report_type == 'sales') {
            $report_data = $this->generateSalesReportData($request);
            $view_name = 'reports.sales';
        } elseif ($request->report_type == 'inventory') {
            $report_data = $this->generateInventoryReportData($request);
            $view_name = 'reports.inventory';
        } elseif ($request->report_type == 'deliveries') {
            $report_data = $this->generateDeliveriesReportData($request);
            $view_name = 'reports.deliveries';
        } else {
            return redirect()->back()->with('error', 'Invalid report type specified.');
        }
        
        // Return a view with the report data
        return view($view_name, ['report_data' => $report_data]);
    }
    

    
}

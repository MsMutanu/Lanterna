<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $orders = Order::all();
    return view('orders.index', compact('orders'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $orders = new Order();
    return view('orders.create', compact('orders'));
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
        'supplier' => 'required',
        'item' => 'required',
        'quantity' => 'required',
        'price' => 'required',
        'delivery_date' => 'required',
    ]);

    Order::create($request->all());

    return redirect()->route('orders.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', ['order' => $order]);
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $order = Order::findOrFail($id);
        return view('orders.edit',['order' => $order]);

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
    // Validate input data
    $validatedData = $request->validate([
        'customer' => 'required',
        'supplier' => 'required',
        'item' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
        'delivery_date' => 'required|date',
        'order_status' => 'required',
    ]);

    // Get the order by ID
    $order = Order::findOrFail($id);

    // Update the order with the new data
    $order->customer = $validatedData['customer'];
    $order->supplier = $validatedData['supplier'];
    $order->item = $validatedData['item'];
    $order->price= $validatedData['price'];
    $order->quantity = $validatedData['quantity'];
    $order->delivery_date = $validatedData['delivery_date'];
    $order->order_status = $validatedData['order_status'];
    $order->save();

    // Redirect back to the show page for the order
    return redirect()->route('orders.index', ['id' => $id])->with('success', 'Order updated successfully.');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $orders = Order::findOrFail($id);
    $orders->delete();

    Session::flash('message', 'Order deleted successfully.');
    return redirect()->route('orders.index');
}

public function viewInvoice(int $orderId)
{
    $order= Order::findOrFail($orderId);
    return view('orders.invoice.generate-invoice', compact('order'));
}

public function generateInvoice(int $orderId)
{
    $order = Order::findOrFail($orderId);
    $data = ['order' => $order];

    $pdf = Pdf::loadView('orders.invoice.generate-invoice', $data);

    $todayDate= Carbon::now()->format('d-m-Y');

    return $pdf->download('invoice'.$order->id.'-'.$todayDate.'.pdf');

}


// public function generateInvoice(Request $request)
// {
   
//     // Get the selected start and end date from the form
//     $start_date = $request->input('start_date');
//     $end_date = $request->input('end_date');
    
//     // Get all the orders between the selected dates
//     $orders = Order::all();
    
//     // Get the company logo to insert into the invoice
//     $logo_path = public_path('image/logo.png');
    
//     // Define the Word document properties
//     $properties = [
//         'creator' => 'Lanterna',
//         'lastModifiedBy' => 'Lanterna',
//         'title' => 'Invoices',
//         'subject' => 'Invoices',
//         'description' => 'Generated invoices for selected date range',
//         'keywords' => 'invoices, sales, products',
//         'category' => 'Invoices',
//         'company' => 'Lanterna'
//     ];
    
//     // Create a new Word document
//     $phpWord = new \PhpOffice\PhpWord\PhpWord();
    
//     // Set the document properties



    
//     // Add a section to the document
//     $section = $phpWord->addSection();
    
//     // Add the company logo to the section
//     $section->addImage($logo_path, array('width'=>100, 'height'=>100));
    
//     // Add a table to the section
//     $table = $section->addTable();
    
//     // Define the table headers
//     $table->addRow();
//     $table->addCell(1000)->addText('Customer');
//     $table->addCell(1000)->addText('Invoice Number');
//     $table->addCell(1000)->addText('Date');
//     $table->addCell(1000)->addText('Description of Service');
//     $table->addCell(1000)->addText('Quantity');
//     $table->addCell(1000)->addText('Unit Price');
//     $table->addCell(1000)->addText('Total');
//    // die(($orders));
//     // Add a row for each order to the table
//     foreach ($orders as $order) {
//         $table->addRow();
//         $table->addCell(1000)->addText($order->customer);
//         $table->addCell(1000)->addText($order->id);
//         $table->addCell(1000)->addText($order->created_at->format('d M Y'));
//         $table->addCell(1000)->addText($order->item);
//         $table->addCell(1000)->addText($order->quantity);
//         $table->addCell(1000)->addText($order->price);
//         $table->addCell(1000)->addText($order->total);
        
//         // Get the customer name for the invoice filename
//         $customerName = $order->customer;

//         // Get the next invoice number
//       //  $nextInvoiceNumber = Invoice::max('id') + 1;

//         // Set the filename for the invoice
//         $filename = $customerName . '_ .docx';
        
//     }
//         \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
//        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
//        // $objWriter->save( $filename);

//         //$filePath =storage_path('storage/app/invoices/'.$filename);
       
//         //return $this->downloadInvoice($filePath);
    

    
    
    

// }


// public function downloadInvoice($filename)
// {
//     $filepath = storage_path('app/invoices/' . $filename);

//     if (file_exists($filepath)) {
//         return Response::download($filepath);
//     } else {
//         return redirect()->back()->with('error', 'Invoice not found.');
//     }
// }

 }

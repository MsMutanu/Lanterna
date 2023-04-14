<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice No.{{$order->id}}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: Arial;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: blue;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
            <th width="50%" colspan="2">
    <img src="{{ asset('image/logo.png') }}" alt="Lanterna Home Health Care" style="width: 200px; height: 200px;">
    <h2 class="text-start">Lanterna Home Health Care</h2>
</th>

                <th width="50%" colspan="2" class="text-end company-data">
                    <span><b>INVOICE</b></span> <br>
                    <span>Invoice date: {{date('d/m/y')}}</span> <br>
    </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td>{{$order->id}}</td>

                <td>Full Name:</td>
                <td>{{$order->customer}}</td>
            </tr>
            
            <tr>
                <td>Ordered Date:</td>
                <td>{{$order->created_at}}</td>

                <td>Phone:</td>
                <td>8889997775</td>
            </tr>
            
            <tr>
                <td>Order Status:</td>
                <td>{{$order->order_status}}</td>

               
            </tr>
        </tbody>
    </table>

    <table>
  <thead>
    <tr>
      <th class="no-border text-start heading" colspan="5">
        Order Items
      </th>
    </tr>
    <tr class="bg-blue">
      <th>ID</th>
      <th>Product</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="10%">{{ $order->id }}</td>
      <td>{{ $order->item }}</td>
      <td width="10%">{{ $order->price }}</td>
      <td width="10%">{{ $order->quantity }}</td>
      <td width="15%" class="fw-bold">{{ $order->total_price }}</td>
    </tr>
    <tr>
      <td colspan="4" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
      <td colspan="1" class="total-heading">{{ $order->total_price }}</td>
    </tr>
  </tbody>
</table>


    <p><b>
    Account Name: Lanterna Home Health Care LTD<br>
Account Number: 2044368881<br>
Bank: ABSA<br>
Branch: Ngong<br>
Mpesa Pay bill: 303030<br>
    </b></p>

    <br>
    <p class="text-center">
    Thank you for choosing Lanterna as your preferred home health care provider.
    </p>
    <br>
    <p class="text-center">
    P.O. Box 5054-00200<br>
Tel: +254721581801 <br>
Email: info@lanternahomecare.com <br>  
    </p>
</body>
</html>
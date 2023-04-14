@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Supplier</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Expected Delivery</th>
                    <th>Order Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer}}</td>
                    <td>{{ $order->supplier}}</td>
                    <td>{{ $order->item }}</td>
                    <td>{{ $order->price}}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price}}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>{{ $order->order_status }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

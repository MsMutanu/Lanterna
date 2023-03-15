@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Orders</h1>
            <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create New Order</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Supplier</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Expected Delivery</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->customer}}</td>
                        <td>{{ $order->supplier}}</td>
                        
                        <td>{{ $order->item}}</td>
                        <td>{{ $order->price}}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>{{ $order->order_status}}</td>
                        
                        <td>
                        <a href="{{ route('orders.generate-invoice', $order->id) }}" class="btn btn-primary">Print Invoice</a>
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ route('orders.generate-invoices') }}">
                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                <button type="submit" class="btn btn-primary">Generate Invoices</button>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection

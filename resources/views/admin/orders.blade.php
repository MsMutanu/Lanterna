@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Orders</h1>
            <a href="{{ route('admin.orders.create') }}" class="btn btn-primary mb-3">Create New Order</a>
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
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->customer}}</td>
                        <td>{{ $order->supplier}}</td>
                        
                        <td>{{ $order->item}}</td>
                        <td>{{ $order->price}}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_price}}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>{{ $order->order_status}}</td>
                        
                        <td>
                              <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
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
        
    </div>
    </div>
</div>
@endsection

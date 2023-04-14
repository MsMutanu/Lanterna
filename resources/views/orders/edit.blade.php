@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="customer">Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" value="{{ $order->customer }}">
            </div>

            <div class="form-group">
                <label for="supplier">Supplier</label>
                <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $order->supplier }}">
            </div>

            <div class="form-group">
                <label for="item">Item</label>
                <input type="text" class="form-control" id="item" name="item" value="{{ $order->item }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $order->price }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order->quantity }}">
            </div>
            <div class="form-group">
                <label for="price">Total Price</label>
                <input type="number" class="form-control" id="price" name="total_price" value="{{ $order->total_price }}">
            </div>

            <div class="form-group">
                <label for="delivery_date">Delivery Date</label>
                <input type="date" class="form-control" id="delivery_date" name="delivery_date" value="{{ $order->delivery_date }}">
            </div>

            <div class="form-group">
                <label for="order_status">Order Status</label>
                <select class="form-control" id="order_status" name="order_status">
                    <option value="pending" @if($order->order_status == 'pending') selected @endif>Pending</option>
                    <option value="delivered" @if($order->order_status == 'delivered') selected @endif>Delivered</option>
                    <option value="cancelled" @if($order->order_status == 'cancelled') selected @endif>Cancelled</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>
@endsection

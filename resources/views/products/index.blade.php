@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Inventory Management</h1>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Supplier Name</th>
                        <th>Contact Information</th>
                        <th>Previous Order History</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity}}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->supplier_name}}</td>
                        <td>{{ $product->contact_information}}</td>
                        <td>{{ $product->previous_order_history}}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
        </div>
    </div>
</div>
@endsection

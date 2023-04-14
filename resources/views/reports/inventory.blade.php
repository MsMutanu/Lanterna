@extends('layouts.app')

@section('content')
<div>
<table>
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
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity}}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->supplier_name}}</td>
                        <td>{{ $product->contact_information}}</td>
                        <td>{{ $product->previous_order_history}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
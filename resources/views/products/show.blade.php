@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $products->name }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $products->id }}</p>
                        <p><strong>Price:</strong> {{ $products->price }}</p>
                        <p><strong>Quantity:</strong> {{ $products->quantity }}</p>
                        <p><strong>Category:</strong> {{ $products->category }}</p>
                        <p><strong>Supplier:</strong> {{ $products->supplier_name }}</p>
                        <p><strong>Contact Information:</strong> {{ $products->contact_information }}</p>
                    </div>
                    <div class="col-md-6">
                        
                        <p><strong>Previous Order History:</strong></p>{{ $products->previous_order_history }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

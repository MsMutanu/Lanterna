@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Product</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('products.update', $products->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $products->price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $products->quantity }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $products->category }}" required>
                    </div>
                    <div class="form-group">
                        <label for="supplier_id">Supplier:</label>
                        <input type="text" class="form-control" id="supplier" name="supplier_name" value="{{ $products->supplier_name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('products.show', $products->id) }}" class="btn btn-link">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

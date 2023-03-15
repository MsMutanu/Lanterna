@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Supplier</h1>
        <form method="POST" action="{{ route('suppliers.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            

            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

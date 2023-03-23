@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, Admin!</h1>
        <div class="card">
            <div class="card-body">
                <h2>Manage Users</h2>
                <a href="{{ route('admin.users.index') }}">View Users</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Patients</h2>
                <a href="{{ route('admin.patients.index') }}">View Patients</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Products</h2>
                <a href="{{ route('admin.products.index') }}">View Products</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Suppliers</h2>
                <a href="{{ route('admin.suppliers.index') }}">View Suppliers</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Orders</h2>
                <a href="{{ route('admin.orders.index') }}">View Orders</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Deliveries</h2>
                <a href="{{ route('admin.deliveries.index') }}">View Deliveries</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Employees</h2>

            
        </div>
    </div>
</div>
@endsection
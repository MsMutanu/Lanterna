@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, Admin!</h1>
        <div class="card">
            <div class="card-body">
                <h2>Manage Users</h2>
                <a href="{{ route('admin.users') }}">View Users</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Patients</h2>
                <a href="{{ route('admin.patients') }}">View Patients</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Products</h2>
                <a href="{{ route('admin.products') }}">View Products</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Suppliers</h2>
                <a href="{{ route('admin.suppliers') }}">View Suppliers</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Orders</h2>
                <a href="{{ route('admin.orders') }}">View Orders</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Deliveries</h2>
                <a href="{{ route('admin.deliveries') }}">View Deliveries</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Manage Employees</h2>
                <a href="{{ route('admin.employees') }}">View Employees</a>
            
        </div>
    </div>
</div>
@endsection
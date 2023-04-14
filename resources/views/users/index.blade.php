@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route('patients.index') }}" class="list-group-item">Patients</a>
                    <a href="{{ route('products.index') }}" class="list-group-item">Products</a>
                    <a href="{{ route('suppliers.index') }}" class="list-group-item">Suppliers</a>
                    <a href="{{ route('orders.index') }}" class="list-group-item">Orders</a>
                    <a href="{{ route('deliveries.index') }}" class="list-group-item">Deliveries</a>
                    <a href="{{ route('employees.index') }}" class="list-group-item">Employees</a>
                    <?php // <a href="{{ route('reports.index') }}" class="list-group-item">Reports</a> ?>
                  
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                Inventory Levels
                            </div>
                            <div class="card-body">
                            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Stock Level</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                Recent Orders
                            </div>
                            <div class="card-body">
                                <!-- How to display recent orders?-->
               

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                Low Stock Items
                            </div>
                            <div class="card-body">
                                <!-- Add logic to display low stock items -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Upcoming Deliveries
                            </div>
                            <div class="card-body">
                                <!-- Add logic to display upcoming deliveries -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            background-image: url('/images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }
        .list-group-item.active {
            background-color: #007bff;
            border-color: #007bff;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
    </style>
@endsection

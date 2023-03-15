@extends('layouts.app')

@section('content')
<div>
        <title>User Dashboard</title>
</div>
   
        <h1>User Dashboard</h1>
        <div style=  "padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;">
        <ul>
            <li><a href="{{ route('patients.index') }}">Patients</a></li>
            <li><a href="{{ route('products.index') }}">Products</a></li>
            <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
            <li><a href="{{ route('orders.index') }}">Orders</a></li>
            <li><a href="{{ route('deliveries.index') }}">Deliveries</a></li>
            <li><a href="{{ route('employees.index') }}">Employees</a></li>
            <li><a href="{{ route('reports.index') }}">Reports</a></li>
        </ul>
</div>
        <div>
            @yield('content')
        </div>
    
<!-- Use a grid layout -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Use charts and graphs -->
            <div class="card">
                <div class="card-header">
                    <h3>Inventory Levels</h3>
                </div>
                <div class="card-body">
                    <canvas id="inventoryChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <!-- Use icons and images -->
            <div class="card">
                <div class="card-header">
                    <h3>Recent Orders</h3>
                </div>
                <div class="card-body">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <!-- Use colors -->
            <div class="card">
                <div class="card-header">
                    <h3>Low Stock Items</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Stock Level</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <!-- Use typography -->
            <div class="card">
                <div class="card-header">
                    <h3>Upcoming Deliveries</h3>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
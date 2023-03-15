
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
                    <h4>{{ $recentOrdersCount }}</h4>
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
                        <tbody>
                            @foreach($lowStockItems as $item)
                                <tr class="{{ $item->stock_level < 10 ? 'text-danger' : '' }}">
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->stock_level }}</td>
                                </tr>
                            @endforeach
                        </tbody>
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
                <div class="card-body">
                    <ul>
                        @foreach($upcomingDeliveries as $delivery)
                            <li>
                                <h5>{{ $delivery->delivery_date }}</h5>
                                <p>{{ $delivery->address }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


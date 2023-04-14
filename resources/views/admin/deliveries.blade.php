@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Deliveries</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Delivery Number</th>
                        <th>Order Number</th>
                        <th>Supplier number</th>
                        <th>customer</th>
                        <th>Delivery Date</th>
                        
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deliveries as $delivery)
                    <tr>
                        <td>{{ $delivery->id }}</td>
                        <td>{{ $delivery->order_id }}</td>
                        <td>{{ $delivery->supplier_id }}</td>
                        <td>{{ $delivery->customer }}</td>
                        <td>{{ $delivery->delivery_date }}</td>
                        <td>{{ $delivery->status }}</td>
                        
                        <td>
                            <a href="{{ route('admin.deliveries.show', $delivery->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.deliveries.edit', $delivery->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.deliveries.destroy', $delivery->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

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
                        <th>Supplier</th>
                        <th>Delivery Date</th>
                        <th>Items</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deliveries as $delivery)
                    <tr>
                        <td>{{ $delivery->delivery_number }}</td>
                        <td>{{ $delivery->order->order_number }}</td>
                        <td>{{ $delivery->order->supplier->company_name }}</td>
                        <td>{{ $delivery->delivery_date }}</td>
                        <td>
                            <ul>
                                @foreach($delivery->items as $item)
                                <li>{{ $item->name }} ({{ $item->quantity }} {{ $item->unit }})</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('deliveries.show', $delivery->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('deliveries.edit', $delivery->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('deliveries.destroy', $delivery->id) }}" method="POST" class="d-inline">
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

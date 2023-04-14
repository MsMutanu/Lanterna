@extends('layouts.app')

@section('content')
<div>
<table>
    <thead>
        <tr>
        <th>Delivery Number</th>
                        <th>Order Number</th>
                        <th>Supplier number</th>
                        <th>customer</th>
                        <th>Delivery Date</th>
                        <th>Delivery Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deliveries as $delivery)
            <tr>
                <td>{{ $delivery->id }}</td>
                
                        <td>{{ $delivery->supplier_id }}</td>
                        <td>{{ $delivery->customer }}</td>
                        <td>{{ $delivery->delivery_date }}</td>
                        <td>{{ $delivery->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

    
</div>
@endsection
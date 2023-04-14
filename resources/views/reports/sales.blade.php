@extends('layouts.app')

@section('content')
<div>
<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Order Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer }}</td>
                <td>{{ $order->total() }}</td>

            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
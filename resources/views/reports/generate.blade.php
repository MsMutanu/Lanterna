@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sales Report</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Total Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salesData as $date => $totalSales)
            <tr>
                <td>{{ $date }}</td>
                <td>{{ $totalSales }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

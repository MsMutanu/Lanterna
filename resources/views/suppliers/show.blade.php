@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $supplier->name }}</h1>
        <p>Supplier Phone: {{ $supplier->phone}}</p>
        <p>Supplier Email: {{ $supplier->email}}</p>
        <p>Supplier Address: {{ $supplier->address}}</p>


        

        
    </div>
@endsection

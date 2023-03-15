@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppliers</h1>
            <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Create New Supplier</a>
            <table class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Company Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                    <tr>
                    <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->phone }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td>
                            <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" class="d-inline">
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

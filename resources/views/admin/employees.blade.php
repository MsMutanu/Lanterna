@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employees</h1>
        <table class="table">
            <thead>
                <tr>
                <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>National ID</th>
                    <th>Gender</th>
                    <th>Current Contract</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                    <td>{{ $employee->id}}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->national_id }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->current_contract }}</td>
                        <td>{{ $employee->role }}</td>
                        <td>
                    <a href="{{ route('admin.employees.show', $employee->id) }}"class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST"class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('admin.employees.create') }}" class="btn btn-success">Add New Employee</a>
    </div>
@endsection

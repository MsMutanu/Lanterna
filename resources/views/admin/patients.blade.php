@extends('layouts.app')

@section('content')
    <h1>Patients</h1>
    <a href="{{ route('admin.patients.create') }}" class="btn btn-primary">Add Patient</a>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->second_name }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>
                    <a href="{{ route('admin.patients.show', $patient->id) }}" class="btn btn-secondary">View</a>
                    <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.patients.destroy', $patient->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>National ID No.</th>
            <th>Emergency Contact</th>
            <th>Emergency Phone</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->second_name }}</td>
                <td>{{ $patient->address}}</td>
                <td>{{ $patient->phone }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->date_of_birth }}</td>
                <td>{{ $patient->national_id_no }}</td>
                <td>{{ $patient->emergency_contact }}</td>
                <td>{{ $patient->emergency_phone }}</td>
                <td>
                    <a href="{{ route('patients.show', $patient->id) }}"class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('patients.create') }}" class="btn btn-success">Add New Patient</a>
@endsection

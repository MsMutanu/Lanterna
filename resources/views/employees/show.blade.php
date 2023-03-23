@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $employee->name }}</div>

                <div class="card-body">
                    <p>Employee ID: {{ $employee->id }}</p>
                    <p>Phone: {{ $employee->phone }}</p>
                    <p>Email: {{ $employee->email }}</p>
                    <p>National ID: {{ $employee->national_id }}</p>
                    <p>Gender: {{ $employee->gender }}</p>
                    <p>Current Contract: {{ $employee->current_contract }}</p>
                    <p>Role: {{ $employee->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

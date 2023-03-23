@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Employee</div>
                    <div class="card-body">
                        <form action="{{ route('employees.update', ['id' => $employee->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $employee->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="national_id">National ID</label>
                                <input type="text" name="national_id" id="national_id" class="form-control" value="{{ $employee->national_id }}" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" @if($employee->gender == 'male') selected @endif>Male</option>
                                    <option value="female" @if($employee->gender == 'female') selected @endif>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="current_contract">Current Contract</label>
                                <input type="text" name="current_contract" id="current_contract" class="form-control" value="{{ $employee->current_contract }}" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                
                                <input type="text" name="role" id="role" class="form-control" value="{{ $employee->role }}" required>
                            </div>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Employee</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Create Employee</h1>

    <form action="{{ route('employees.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" id="phone" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="national_id">National ID:</label>
        <input type="text" class="form-control" name="national_id" id="national_id" required>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" class="form-control" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <div class="form-group">
        <label for="current_contract">Current Contract:</label>
        <input type="text" class="form-control" name="current_contract" id="current_contract" required>
      </div>

      <div class="form-group">
        <label for="role">Role:</label>
        <input type="text" class="form-control" name="role" id="role" required>
      </div>

      <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
  </div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create New Patient</h1>
            <hr>
            <form action="{{ route('patients.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" id="firstname" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="name">Second Name:</label>
                    <input type="text" class="form-control" id="secondname" name="second_name" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
    <label for="Date of Birth">Date of Birth</label>
    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
  </div>

  <div class="form-group">
    <label for="National ID">National ID</label>
    <input type="text" class="form-control" id="national_id_no" name="national_id_no">
  </div>
                
                
                <div class="form-group">
                    <label for="emergency_contact">Emergency Contact:</label>
                    <input type="text" class="form-control" id="emergency_contact" name="emergency_contact" required>
                </div>
                <div class="form-group">
                    <label for="emergency_phone">Emergency Phone:</label>
                    <input type="text" class="form-control" id="emergency_phone" name="emergency_phone" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

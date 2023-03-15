@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Patient') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('patients.update', $patient->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', $patient->first_name) }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="second_name" class="col-md-4 col-form-label text-md-right">{{ __('Second Name') }}</label>

                                <div class="col-md-6">
                                    <input id="second_name" type="text" class="form-control @error('second_name') is-invalid @enderror" name="second_name" value="{{ old('second_name', $patient->second_name) }}" required autocomplete="second_name" autofocus>

                                    @error('second_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address', $patient->address) }}</textarea>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone" value="{{ $patient->phone }}">
</div>

<div class="form-group">
    <label for="email"class="col-md-4 col-form-label text-md-right">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="{{ $patient->email }}">
</div>

<div class="form-group">
    <label for="dob" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
    <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ $patient->date_of_birth}}">
</div>

<div class="form-group">
    <label for="national_id_no" class="col-md-4 col-form-label text-md-right">National ID No.</label>
    <input type="text" name="national_id_no" class="form-control" id="national_id_no" value="{{ $patient->national_id_no }}">
</div>

<div class="form-group">
    <label for="emergency_contact" class="col-md-4 col-form-label text-md-right">Emergency Contact</label>
    <input type="text" name="emergency_contact" class="form-control" id="emergency_contact" value="{{ $patient->email }}">
</div>

    <div class="form-group">
    <label for="emergency_phone" class="col-md-4 col-form-label text-md-right">Emergency Phone</label>
    <input type="text" name="emergency_phone" class="form-control" id="phone" value="{{ $patient->emergency_phone }}">
</div>
</div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
   
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection


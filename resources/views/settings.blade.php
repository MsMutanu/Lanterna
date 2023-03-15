@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('settings.update') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="site_name">Site Name</label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $settings->site_name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $settings->email }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $settings->phone }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address">{{ $settings->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection

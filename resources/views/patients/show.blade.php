@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patient Details') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>{{ __('First Name') }}</td>
                                <td>{{ $patient->first_name }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Second Name') }}</td>
                                <td>{{ $patient->second_name }}</td>
                            </tr>
                            
                            <tr>
                                <td>{{ __('Address') }}</td>
                                <td>{{ $patient->address }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Phone') }}</td>
                                <td>{{ $patient->phone }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Email') }}</td>
                                <td>{{ $patient->email }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Date of Birth') }}</td>
                                <td>{{ $patient->date_of_birth }}</td>

                            </tr>
                            <tr>
                                <td>{{ __('National ID No.') }}</td>
                                <td>{{ $patient->national_id_no }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Emergency Contact') }}</td>
                                <td>{{ $patient->emergency_contact }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('Emergency Phone') }}</td>
                                <td>{{ $patient->emergency_phone }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

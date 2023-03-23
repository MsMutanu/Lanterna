@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Delivery Details</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="delivery_date" class="col-md-4 col-form-label text-md-right">Delivery Date:</label>

                            <div class="col-md-6">
                                <p id="delivery_date">{{ $delivery->delivery_date }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier" class="col-md-4 col-form-label text-md-right">Supplier:</label>

                            <div class="col-md-6">
                                <p id="supplier">{{ $delivery->supplier_id }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customer" class="col-md-4 col-form-label text-md-right">Customer:</label>

                            <div class="col-md-6">
                                <p id="customer">{{ $delivery->customer }}</p>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status:</label>

                            <div class="col-md-6">
                                <p id="status">{{ $delivery->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Delivery</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('deliveries.update', $delivery->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="date" class="col-md-4 col-form-label text-md-right">Delivery Date</label>

                        <div class="col-md-6">
                            <input id="delivery_date" type="date" class="form-control @error('delivery_date') is-invalid @enderror" name="delivery_date" value="{{ old('delivery_date', $delivery->delivery_date) }}" required autocomplete="date" autofocus>

                            @error('delivery_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">Delivery Status</label>

                        <div class="col-md-6">
                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                <option value="">Select Status</option>
                                <option value="Pending" {{ $delivery->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                <option value="Delivered" {{ $delivery->status === 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                <option value="Cancelled" {{ $delivery->status === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update Delivery
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

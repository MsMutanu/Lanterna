@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h1>New Order</h1></div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('orders.store') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('customer') ? ' has-error' : '' }}">
              <label for="customer" class="col-md-4 control-label">Customer</label>

              <div class="col-md-6">
                <input id="customer" type="text" class="form-control" name="customer" value="{{ old('customer') }}" required autofocus>

                @if ($errors->has('customer'))
                  <span class="help-block">
                    <strong>{{ $errors->first('customer') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('supplier') ? ' has-error' : '' }}">
              <label for="supplier" class="col-md-4 control-label">Supplier</label>

              <div class="col-md-6">
                <input id="supplier" type="text" class="form-control" name="supplier" value="{{ old('supplier') }}" required>

                @if ($errors->has('supplier'))
                  <span class="help-block">
                    <strong>{{ $errors->first('supplier') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">
              <label for="item" class="col-md-4 control-label">Item</label>

              <div class="col-md-6">
                <input id="item" type="text" class="form-control" name="item" value="{{ old('item') }}" required>

                @if ($errors->has('item'))
                  <span class="help-block">
                    <strong>{{ $errors->first('item') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" id="price" class="form-control" oninput="calculateTotalPrice()" required>
</div>

<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" name="quantity" id="quantity" class="form-control" oninput="calculateTotalPrice()" required>
</div>

<div class="form-group">
    <label for="total_price">Total Price</label>
    <input type="number" name="total_price" id="total_price" class="form-control" value="0" readonly>
</div>

<script>
function calculateTotalPrice() {
    var price = parseFloat(document.getElementById('price').value);
    var quantity = parseInt(document.getElementById('quantity').value);
    var totalPrice = price * quantity;

    if (!isNaN(totalPrice)) {
        document.getElementById('total_price').value = totalPrice;
    }
}
</script>

                                <label for="delivery_date">Delivery Date</label>
                                <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                            </div>

                            <div class="form-group">
                                <label for="order_status">Order Status</label>
                                <select class="form-control" id="order_status" name="order_status">
                                    <option value="pending">Pending</option>
                                    <option value="processing">Processing</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
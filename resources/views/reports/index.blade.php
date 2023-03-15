@extends('layouts.app')

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="form-group">
            <label for="report_type">Report Type</label>
            <select class="form-control" id="report_type" name="report_type">
                <option value="sales">Sales</option>
                <option value="inventory">Inventory</option>
                <option value="deliveries">Deliveries</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Generate Report</button>
    </form>
    <br>
    <div id="report-results"></div>
</div>
@endsection
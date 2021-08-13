@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Customers</h1>
@stop

@section('content')
<div class="form-group row">
    <label for="inputEmail" class="col-sm-3 col-form-label">Latitude</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude" required>
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail" class="col-sm-3 col-form-label">Longitude</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude" required>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-8 offset-sm-3">
        <button type="submit" class="btn btn-primary" id="search_customer">Submit</button>
    </div>
</div>
<table class="table table-bordered sort-datatable d-none">
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Contact No.</th>
            <th>Country</th>
            <th>City</th>
            <th>GPS LAt.</th>
            <th>GPS LONG.</th>
            <th>Distance in Mi.</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
@stop

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<style>

</style>
@stop

@section('js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>

    var i =1;
    $('#search_customer').on('click', function(e) {
        $('.sort-datatable').removeClass('d-none');
        if(i == 1){
            i++;
        }else{
            $(".sort-datatable").dataTable().fnDestroy();
        }
            
        $('.sort-datatable').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [[ 9, "asc" ]],
            "ajax": {
                "url": "{{route('customer.sort.api')}}",
                "type": "POST",
                "data": {
                "latitude": $('#latitude').val(),
                "longitude": $('#longitude').val(),
                "_token": "{{csrf_token()}}"
            },
            },
            "columns": [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name'
                },
                {
                    data: 'dob',
                    name: 'dob'
                },
                {
                    data: 'contact_no',
                    name: 'contact_no'
                },
                {
                    data: 'country_name',
                    name: 'country_name'
                },
                {
                    data: 'city_name',
                    name: 'city_name'
                },
                {
                    data: 'gps_lat',
                    name: 'gps_lat'
                },
                {
                    data: 'gps_long',
                    name: 'gps_long'
                },
                {
                    data: 'distance',
                    name: 'distance'
                },
                {
                    data: 'action',
                    name: 'action',
                },
            ]
        });
    });
</script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<!-- <p>Welcome to this beautiful admin panel.</p> -->

<div class="col-sm-3 offset-sm-10">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCustomerModal">
        + Customers
    </button>
</div>

<div class="container">
    <table class="table table-bordered yajra-datatable">
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<div class="modal fade" id="createCustomerModal" tabindex="-1" role="dialog" aria-labelledby="createCustomerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Customers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="customer_form" method="post">
                <input type="hidden" name="customer_id" id="customer_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Contact No.</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Select Country</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="country_id" name="country_id">
                                <option value="1">Nepal</option>
                                <option value="3">India</option>
                                <option value="3">China</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Select City</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="city_id" name="city_id">

                                <option value="1">kathamandu</option>
                                <option value="3">pokhara</option>
                                <option value="3">biratnagar</option>
                                <option value="4">janakpur</option>
                                <option value="5">birganj</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Full Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Full Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">GPS LAT</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="gps_lat" name="gps_lat" placeholder="GPS latitude " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">GPS LONG</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="gps_long" name="gps_long" placeholder="GPs longitude" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <label class="form-check-label"><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <button type="submit" class="btn btn-primary" id="create_customer">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="customer_form" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Contact No.</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Select Country</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="country_id" name="country_id">
                                <option value="1">Nepal</option>
                                <option value="3">India</option>
                                <option value="3">China</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Select City</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="city_id" name="city_id">

                                <option value="1">kathamandu</option>
                                <option value="3">pokhara</option>
                                <option value="3">biratnagar</option>
                                <option value="4">janakpur</option>
                                <option value="5">birganj</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Full Address</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Full Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">GPS LAT</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="gps_lat" name="gps_lat" placeholder="GPS latitude " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">GPS LONG</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="gps_long" name="gps_long" placeholder="GPs longitude" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <label class="form-check-label"><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-3">
                            <button type="submit" class="btn btn-primary" id="create_customer">Create</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    .bs-example {
        margin: 30px;
    }
</style>
@stop

@section('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('customer.list.api') }}",
            columns: [{
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
                    data: 'country_id',
                    name: 'country_id'
                },
                {
                    data: 'city_id',
                    name: 'city_id'
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
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });

    $('#customer_form').on('submit', function(e) {
        e.preventDefault();
        // alert('clicked');
        // console.log($('#customer_form').serialize());
        // return false;
        // var formdata = new FormData(this);
        // // formdata.append('_token', "{{csrf_token()}}");
        // console.log(formdata);
        $.ajax({
            type: "POST",
            url: "{{route('customer.store.api')}}",
            data: {
                "customer_id": $('#customer_id').val(),
                "first_name": $('#first_name').val(),
                "last_name": $('#last_name').val(),
                "dob": $('#dob').val(),
                "contact_no": $('#contact_no').val(),
                "country_id": $('#country_id').val(),
                "city_id": $('#city_id').val(),
                "address": $('#address').val(),
                "gps_lat": $('#gps_lat').val(),
                "gps_long": $('#gps_long').val(),
                "_token": "{{csrf_token()}}"
            },
            dataType: "json",

            success: function(obj) {
                console.log(obj);
                if (obj.success) {
                    window.location.reload();
                }
                // $(obj.datalists.institutes).each(function() {
                //     $("#university_id").append("<option value=\"" + this.id + "\">" + this.university_name + "</option>");
                // });
            },
            error: function(errors) {
                // var obj = errors.responseJSON.errors;
                // $.each(obj, function(key, value) {
                //     $(`#${key}-error`).html(value);
                //     $(`#${key}-error`).css('display', 'block');
                // });
            }
        });
    })

    $(document).on('click', '.edit-customer', function(e) {
        $.ajax({
            type: "POST",
            url: "{{route('customer.get.api')}}",
            data: {
                "id": $(this).data("id"),
                "_token": "{{csrf_token()}}"
            },
            dataType: "json",

            success: function(obj) {
                console.log(obj);
                $('#customer_id').val(obj.data.id),
                    $('#first_name').val(obj.data.first_name),
                    $('#last_name').val(obj.data.last_name),
                    $('#dob').val(obj.data.dob),
                    $('#contact_no').val(obj.data.contact_no),
                    $('#country_id').val(obj.data.country_id),
                    $('#city_id').val(obj.data.city_id),
                    $('#address').val(obj.data.address),
                    $('#gps_lat').val(obj.data.gps_lat),
                    $('#gps_long').val(obj.data.gps_long),
                    $('#createCustomerModal').modal('show');
            },
            error: function(errors) {
                // var obj = errors.responseJSON.errors;
                // $.each(obj, function(key, value) {
                //     $(`#${key}-error`).html(value);
                //     $(`#${key}-error`).css('display', 'block');
                // });
            }
        });
    })

    $(document).on('click', '.delete-customer', function(e) {
        var current = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{route('customer.remove.api')}}",
                    data: {
                        "id": $(this).data("id"),
                        "_token": "{{csrf_token()}}"
                    },
                    dataType: "json",

                    success: function(obj) {
                        if (obj.success)
                            current.parents('tr').remove();
                    },
                    error: function(errors) {
                        // var obj = errors.responseJSON.errors;
                        // $.each(obj, function(key, value) {
                        //     $(`#${key}-error`).html(value);
                        //     $(`#${key}-error`).css('display', 'block');
                        // });
                    }
                });
            }
        })
    })
</script>
@stop
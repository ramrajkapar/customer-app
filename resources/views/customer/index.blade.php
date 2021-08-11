@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<!-- <p>Welcome to this beautiful admin panel.</p> -->

<div class="col-sm-3 offset-sm-10">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form">
        + Customers
    </button>
</div>

<!-- <div class="bs-example">
    <form action="/examples/actions/confirmation.php" method="post">
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-8 offset-sm-3">
                <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-8 offset-sm-3">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div> -->


<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
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
                        <input type="email" class="form-control" id="gps_lat" name="gps_lat" placeholder="GPS latitude " required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3 col-form-label">GPS LONG</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="gps_long" name="gps_long" placeholder="GPs longitude" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-3">
                        <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-3">
                        <button type="button" class="btn btn-primary" id="create_customer">Create</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
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
<script>
    $('#create_customer').on('click',function(e){
        e.preventDefault();
        alert('clicked');
    })
</script>
@stop
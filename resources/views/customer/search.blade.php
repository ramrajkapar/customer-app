@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
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
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
    
</style>
@stop

@section('js')
    <script>
        $('#search_customer').on('click',function(e){
            // alert('click');
            $.ajax({
            type: "POST",
            url: "{{route('customer.sort.api')}}",
            data: {
                "latitude": $('#latitude').val(),
                "longitude": $('#longitude').val(),
                "_token": "{{csrf_token()}}"
            },
            dataType: "json",

            success: function(obj) {
                console.log(obj);
                if (obj.success) {
                    // window.location.reload();
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
        </script>
@stop
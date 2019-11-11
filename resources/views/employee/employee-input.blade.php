@extends('template')
@section('title','Input Employee')
@section('content')
<!-- Extended default form grid -->
<h3> Input Employee</h3>
<form action="/form/input" method="POST">
    {{ csrf_field() }}
    <!-- Grid row -->
    <div class="form-row col-md-6">
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputEmail4">Employee Number</label>
            <input type="text" name="emp_no" class="form-control" id="inputEmail4" placeholder="Employee Number">
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Hire Date</label>
            <input type="date" name="hire_date" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputEmail4">First Name</label>
            <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="First Name">
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="inputPassword4" placeholder="Last Name">
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Birthday</label>
            <input type="date" name="birth_date" class="form-control" id="inputPassword4" placeholder="Password">
        </div>

        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Gender</label>
            <select name="gender" class="form-control">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

    </div>
    <!-- Grid row -->
    <button type="submit" class="btn btn-primary btn-md">Submit</button>
</form>
<!-- Extended default form grid -->
@endsection
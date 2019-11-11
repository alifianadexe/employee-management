@extends('template')
@section('title','Input Employee')
@section('content')
<!-- Extended default form grid -->
@if ($disabled == "disabled=true")
    <h3> Detail Employee</h3>    
@else
    <h3> Edit Employee</h3>
@endif

@foreach ($employee as $emp)
<form action="/form/update" method="POST">
    {{ csrf_field() }}
    <!-- Grid row -->
    <div class="form-row col-md-6">
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputEmail4">Employee Number</label>
        <input type="text" name="emp_no" class="form-control" id="inputEmail4" placeholder="Employee Number" value="{{ $emp->emp_no }}" readonly>
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Hire Date</label>
            <input type="date" name="hire_date" class="form-control" id="inputPassword4" placeholder="Hire Date" value="{{ $emp->hire_date }}" {{ $disabled }}>
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputEmail4">First Name</label>
            <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="First Name" value="{{ $emp->first_name }}" {{ $disabled }}>
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="inputPassword4" placeholder="Last Name" value="{{ $emp->last_name }}" {{ $disabled }}>
        </div>
        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Birthday</label>
            <input type="date" name="birth_date" class="form-control" id="inputPassword4" placeholder="Password" value="{{ $emp->birth_date }}" {{ $disabled }}>
        </div>

        <!-- Default input -->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Gender</label>
            <select name="gender" class="form-control"  {{ $disabled }}>
                @if ($emp->gender)
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                @else
                    <option value="F">Female</option>
                    <option value="M">Male</option>    
                @endif
            </select>
        </div>

    </div>

    @if ($disabled == "disabled=true")
        <!-- Grid row -->
        <a href="/edit/{{ $emp->emp_no }}"><button type="button" class="btn btn-success btn-md">Edit</button></a>
    @else
        <button type="submit" class="btn btn-primary btn-md">Submit</button>    
    @endif
    
</form>    
@endforeach
<!-- Extended default form grid -->
@endsection
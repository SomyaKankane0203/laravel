@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">student form</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/student_register') }}">
        {{ csrf_field() }}
         <div class="form-group">
            <label for="email">  student name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="grade">            grade:</label>
            <input type="text" class="form-control" id="grade" name="grade">
        </div>
        <div class="form-group">
            <label for="email">        photo:</label>
            <input type="text" class="form-control" id="photo" name="photo">
        </div>
        <div class="form-group">
            <label for="dob">        date of birth:</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="address">        address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="city">        city:</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="country">   country </label>
                <input type="text" class="form-control" id="country" name="country">
        </div>

        <!-- <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div> -->
 
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

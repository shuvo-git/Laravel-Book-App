@extends('layouts.app')

@section('content')

    <div id="reg-form">
        <h3>Register User</h3>
        <hr>
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        
            <div class="form-group">
                <label for="userid">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class="form-control" id="password_confirmation"
                       name="password_confirmation">
            </div>
        
            <div class="form-group">
                <button style="cursor: pointer" type="submit" class="btn btn-success">Submit</button>
            </div>
            @include('partials.formerrors')
        </form>
    </div>


@endsection
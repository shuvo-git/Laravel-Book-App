@extends('layouts.app')

@section('content')
    
        <div id="login-form" >
    
            <h4>Login User</h4>
            <hr>
            <form method="POST" action="/login">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="userid">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            
                <div class="form-group">
                    <button style="cursor: pointer" type="submit" class="btn btn-success">Submit</button>
                </div>
                @include('partials.formerrors')
                
            </form>

        </div>

    
    
@endsection
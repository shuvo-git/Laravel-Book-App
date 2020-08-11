@extends('layouts.app')

@section('content')
    <br/>
    <!--div class="greener">
        @ if(--auth()->check()-- )
            <h2 class="text-anim" id="text-anim">Hi {{--auth()->user()->name--}}, </h2>  
        @ endif
        <h4> Welcome to the most popular content sharing site (Books etc.) that you may love.</h4>
    </div-->


    
    <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="{{ asset('images/bg_text.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="{{ asset('images/bg_text.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="{{ asset('images/bg_text.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
    </div>

    <!-- Code begins here -->
    <a href="#" class="float">
    <i class="fa fa-plus my-float"></i>
    </a>
@endsection
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #15a77d;">
  <a class="navbar-brand" href="/" id="text-main">
    <img src="{{ asset('images/books.svg') }}" width="20" height="30" alt="" loading="lazy">
    BookWorm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      @if( auth()->check() )
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/register">Register</a>
        </li>
      @endif

    </ul>
  </div>

</nav>



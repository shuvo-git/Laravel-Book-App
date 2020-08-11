<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    <header >
        @include('includes.header')
    </header>

    <div class="container">
        <div >
            @yield('content')
        </div>
        <br/>
        <footer >
            @include('includes.footer')
        </footer>
    </div>
    
</body>
</html>
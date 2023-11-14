<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.header')
    </head>
    <body class="antialiased">
        <div class="main" id="main">
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>

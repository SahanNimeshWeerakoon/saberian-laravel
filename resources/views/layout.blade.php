<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.header')
    </head>
    <body class="antialiased">
        <nav class="nav p-5">
            <div class="d-flex justify-content-between align-items-center container">
                <img src="/img/saberion-logo.svg" alt="logo" title="logo" />
                <div class="nav_links">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">CREATE PRODUCT</a>
                </div>
            </div>
        </nav>
        <div class="main" id="main">
            @yield('content')
        </div>
        @include('includes.footer')
    </body>
</html>

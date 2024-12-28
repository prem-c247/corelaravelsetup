<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
    <header>
        @include('layout.partials.header')
    </header>
    <body>
        @include('layout.partials.sidebar')
    </body>

    @yield('content')

<footer class="text-muted">
    @include('layout.partials.footer')
</footer>
</html>
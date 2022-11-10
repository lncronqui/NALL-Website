<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NALL Library - Admin</title>
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <header>
        @include('layouts.admin.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layouts.admin.footer')
    </footer>
</body>

</html>

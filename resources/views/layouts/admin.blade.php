<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NALL Library - Admin</title>
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="w-full h-screen">
    <header class="row">
        @include('layouts.admin.header')
    </header>
    <main class="row">
        @yield('content')
    </main>
    <footer class="row">
        @include('layouts.admin.footer')
    </footer>
</body>
</html>

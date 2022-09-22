<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('img/nall_logo.png') }}">
    <title>| NALL</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <x-import></x-import>
</head>

<body style="height: 100%; width: 100%;">
    {{ $slot }}
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all()     as $error)
            <span style="color:red">{{ $error }}</span><br>
        @endforeach
    @endif

    @if (session('success'))
        <span style="color:green">{{ session('success') }}</span><br>
    @endif

    Last Updated by: {{ $info->user->name }}<br>
    <form action="{{ route('admin.overall.website-info.update', $info)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="about" value="{{ $info->about }}"><br>
        <input type="text" name="history" value="{{ $info->history }}"><br>
        <input type="text" name="mission" value="{{ $info->mission }}"><br>
        <input type="text" name="vision" value="{{ $info->vision }}"><br>
        <input type="text" name="objectives" value="{{ $info->objectives }}"><br>
        <input type="text" name="address_1" value="{{ $info->address_1 }}"><br>
        <input type="text" name="address_2" value="{{ $info->address_2 }}"><br>
        <input type="text" name="city" value="{{ $info->city }}"><br>
        <input type="text" name="zip_code" value="{{ $info->zip_code }}"><br>
        <input type="text" name="tel_number" value="{{ $info->tel_number }}"><br>
        <input type="email" name="email" value="{{ $info->email }}"><br>
        <input type="url" name="fb_page" value="{{ $info->fb_page }}"><br>
        <input type="url" name="website" value="{{ $info->website }}"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

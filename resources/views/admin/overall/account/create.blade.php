@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span style="color:red">{{ $error }}</span><br>
        @endforeach
    @endif
    @if (session('success'))
        <span style="color:green">{{ session('success') }}</span><br>
    @endif
    <form action="{{ route('admin.overall.accounts.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Admin Name"><br>
        <input type="email" name="email" placeholder="Email Address"><br>
        <select name="institution_id" id="">
            <option disabled selected>--Select Institution--</option>
            @foreach ($institutions as $institution)
                <option value="{{ $institution->id }}">{{ $institution->name }}</option>
            @endforeach
        </select><br>
        <select name="role_id" id="">
            <option disabled selected>--Select Role--</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password"><br>
        <button type="submit">Add User</button>
    </form>
@endsection

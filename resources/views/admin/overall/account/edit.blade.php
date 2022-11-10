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
    <form action="{{ route('admin.overall.accounts.update', $user) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}"><br>
        <input type="email" name="email" value="{{ $user->email }}"><br>
        <select name="institution_id">
            @foreach ($institutions as $institution)
                <option value="{{ $institution->id }}" @if ($user->institution_id == $institution->id) selected @endif>
                    {{ $institution->name }}
                </option>
            @endforeach
        </select><br>
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}"  @if ($user->role_id == $role->id) selected @endif>
                    {{ $role->name }}
                </option>
            @endforeach
        </select><br>
        <button type="submit">Add User</button>
    </form>
@endsection

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
    <form method="post" action="{{ route('admin.profile.update', $user) }}">
        @csrf
        @method('PATCH')
        <input type="text" name="name" value="{{ $user->name }}"><br>
        <input type="email" name="email" value="{{ $user->email }}"><br>
        <select name="institution_id">
            @foreach ($institutions as $institution)
                @if ($institution->id == $user->institution_id)
                    <option value="{{ $institution->id }}" selected>{{ $institution->name }}</option>
                @else
                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                @endif
            @endforeach
        </select><br>
        <input type="password" name="password"><br>
        <input type="password" name="confirm_password"><br>
        <button class="border border-black px-2 py-1 hover:bg-black/10" type="submit">Update</button>
    </form>
    <br>
    <form action="{{ route('admin.profile.destroy', $user) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="border border-black px-2 py-1 hover:bg-black/10" type="submit" onclick="confirm('Do you want to delete this account?');">Delete account</button>
    </form>
@endsection

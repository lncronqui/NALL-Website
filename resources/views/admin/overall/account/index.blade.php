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
    @isset($users)
        <table>
            <tr>
                <th>@sortablelink('name', 'Name')</th>
                <th>@sortablelink('email', 'Email Address')</th>
                <th>@sortablelink('role_id', 'Role')</th>
                <th>@sortablelink('institution_id', 'Institution')</th>
                <th>Actions</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->institution->name }}</td>
                    <td><a href="{{ route('admin.overall.accounts.edit', $user) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    @endisset
@endsection

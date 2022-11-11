@extends('layouts.admin')

@section('content')
    @isset($institutions)
        <table>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach ($institutions as $institution)
                <tr>
                    <td>{{ $institution->name }}</td>
                    <td><a href="{{ route('admin.overall.institutions.edit', $institution) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
    @endisset
@endsection

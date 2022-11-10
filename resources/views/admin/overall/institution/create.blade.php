@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.overall.institutions.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Institution Name">
        <button type="submit">Add Institution</button>
    </form>
@endsection

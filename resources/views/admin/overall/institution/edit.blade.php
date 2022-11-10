@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.overall.institutions.update', $institution) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $institution->name }}">
        <button type="submit">Update Institution</button>
    </form>
@endsection

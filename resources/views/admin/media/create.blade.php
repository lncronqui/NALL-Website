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
    <form action="{{ route('admin.media.store') }}" method="post">
        @csrf
        @method('POST')
        <select name="resource_type_id" required>
            <option value="" selected disabled>--select resource type--</option>
            @foreach ($resourceTypes as $resourceType)
                <option value="{{ $resourceType->id }}">{{ $resourceType->name }}</option>
            @endforeach
        </select><br>
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="abstract" placeholder="Abstract"><br>
        <input type="text" name="journal_id" placeholder="Journal Title"><br>
        <input type="url" name="url" placeholder="URL"><br>
        <input type="url" name="doi" placeholder="DOI"><br>
        <input type="number" name="page" placeholder="Page"><br>
        <input type="date" name="date" placeholder="Date"><br>
        <select name="access_type_id" required>
            <option value="" selected disabled>--select access type--</option>
            <option value="1">Private</option>
            <option value="2">Public</option>
        </select><br>
        <input type="text" name="authorName" placeholder="Author Name"><br>
        <input type="email" name="authorEmail" placeholder="Author Email"><br>
        <input type="submit" value="Submit">
    </form>
@endsection

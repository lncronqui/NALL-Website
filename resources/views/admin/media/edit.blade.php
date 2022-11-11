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
    <form action="{{ route('admin.media.update', $mediaResource) }}" method="post">
        @csrf
        @method('PUT')
        <select name="resource_type_id" required>
            @foreach ($resourceTypes as $resourceType)
                <option value="{{ $resourceType->id }}" @if ($mediaResource->resource_type->id === $resourceType->id) selected @endif>
                    {{ $resourceType->name }}
                </option>
            @endforeach
        </select><br>
        <input type="text" name="title" value="{{ $mediaResource->title }}"><br>
        <input type="text" name="abstract" value="{{ $mediaResource->abstract }}"><br>
        <input type="text" name="journal_id" value="@isset($mediaResource->journal_title->name){{ $mediaResource->journal_title->name }}@endisset"><br>
        <input type="url" name="url" value="{{ $mediaResource->url }}"><br>
        <input type="url" name="doi" value="{{ $mediaResource->doi }}"><br>
        <input type="number" name="page" value="{{ $mediaResource->page }}"><br>
        <input type="date" name="date" value="{{ $mediaResource->date }}"><br>
        <select name="access_type_id" required>
            <option value="1" @if ($mediaResource->access_type_id == 1) selected @endif>
                Private
            </option>
            <option value="2" @if ($mediaResource->access_type_id == 2) selected @endif>
                Public
            </option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
@endsection

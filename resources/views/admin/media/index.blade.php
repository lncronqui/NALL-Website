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
    <table>
        <tr>
            <th>@sortablelink('resource_type_id', 'Resource Type')</th>
            <th>@sortablelink('institution_id', 'Institution')</th>
            <th>@sortablelink('title', 'Title')</th>
            <th>Abstract</th>
            <th>Journal Title</th>
            <th>URL</th>
            <th>DOI</th>
            <th>@sortablelink('page', 'Page')</th>
            <th>@sortablelink('date', 'Date')</th>
            <th>@sortablelink('access_type_id', 'Access Type')</th>
            <th>Encoded By</th>
            <th>Actions</th>
        </tr>
        @foreach ($medias as $mediaResource)
            <tr>
                <td>{{ $mediaResource->resource_type->name }}</td>
                <td>
                    {{ $mediaResource->institution->name }}
                </td>
                <td>{{ $mediaResource->title }}</td>
                <td>{{ $mediaResource->abstract }}</td>
                <td>
                    @isset($mediaResource->journal_title->name)
                        {{ $mediaResource->journal_title->name }}
                    @endisset
                </td>
                <td>{{ $mediaResource->url }}</td>
                <td>{{ $mediaResource->doi }}</td>
                <td>{{ $mediaResource->page }}</td>
                <td>{{ $mediaResource->date }}</td>
                <td>
                    @if ($mediaResource->access_type->id == 1)
                        Private
                    @else
                        Public
                    @endif
                </td>
                <td>{{ $mediaResource->encoded_by }}</td>
                <td>
                    <a href="{{ route('admin.media.edit', $mediaResource) }}">Edit</a><br>
                    @if (auth()->user()->role->id == 3)
                        <form action="{{ route('admin.overall.media.approve', $mediaResource) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Approve</button><br>
                        </form>
                    @endif
                    <form action="{{ route('admin.media.to_delete', $mediaResource) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" onclick="confirm('Confirm delete?');">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {{ $medias->links() }}
@endsection

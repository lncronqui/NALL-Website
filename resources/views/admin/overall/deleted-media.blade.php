@extends('layouts.admin')

@section('content')
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
        @foreach ($medias as $media)
            <tr>
                <td>{{ $media->resource_type->name }}</td>
                <td>
                    @isset($media->institution->name)
                        {{ $media->institution->name }}
                    @endisset
                </td>
                <td>{{ $media->title }}</td>
                <td>{{ $media->abstract }}</td>
                <td>
                    @isset($media->journal_title->name)
                        {{ $media->journal_title->name }}
                    @endisset
                </td>
                <td>{{ $media->url }}</td>
                <td>{{ $media->doi }}</td>
                <td>{{ $media->page }}</td>
                <td>{{ $media->date }}</td>
                @if ($media->access_type->id == 1)
                    <td>Private</td>
                @else
                    <td>Public</td>
                @endif
                <td>{{ $media->encoded_by }}</td>
                <td>
                    <button>Edit</button><br>
                    @if (auth()->user()->role->id == 3)
                    <button>Approve</button><br>
                    @endif
                    <button>Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $medias->links() }}
@endsection

<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />

<div class="print">
    <div class="tbl-header mt-10">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Institution</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Subject</th>
                    <th>Number of Pages</th>
                    <th>Access Type</th>
                    <th>Publishing Date</th>
                    <th>Encoded By</th>
                    <th>
                        @if (auth()->user()->role('Overall Administrator'))
                            Approved by
                        @else
                            Status
                        @endif
                    </th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mediaResources as $mediaResource)
                    <tr>
                        <td>{{ $mediaResource->institution->name }}</td>
                        <td>{{ $mediaResource->title }}</td>
                        <td>
                            @foreach ($mediaResource->authors as $author)
                                {{ $author->name }} <br>
                            @endforeach
                        </td>
                        <td>{{ $mediaResource->subject->name }}</td>
                        <td>{{ $mediaResource->page }}</td>
                        <td>
                            @if ($mediaResource->access_type->public)
                                Public
                            @else
                                Private
                            @endif
                        </td>
                        <td>{{ $mediaResource->date }}</td>
                        <td>{{ $mediaResource->encoded_by }}</td>
                        <td>
                            @if (auth()->user()->role('Overall Administrator'))
                                {{ $mediaResource->approved_by }}
                            @else
                                @if (isset($mediaResource->approved_by))
                                    Released
                                @else
                                    To approve
                                @endif
                            @endif
                        </td>
                        <td>
                            <div class="flex space-x-2">
                                <div><a class="function-hover" href="#">Edit</a></div>
                                <div><a class="function-hover" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

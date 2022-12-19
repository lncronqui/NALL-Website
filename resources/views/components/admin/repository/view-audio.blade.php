<link href="/css/tableaudio.css" rel="stylesheet" type="text/css" />

                        <!-- display if submission is success or error-->
                        @if(session('success'))
                            <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                                {{ session('success') }}
                            </div>
                        @endif

<div class="audio">
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Institution</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Subject</th>
                    <th>URL</th>
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
        </table>
    </div>

    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
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
                        <td>{{ $mediaResource->url }}</td>
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
                        <td><a class="function-hover" href="#" onclick="toggle2()">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

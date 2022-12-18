<link href="/css/tableaccess.css" rel="stylesheet" type="text/css" />

<div class="access">
    <div class="tbl-header mt-16">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Institution</th>
                    <th>Email</th>
                    <th>Media Type</th>
                    <th>Media Title</th>
                    <th>Functions</th>
                </tr>
            </thead>
        </table>
    </div>

    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                @foreach ($users as $user)
                    @foreach ($user->requests as $request)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->institution->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $request->resource_type->name }}</td>
                            <td>{{ $request->title }}</td>
                            <td><a class="function-hover" href="#">Delete</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>

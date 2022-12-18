<link href="/css/useradminlist.css" rel="stylesheet" type="text/css" />
<link href="/css/style.css" rel="stylesheet" type="text/css" />

<div class="useradmin">
    <div class="tbl-header mt-16">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <!--<th>ID</th>-->
                    <th>Name</th>
                    <th>Institution</th>
                    <th>Email</th>
                    <!--<th>Functions</th>-->
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <!--<td>{{ $user->id }}</td>-->
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->institution->name }}</td>
                        <td>{{ $user->email }}</td>
                        <!--<td>
                            <div class="flex space-x-2">
                                <div><a class="function-hover" href="#">Edit</a></div>
                                <div><a class="function-hover" href="#">Delete</a></div>
                            </div>
                        </td>-->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

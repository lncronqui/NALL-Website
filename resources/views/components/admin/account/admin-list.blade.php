<link href="/css/useradminlist.css" rel="stylesheet" type="text/css" />

                        <!-- display if submission is success or error-->
                        @isset($success)
                            <div class="font-bold text-center"><a class="" style="color:green;">
                                    {{ $success }}
                            </div>
                        @endisset

<div class="useradmin">
    <div class="tbl-header mt-10">
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
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->institution->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

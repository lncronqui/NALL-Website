<link href="/css/useradminlist.css" rel="stylesheet" type="text/css" />
<link href="/css/style.css" rel="stylesheet" type="text/css" />

                        <!-- display if submission is success or error-->
                        @if(session('success'))
                            <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                                {{ session('success') }}
                            </div>
                        @endif

<div class="useradmin">
    <div class="tbl-header mt-10">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Institution</th>
                    <th>Email</th>
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

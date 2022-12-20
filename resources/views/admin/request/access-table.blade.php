<link href="/css/tableaccess.css" rel="stylesheet" type="text/css" />
 <!-- display if submission is success or error-->
 @if(session('success'))
                            <div class="font-bold text-left pb-2" style="color:green;">
                                {{ session('success') }}
                            </div>
                        @endif
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
                            <td><a class="function-hover" onclick="toggle2()">Delete</a>

                                <!-- delete popup -->
                                <div id="popup2">
                                    <form
                                        action="{{ route('admin.overall.repository.destroy', $video) }}"
                                        method="post" id="del">
                                        @csrf
                                        @method('DELETE')
                                                   
                                        <h1 class="text-center text-lg font-bold">Repository Deletion</h1>
                                        <br>
                                        <p class="text-center">Are you sure that you want to delete this
                                        Repository?</p>
                                        <br>
                                        <button class="btn4 " 
                                        style="width: 6em;">Yes</button> 
                                        </form>
                                                    
                                        <button class="btn4 mt-1" onClick="toggle2()" data-dismiss="popup2"
                                            style="width: 6em;">No</button> 
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
                    function toggle2() {
                        var popup = document.getElementById('popup2');
                        popup.classList.toggle('active');
                    }
            </script>

    <script>
    function siteRedirect() {
        var selectbox = document.getElementById("editFormat");
        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
        window.location.href = selectedValue;
    }</script>
</div>

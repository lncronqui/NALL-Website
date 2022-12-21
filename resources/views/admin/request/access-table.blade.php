<div class="hello" id="blur">
<link href="/css/tableaccess.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                            <td><button type="button" class="function-hover deleteRequestBtn" value="{{ $request->id }}">{{ $request->id }} Delete</button></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- <p id="g"></p>
    <script>
                    function toggle2() {
                        var blur=document.getElementById('blur');
                        blur.classList.toggle('active');
                        var popup = document.getElementById('popup2');
                        popup.classList.toggle('active');
                    }
            </script> -->

    <script>
    function siteRedirect() {
        var selectbox = document.getElementById("editFormat");
        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
        window.location.href = selectedValue;
    }</script>
</div>
</div>

<!-- delete popup
<div id="popup2">
                                    <form
                                        action="{{ route('admin.access-request.detach') }}"
                                        method="post" id="del">
                                        @csrf
                                        <input type="hidden" name="user" value="{{ $user->id }}">
                                        <input type="hidden" name="mediaResource" value="{{ $request->id }}">
                                        <h1 class="text-center text-lg font-bold">{{ $user->name }} {{ $request->id }}</h1>
                                        <br>
                                        <p class="text-center">Are you sure that you want to delete this
                                        Repository?</p>
                                        <br>
                                        </form>

                                        <div class="text-center">
                                                        <button class="btn4" style="width: 6em;" form="del">Yes</button>
                                                        <button class="btn4" onClick="toggle2()" data-dismiss="popup2" style="width: 6em;">No</button>
                                                    </div>
                                </div> -->


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('admin.access-request.detach', $request->id) }}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request Access Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @csrf
                @method('DELETE')
                <h1 class="text-center text-lg font-bold" id="demo">Repository Deletion</h1>
                <br>
                <p class="text-center">Are you sure that you want to delete this Repository?</p>
                <br>  
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Confirm Deletion</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>      
    $(document).ready(function (){
        $('.deleteRequestBtn').click(function(e){
            e.preventDefault();
            var request_id = $(this).val();
            document.getElementById("demo").innerHTML = request_id;
            $('#request_id').val(request_id);
            ('#deleteModal').modal('show');
        });
    });
</script>

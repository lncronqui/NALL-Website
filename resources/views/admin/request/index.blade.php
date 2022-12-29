<x-admin.layout>

    <div
        class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

        <div class="text-left col-span-2">
            <x-admin.side-nav></x-admin.side-nav>
            <script>
                const myElement = document.getElementById("access-request");
                myElement.style.color = "#2E052D";
                myElement.style.fontWeight = "500";
            </script>
        </div>

        <div class="text-left col-span-8">
            <div class="ml-10 mt-5 mr-8">

                <h1 class="text-3xl font-extrabold mb-6 ml-2">Access Requests</h1>

                <div class="flex flex-row gap-x-2">
                    <div class="search-bar" style="width: 100%;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" name="">
                    </div>
                </div>

                <link href="/css/tableaccess.css" rel="stylesheet" type="text/css" />

                <!-- display if submission is success or error-->
                @if (session('success'))
                    <div class="font-bold text-left pb-2" style="color:green;">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="access mt-16">
                    <div class="tbl-header">
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
                                    @isset($user->requests)
                                        @foreach ($user->requests as $request)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                @if (isset($user->institution->name))
                                                    <td>{{ $user->institution->name }}</td>
                                                @else
                                                    <td></td>
                                                @endif

                                                <td>{{ $user->email }}</td>
                                                <td>{{ $request->resource_type->name }}</td>
                                                <td>{{ $request->title }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('admin.repository.destroy', $request) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class=" btn-danger  show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>
        <script>
            function siteRedirect() {
                var selectbox = document.getElementById("editFormat");
                var selectedValue = selectbox.options[selectbox.selectedIndex].value;
                window.location.href = selectedValue;
            }
        </script>
</x-admin.layout>

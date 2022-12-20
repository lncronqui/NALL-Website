<x-admin.layout>
<link href="/css/useradminlist.css" rel="stylesheet" type="text/css" />

<div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

        <div class="text-left col-span-2">
            <x-admin.side-nav></x-admin.side-nav>
            <script>
                const myElement = document.getElementById("useradmin-list");
                myElement.style.color = "#2E052D";
                myElement.style.fontWeight = "500";
            </script>
        </div>

        <div class="text-left col-span-8">
            <div class="ml-10 mt-5 mr-8">

                <h1 class="text-3xl font-extrabold mb-6 ml-2">User and Admin List</h1>

                <div class="flex flex-row gap-x-6">
                    <div class="search-bar" style="width: 75%;">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" name="">
                    </div>

                    <a class="no-underline" href="{{ route('admin.overall.accounts.create') }}">
                        <button class="btn" style="width: 19rem; border-radius: 10px;">
                            +Add Admin
                        </button>
                    </a>

                </div>

                <div class="flex flex-row gap-x-2 mt-6 ">
                    <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                        <div class="select ml-2">
                            <select name="format" id="editFormat" onChange="siteRedirect()">
                                <option selected disabled>Choose Type</option>
                                <option value="">Overall Admin</option>
                                <option value="">Admin</option>
                                <option value="">User</option>
                            </select>
                        </div>
                </div>

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
                </div>
            </div>

    </div>

    <script>
    function siteRedirect() {
        var selectbox = document.getElementById("editFormat");
        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
        window.location.href = selectedValue;
    }</script> 
</x-admin.layout>

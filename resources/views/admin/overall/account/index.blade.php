<x-admin.layout>
    <div
        class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

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
                        <input type="text" disabled name="">
                    </div>

                    <a class="no-underline" href="{{ route('admin.overall.accounts.create') }}">
                        <button class="btn btn-length" style="border-radius: 10px;">
                            +Add Admin
                        </button>
                    </a>

                </div>

                <div class="flex flex-row gap-x-2 mt-6 ">
                    <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                    <div class="select ml-2">
                        <select name="format" id="editFormat" onChange="siteRedirect()">
                            <option selected disabled>Choose Type</option>
                            <option value="{{ route('admin.overall.accounts.view.overall') }}">Overall Admin
                            </option>
                            <option value="{{ route('admin.overall.accounts.view.uni') }}">Admin</option>
                            <option value="{{ route('admin.overall.accounts.view.user') }}">User</option>
                        </select>
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
        }
    </script>


    <!-- <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();

        function printedFunction() {
            var listFormat = document.getElementById("listFormat");
            var selectedValue = listFormat.options[listFormat.selectedIndex].value;

            if (selectedValue == "o-admin") {
                document.getElementById("overall-admin").style.display = 'block';
                document.getElementById("admin-list").style.display = 'none';
                document.getElementById("user-list").style.display = 'none';
            } else if (selectedValue == "admin") {
                document.getElementById("overall-admin").style.display = 'none';
                document.getElementById("admin-list").style.display = 'block';
                document.getElementById("user-list").style.display = 'none';
            } else if (selectedValue == "user") {
                document.getElementById("overall-admin").style.display = 'none';
                document.getElementById("admin-list").style.display = 'none';
                document.getElementById("user-list").style.display = 'block';
            } else {
                document.getElementById("overall-admin").style.display = 'none';
            }
        }
    </script> -->


</x-admin.layout>

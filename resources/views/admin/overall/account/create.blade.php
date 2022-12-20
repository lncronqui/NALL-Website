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
            <div class="border-b-2 border-gray-300 ml-16 mt-5 mr-16">
                <h1 class="text-3xl font-extrabold mb-3 ml-2 text-center">Add Admin</h1>
            </div>
            <div class="ml-16 mt-3 mr-16 mb-10">
                <a style="font-size:24px" class="fa" style="color: #C4C4C4;"
                    href="{{ route('admin.overall.accounts.index') }}">&#xf060;</a>
                <h1 class="text-2xl mt-2 font-bold ml-2 text-center" style="margin-top:-20px;">Type </h1>
                <div class="border-b-2 border-gray-300">
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                        <select name="format" id="editFormat" onchange="siteRedirect()">
                            <option selected disabled>Overall Admin / University Admin</option>
                            <option value="{{ route('admin.overall.accounts.create.overall') }}">Overall Admin</option>
                            <option value="{{ route('admin.overall.accounts.create.uni') }}">University Admin</option>
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
</x-admin.layout>

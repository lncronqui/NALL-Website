<x-admin.layout>
    <link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />
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
                    href="{{ route('admin.overall.accounts.create') }}">&#xf060;</a>
                <h1 class="text-2xl mt-2 font-bold ml-2 text-center" style="margin-top:-20px;">Type </h1>
                <div class="border-b-2 border-gray-300">
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                        <select name="format" id="editFormat" onchange="siteRedirect()">
                            <option selected disabled>University Admin</option>
                            <option value="{{ route('admin.overall.accounts.create.overall') }}">Overall Admin</option>

                        </select>
                    </div>
                </div>


                <div class="uni">
                    <div class="ml-20 mr-20 mt-6 mb-6">
                        <div class="border-b-2 border-gray-300">
                            <div class="ml-16 mr-16">
                                <form method="POST" action="{{ route('admin.overall.accounts.store.uni') }}">
                                    @csrf
                                    <div class="flex mb-5">
                                        <label class="block text-gray-700 text-lg font-semibold" for="uni-name"
                                            style="color:#2E052D;">
                                            Name:
                                        </label>
                                        <input
                                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                                            style="margin-left: 60px;" id="uni-name" type="text" name="name" required>
                                    </div>
                                    <div class="flex mb-5">
                                        <label class="block text-gray-700 text-lg font-semibold" for="uni-email"
                                            style="color:#2E052D;">
                                            Email:
                                        </label>
                                        <input
                                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                        focus:outline-none focus:shadow-outline ml-16"
                                            id="uni-email" type="email" name="email" required>
                                    </div>
                                    <div class="flex mb-8">
                                        <label class="block text-gray-700 text-lg font-semibold" for="overall-acc"
                                            style="color:#2E052D;">
                                            Institution:
                                        </label>
                                        <div>
                                            <select name="institution_id"
                                                class="shadow appearance-none border rounded w-full ml-3 mr-3 h-12 py-2 px-3"
                                                style="margin-left:24px;">
                                                <option selected disabled>---Select Institution---</option>
                                                @foreach ($institutions as $institution)
                                                    <option value="{{ $institution->id }}">{{ $institution->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <!-- display if submission is success or error-->
                        @if ($errors->any())
                            <div class="font-bold text-center pt-2"><a class="" style="color:red;">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                            </div>
                        @endisset


                        <!-- buttons -->
                        <div class="mt-10 text-center">
                            <button type="submit" class="btn4"
                                style="width: 40%; height: 3rem; border-radius: 5px;">
                                Add
                            </button>
                        </div>
                        </form>

                </div>
                <script>
                    function siteRedirect() {
                        var selectbox = document.getElementById("editFormat");
                        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
                        window.location.href = selectedValue;
                    }
                </script>

            </div>
        </div>
    </div>
</x-admin.layout>

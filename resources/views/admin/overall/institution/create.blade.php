<x-admin.layout>
    <div
        class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

        <div class="text-left col-span-2">
            <x-admin.side-nav></x-admin.side-nav>
            <script>
                const myElement = document.getElementById("institution-list");
                myElement.style.color = "#2E052D";
                myElement.style.fontWeight = "500";
            </script>
        </div>
        <div class="text-left col-span-8">
            <form method="POST" action="{{ route('admin.overall.institutions.store') }}">
                @csrf
                <div class="border-b-2 border-gray-300 ml-16 mt-5 mr-16">
                    <h1 class="text-3xl font-extrabold mb-3 ml-2 text-center">Add an Institution</h1>
                </div>
                <div class="border-b-2 border-gray-300 ml-16 mt-3 mr-16 mb-10">
                    <a style="font-size:24px" class="fa" style="color: #C4C4C4;" href="{{ route('admin.overall.institutions.index') }}">&#xf060;</a>
                    <h1 class="text-2xl mt-2 font-bold text-center" style="margin-top:-25px;">Institution </h1>
                    <div class="border-b-2 border-gray-300 mb-5">
                        <input
                            class="shadow appearance-none border rounded w-full h-12 mt-4 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            id="add-inst" type="text" required></input>
                    </div>
                </div>
                <div class="btn-pos mt-10">
                    <button class="btn4" type="submit" style="width: 100px; background-color:#2E052D;">
                        Add
                    </button>
                </div>
            </form>
        </div>
</x-admin.layout>

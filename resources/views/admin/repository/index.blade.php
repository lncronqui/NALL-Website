<x-admin.layout>
    <div class="hello" id="blur">
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                        const myElement = document.getElementById("view-repository");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">View Repository</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar search-length">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" disabled name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <a class="no-underline" href="{{ route('admin.repository.create') }}"><button class="btn" style="width: 9rem; border-radius: 10px;">+Add Article</button></a>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                            <div class="select ml-2">
                                <select name="format" id="editFormat" onChange="siteRedirect()">
                                    <option selected disabled>Choose Type</option>
                                    <option value="{{ route('admin.repository.view.printed') }}">Printed</option>
                                    <option value="{{ route('admin.repository.view.elec') }}">Electronic Resource</option>
                                    <option value="{{ route('admin.repository.view.video') }}">Video</option>
                                    <option value="{{ route('admin.repository.view.audio') }}">Audio</option>
                                </select>
                            </div>
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

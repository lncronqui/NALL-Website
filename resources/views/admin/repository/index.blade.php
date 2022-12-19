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
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <button class="btn" style="width: 9rem; border-radius: 10px;"><a class="no-underline" href="{{ route('admin.repository.create') }}">+Add Article</a></button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                        <x-split-dropdown></x-split-dropdown>
                    </div>

                    <div id="printed-table">
                        <x-admin.repository.view-printed></x-admin.repository.view-printed>
                    </div>
                    <div id="elecresource-table">
                        <x-admin.repository.view-electronic></x-admin.repository.view-electronic>
                    </div>
                    <div id="video-table">
                        <x-admin.repository.view-video></x-admin.repository.view-video>
                    </div>
                    <div id="audio-table">
                        <x-admin.repository.view-audio></x-admin.repository.view-audio>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="popup2">
            <form>
                <h1 class="text-center text-lg font-bold">Repository Deletion</h1>
                <br>
                <p class="text-center">Are you sure that you want to delete this repository?</p>
                <br>
                <div class="text-center">
                    <button class="btn4" onclick="" style="width: 6em;">Yes</button>
                    <button class="btn4" onclick="toggle2()" style="width: 6em;">No</button>
                </div>
            </form>
    </div>
    <script>
            function toggle2() {
                var blur=document.getElementById('blur');
                blur.classList.toggle('active');
                var popup = document.getElementById('popup2');
                popup.classList.toggle('active');
            }
    </script>
        <script>
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();

            function printedFunction() {
                var resourceFormat = document.getElementById("resourceFormat");
                var selectedValue = resourceFormat.options[resourceFormat.selectedIndex].value;

                if(selectedValue == "printed"){
                    document.getElementById("printed-table").style.display = 'block';
                    document.getElementById("video-table").style.display = 'none';
                    document.getElementById("elecresource-table").style.display = 'none';
                    document.getElementById("audio-table").style.display = 'none';
                }
                else if(selectedValue == "video"){
                    document.getElementById("video-table").style.display = 'block';
                    document.getElementById("printed-table").style.display = 'none';
                    document.getElementById("elecresource-table").style.display = 'none';
                    document.getElementById("audio-table").style.display = 'none';
                }
                else if(selectedValue == "elec-resource"){
                    document.getElementById("elecresource-table").style.display = 'block';
                    document.getElementById("video-table").style.display = 'none';
                    document.getElementById("printed-table").style.display = 'none';
                    document.getElementById("audio-table").style.display = 'none';
                }
                else if(selectedValue == "audio"){
                    document.getElementById("audio-table").style.display = 'block';
                    document.getElementById("printed-table").style.display = 'none';
                    document.getElementById("video-table").style.display = 'none';
                    document.getElementById("elecresource-table").style.display = 'none';
                }
                else{
                    document.getElementById("printed-table").style.display = 'none';
                }
            }
        </script>
</x-admin.layout>
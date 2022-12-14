<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
                <script>
                        const myElement = document.getElementById("institution-list");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>
            
            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">Institution List</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <button class="btn" style="width: 11rem; border-radius: 10px;"><a class="no-underline" href="/add-institution">+Add Institution</a></button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                        <x-split-dropdown></x-split-dropdown>
                    </div>

                    <div id="printed-table">
                        <x-printed-institution></x-printed-institution>
                    </div>
                    <div id="video-table">
                        <x-video-institution></x-video-institution>
                    </div>
                    <div id="elecresource-table">
                        <x-elec-institution></x-elec-institution>
                    </div>
                    <div id="audio-table">
                        <x-audio-institution></x-audio-institution>
                    </div>
                </div>
            </div>
            
        </div>

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
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
<x-guest-layout>
    <x-admin-header></x-admin-header>

    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
                <script>
                        const myElement = document.getElementById("view-repository");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>
            
            <div class="text-left col-span-8">
                <div class="border-b-2 border-gray-300 ml-16 mt-5 mr-16">
                    <h1 class="text-3xl font-extrabold mb-3 ml-2 text-center">Add Article</h1>
                </div>
                <div class="ml-16 mt-3 mr-16 mb-10">
                <a style="font-size:24px" class="fa" style="color: #C4C4C4;" href="/repository">&#xf060;</a>
                    <h1 class="text-2xl mt-2 font-bold ml-2 text-center" style="margin-top:-20px;">Type </h1>
                    <div class="border-b-2 border-gray-300">
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                    <select name="format" id="editFormat" onchange="printedFunction()">
                                <option selected disabled>Electronic Resource, Video, Audio, Printed</option>
                                <option value="add-elec-res-p">Electronic Resource</option>
                                <option value="add-video-p">Video</option>
                                <option value="add-audio-p">Audio</option>
                                <option value="add-printed-p">Printed</option>
                        </select>
                    </div>
                    </div>
                </div>

                    <div id="addelec-res">
                        <x-add-elec></x-add-elec>
                    </div>
                    <div id="addprinted">
                        <x-add-printed></x-add-printed>
                    </div>
                    <div id="addvideo">
                        <x-add-video></x-add-video>
                    </div>
                    <div id="addaudio">
                        <x-add-audio></x-add-audio>
                    </div>
            </div>
            
        </div>

        <script>
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();
            
            function printedFunction() {
                var editFormat = document.getElementById("editFormat");
                var selectedValue = editFormat.options[editFormat.selectedIndex].value;

                if(selectedValue == "add-elec-res-p"){
                    document.getElementById("addelec-res").style.display = 'block';
                    document.getElementById("addprinted").style.display = 'none';
                    document.getElementById("addvideo").style.display = 'none';
                    document.getElementById("addaudio").style.display = 'none';
                }
                else if(selectedValue == "add-video-p"){
                    document.getElementById("addelec-res").style.display = 'none';
                    document.getElementById("addprinted").style.display = 'none';
                    document.getElementById("addvideo").style.display = 'block';
                    document.getElementById("addaudio").style.display = 'none';
                }
                else if(selectedValue == "add-audio-p"){
                    document.getElementById("addelec-res").style.display = 'none';
                    document.getElementById("addprinted").style.display = 'none';
                    document.getElementById("addvideo").style.display = 'none';
                    document.getElementById("addaudio").style.display = 'block';
                }
                else if(selectedValue == "add-printed-p"){
                    document.getElementById("addelec-res").style.display = 'none';
                    document.getElementById("addprinted").style.display = 'block';
                    document.getElementById("addvideo").style.display = 'none';
                    document.getElementById("addaudio").style.display = 'none';
                }
                else{
                    document.getElementById("addelec-res").style.display = 'none';
                }
            }
        </script>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
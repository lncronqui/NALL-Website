<x-guest-layout>
    <x-admin-header></x-admin-header>

    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
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
                <a style="font-size:24px" class="fa" style="color: #C4C4C4;" href="/useradmin-list">&#xf060;</a>
                    <h1 class="text-2xl mt-2 font-bold ml-2 text-center" style="margin-top:-20px;">Type </h1>
                    <div class="border-b-2 border-gray-300">
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                    <select name="format" id="editFormat" onchange="printedFunction()">
                                <option selected disabled>Overall Admin / University Admin</option>
                                <option value="add-overall">Overall Admin</option>
                                <option value="add-uni">University Admin</option>
                        </select>
                    </div>
                    </div>
                </div>

                    <div id="overalladm">
                        <x-add-overall></x-add-overall>
                    </div>
                    <div id="uniadm">
                        <x-add-uni></x-add-uni>
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

                if(selectedValue == "add-overall"){
                    document.getElementById("overalladm").style.display = 'block';
                    document.getElementById("uniadm").style.display = 'none';
                }
                else if(selectedValue == "add-uni"){
                    document.getElementById("overalladm").style.display = 'none';
                    document.getElementById("uniadm").style.display = 'block';
                }
                else{
                    document.getElementById("overalladm").style.display = 'none';
                }
            }
        </script>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
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
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">User and Admin List</h1>

                    <div class="flex flex-row gap-x-6">
                        <div class="search-bar" style="width: 75%;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="width: 19rem; border-radius: 10px;">
                            <a class="no-underline" href="/add-admin">+Add Admin</a>
                        </button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                        <x-split-dropdown-useradmin></x-split-dropdown-useradmin>
                    </div>

                    <div id="overall-admin">
                        <x-overall-admin-list></x-overall-admin-list>
                    </div>
                    <div id="admin-list">
                        <x-admin-list></x-admin-list>
                    </div>
                    <div id="user-list">
                        <x-user-list></x-user-list>
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
                var listFormat = document.getElementById("listFormat");
                var selectedValue = listFormat.options[listFormat.selectedIndex].value;

                if(selectedValue == "o-admin"){
                    document.getElementById("overall-admin").style.display = 'block';
                    document.getElementById("admin-list").style.display = 'none';
                    document.getElementById("user-list").style.display = 'none';
                }
                else if(selectedValue == "admin"){
                    document.getElementById("overall-admin").style.display = 'none';
                    document.getElementById("admin-list").style.display = 'block';
                    document.getElementById("user-list").style.display = 'none';
                }
                else if(selectedValue == "user"){
                    document.getElementById("overall-admin").style.display = 'none';
                    document.getElementById("admin-list").style.display = 'none';
                    document.getElementById("user-list").style.display = 'block';
                }
                else{
                    document.getElementById("overall-admin").style.display = 'none';
                }
            }
        </script>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
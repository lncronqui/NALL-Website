<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
            </div>
            
            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-10">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">View Repository</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <button class="btn" style="width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">+Add Article</a></button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6">
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                        <x-split-dropdown></x-split-dropdown>
                    </div>

                    <x-printed-repository></x-printed-repository>
                </div>
            </div>
            
        </div>

        <script>
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();
        </script>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
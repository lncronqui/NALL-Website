<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
            </div>
            
            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">Access Requests</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar" style="width: 100%;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                    </div>

                    <x-access-table></x-access-table>
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
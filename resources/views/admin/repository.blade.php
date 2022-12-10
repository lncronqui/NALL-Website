<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-20">
            <div class="text-left col-span-2">
            <div class="text-lg mt-"><a style="color:#2E052D;" href="#">Home</a></div>
            <div class="flex flex-col gap-y-10 ml-10 mt-6">
                <a class="admin-selected" href="/repository">View Repository</a>
                <a class="admin-hovertext" href="/approving">Approving of Papers/Video</a>
                <a class="admin-hovertext" href="#">Editing of About Us</a>
                <a class="admin-hovertext" href="#">Access Requests</a>
                <a class="admin-hovertext" href="#">User and Admin List</a>
                <a class="admin-hovertext" href="#">Institution List</a>
            </div>
            </div>
            <div class="text-left col-span-8">
                <div class="ml-10">
                    <h1 class="text-2xl font-extrabold">View Repository</h1>
                    <form class="mt-6">   
                        <label for="searchbar" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-900" style="color:#737373;">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-10 pointer-events-none">
                                <svg aria-hidden="true" class="w-8 h-8 text-gray-900 dark:text-gray-500" fill="none" stroke="#737373" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" style="color:#737373;"></path></svg>
                            </div>
                            <input type="search" id="searchbar" class="block p-4 pl-20 w-full h-16 text-md bg-gray-50 rounded-lg focus:border-none" placeholder="Search for Legal Resources..." style="color:black;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
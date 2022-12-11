<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-20">
            
            <div class="text-left col-span-2">
                <div class="text-lg mt-"><a style="color:#2E052D;" href="#">Home</a></div>
                <div class="flex flex-col gap-y-10 ml-10 mt-6">
                    <a class="admin-hovertext" href="/repository">View Repository</a>
                    <a class="admin-hovertext" href="#">Approving of Papers/Video</a>
                    <a class="admin-hovertext" href="#">Editing of About Us</a>
                    <a class="admin-hovertext" href="#">Access Requests</a>
                    <a class="admin-hovertext" href="#">User and Admin List</a>
                    <a class="admin-hovertext" href="#">Institution List</a>
                </div>
            </div>
            
            <div class="text-left col-span-8">
                <div class="ml-10">
                    <h1 class="text-3xl font-extrabold mb-6 ml-2">View Repository</h1>
                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <button class="btn" style="width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">+Add Article</a></button>
                    </div>
                    <div class="flex flex-row gap-x-2">
                        <h1 class="text-2xl font-extrabold mt-6 ml-2">Type: </h1>
                        <div class="split-btn">
                            <button> Type </button>
                            <div class="dropdown">
                                <button class="fa fa-angle-down"></button>
                                <div class="dropdown-content">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
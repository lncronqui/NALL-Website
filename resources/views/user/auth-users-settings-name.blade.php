<x-guest-layout>
    <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
                <div class="flex items-center justify-between mx-auto">
                    <div class="pl-40">
                        <img src="/img/logo.png" alt="" class="h-12 w-12"></img>
                    </div>

                    <div class="authhome">
                        <nav>
                            <a href="/auth-user-home">Home</a>
                            <a href="/auth-user-search">Search</a>
                            <a href="#">View Request</a>
                            <a href="/auth-user-bookmark">Bookmarks</a>
                            <a href="/auth-user-aboutus">About Us</a>
                            <a href="/auth-user-contactus">Contact Us</a>
                            <div class="animation"></div>
                        </nav>
                    </div>

                    <div class="dropdown inline-block relative pr-20">
                        <button class="text-white font-semibold py-2 px-6 rounded inline-flex items-center">
                            <span class="mr-1">My Account</span>
                            <div class="pl-4">
                                <img src="/img/dropdown.png" alt="" class="h-4 w-4"></img>
                            </div>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <div class="border  border-solid border-gray-500 shadow-lg rounded bg-gray-200 py-6">
                                <li class="">
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="/auth-user-settings">
                                    <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>
                                    Settings & Privacy</a>
                                </li>
                                <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="/">
                                <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>    
                                Sign Out</a></li>
                        </div>
                        </ul>
                    </div>
                    
                </div>
    </header>
    
    <body>
         <!--L-side-->
         <div class="flex pt-16 pr-10 pb-20">
            <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <span class="dot absolute ml-12"></span><h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <span class="dot absolute ml-12" style="margin-top:40.5rem;"></span><h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42rem;"><a href="/">Sign Out</a></h5>
            </div>

        <!--R-side-->
            <div class="flex-auto w-64 ...">
                <div class="pl-16 pr-32 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <form>
                        <hr style="border-top: 1px solid #949494; width: 100%;">
                        <div class="user-input flex flex-col gap-y-4 mx-12 my-10">
                            <div class="flex flex-row gap-x-24">
                                <x-label for="text" :value="__('Old Name')" class="font-normal mt-3" style="color:#383838; font-size: 1rem;"/>
                                <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.9rem;"
                                        type="text"
                                        name="text"
                                        required autocomplete="current-text" />
                            </div>
                            <div class="flex flex-row gap-x-24">
                                <x-label for="text" :value="__('New Name')" class="font-normal mt-3" style="color:#383838; font-size: 1rem;"/>
                                <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.5rem;"
                                        type="text"
                                        name="text"
                                        required autocomplete="current-text" />
                            </div>
                        </div>

                        <hr style="border-top: 1px solid #949494; width: 100%;">

                        <div class="mt-10 text-center">
                            <button class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <x-auth-user-footer></x-auth-user-footer>
</x-guest-layout>
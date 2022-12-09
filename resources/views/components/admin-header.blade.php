<header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
                <div class="flex items-center justify-between mx-auto">
                    <div class="pl-40">
                        <img src="/img/logo.png" alt="" class="h-12 w-12"></img>
                    </div>

                    <div class="dropdown inline-block relative pr-20">
                        <button class="text-white font-semibold py-2 px-6 rounded inline-flex items-center">
                            <span class="mr-1">{{ __('My Account') }}</span>
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
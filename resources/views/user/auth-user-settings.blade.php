<x-guest-layout>
        <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
                <div class="flex items-center justify-between mx-auto">
                    <div class="img-logo">
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
                        <button class="my-account text-white font-semibold py-2 rounded inline-flex items-center">
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

        <!-- Bookmarking page  -->
        <!--L-side-->
        <div class="flex pt-16 pr-10 pb-20">
            <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <span class="dot absolute ml-12"></span><h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <span class="dot absolute ml-12" style="margin-top:40.5rem;"></span><h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42rem;"><a href="/">Sign Out</a></h5>
            </div>

        <!--R-side-->
            <div class="flex-auto w-64 ...">
                <div class="card-margin-second pl-16 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <table style="width:100%; height:25rem; border-collapse: collapse;">
                        <tbody style="border-top: 1pt solid #949494; border-bottom: 1pt solid #949494;">
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Name</td>
                                <td for="name">Lorem ipsum dolor sit amet</td>
                                <td><a href="/auth-users-settings-name" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td style="width:30%;" class="pl-8">Email</td>
                                <td for="email">Loremipsum@dolor.sit.amet</td>
                                <td><a href="/auth-users-settings-email" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Institution</td>
                                <td for="institution">Lorem ipsum dolor sit amet</td>
                                <td><a href="/auth-users-settings-institution" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Password</td>
                                <td for="password">***********</td>
                                <td><a href="/auth-users-settings-password" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr></tr>
                                <td class="pl-8">Use two-factor authentication</td>
                                <td></td>
                                <td><a href="" style="color:#863084;">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <x-auth-user-footer></x-auth-user-footer>
</x-guest-layout>
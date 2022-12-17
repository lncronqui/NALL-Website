@if (Auth::check())
    <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
        <div class="flex items-center justify-between mx-auto">
            <div class="pl-40">
                <img src="/img/logo.png" alt="" class="h-12 w-12">
            </div>

            <div class="authhome">
                <nav>
                    <a href="{{ route('user.index') }}">Home</a>
                    <a href="{{ route('user.search.index') }}">Search</a>
                    <a href="{{ route('user.requests.index') }}">View Request</a>
                    <a href="{{ route('user.bookmarks.index') }}">Bookmarks</a>
                    <a href="{{ route('user.about-us') }}">About Us</a>
                    <a href="{{ route('user.contact-us.index') }}">Contact Us</a>
                    <div class="animation"></div>
                </nav>
            </div>

            <div class="dropdown inline-block relative pr-20">
                <button class="text-white font-semibold py-2 px-6 rounded inline-flex items-center">
                    <span class="mr-1">My Account</span>
                    <div class="pl-4">
                        <img src="/img/dropdown.png" alt="" class="h-4 w-4">
                    </div>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                    <div class="border  border-solid border-gray-500 shadow-lg rounded bg-gray-200 py-6">
                        <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap"
                                href="{{ route('user.profile.index') }}">
                                <svg class="inline-block" height="40" width="40">
                                    <circle cx="20" cy="20" r="10" fill="gray" />
                                </svg>
                                Settings & Privacy</a>
                        </li>
                        <li class="">
                            <form action="{{ route('user.sign-out') }}" method="POST">
                                @csrf
                                <button
                                    class="rounded-t bg-gray-200 hover:bg-gray-400 pl-6 pr-24 block" 
                                    type="submit">
                                    <svg class="inline-block" height="40" width="40">
                                        <circle cx="20" cy="20" r="10" fill="gray" />
                                    </svg>
                                    Sign Out</button>
                            </form>
                        </li>
                    </div>
                </ul>
            </div>

        </div>
    </header>
@else
    <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
        <div class="flex items-center justify-between mx-auto">
            <div class="pl-40">
                <img src="/img/logo.png" alt="" class="h-12 w-12">
            </div>
            <div>
                <nav>
                    <a href="/">Home</a>
                    <a href="/about-us">About Us</a>
                    <a href="/contact-us">Contact Us</a>
                    <div class="animation"></div>
                </nav>
            </div>
            <div class="space-x-5 top-0 right-0 pr-40">
                <a class="no-underline" href="{{ route('user.sign-in.index') }}">
                    <button class="btn2">Sign In</button></a>
                <a class="no-underline" href="{{ route('user.sign-up.index') }}">
                    <button class="btn2">Sign Up</button></a>
            </div>
        </div>
    </header>
@endif

@if (Auth::check())
    <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
        <div class="flex items-center justify-between mx-auto">
            <div class="logo-placement">
                <img src="/img/logo.png" alt="" class="h-12 w-12">
            </div>

            <div class="authhome">
                <nav>
                        <div class="flex items-center">
                    <a href="{{ route('user.home') }}">Home</a>
                    <a href="{{ route('user.search.index') }}">Search</a>
                    <a href="{{ route('user.requests.index') }}">View Request</a>
                    <a href="{{ route('user.bookmarks.index') }}">Bookmarks</a>
                    <a href="{{ route('user.about-us') }}">About Us</a>
                    <a href="{{ route('user.contact-us.index') }}">Contact Us</a>
                    <div class="animation"></div>
                        </div>
                </nav>
            </div>

            <div class="dropdown inline-block relative pr-24">
                <button class="name-margin text-white font-semibold py-2 rounded inline-flex items-center">
                    <span class="mr-1">{{ auth()->user()->name }}</span>
                    <div class="pl-4">
                        <img src="/img/dropdown.png" alt="" class="h-4 w-4">
                    </div>
                </button>
                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                    <div class="border  border-solid border-gray-500 shadow-lg rounded bg-gray-200 py-6">
                        <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap py-2"
                                href="{{ route('user.profile.index') }}">
                                <img class="inline-block mr-2" src="/img/settings.png" alt="" class="h-6 w-6">
                                Settings & Privacy</a>
                        </li>
                        <li class="">
                            <form action="{{ route('user.sign-out') }}" method="POST">
                                @csrf
                                <button
                                    class="btn-signout rounded-t bg-gray-200 hover:bg-gray-400 block py-2"
                                    type="submit">
                                    <img class="inline-block mr-2" src="/img/signout.png" alt="" class="h-6 w-6">
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
            <div class="logo-placement">
                <img src="/img/logo.png" alt="" class="h-12 w-12">
            </div>

            <div class="unhome">
                <nav>
                <div class="flex items-center">
                    <a href="/">Home</a>
                    <a href="/about-us">About Us</a>
                    <a href="/contact-us">Contact Us</a>
                    <div class="animation"></div>
                </div>
                </nav>
            </div>

            <div class="unsign">
                <div class="space-x-5 top-0 right-0 pr-">
                    <a class="no-underline" href="{{ route('user.sign-in.index') }}">
                        <button class="btn2">Sign In</button></a>
                    <a class="no-underline" href="{{ route('user.sign-up.index') }}">
                        <button class="btn2">Sign Up</button></a>
                </div>
            </div>
        </div>
    </header>
@endif

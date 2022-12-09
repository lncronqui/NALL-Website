<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-900" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <h2 class="font-bold pb-2 pl-10" style="color:#863084; font-size: 1.3rem;">Sign In</h2>
            <!-- Email Address -->
            <div class="px-10 admin-input">
                <x-label for="email" :value="__('Email')" class="font-semibold" style="color:#863084; font-size: 0.9rem;"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 px-10 admin-input">
                <x-label for="password" :value="__('Password')" class="font-semibold" style="color:#863084; font-size: 0.9rem;"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->

            <div class="flex items-center justify-between pt-4 pb-16 px-10">
                <label class="block font-bold" for="remember" style="color:#863084;">
                    <input class="leading-tight required:border-red-50 rounded" style="color:#863084; border: 2px solid #E2E6EB; outline: none; box-shadow: 0 0;" type="checkbox" id="remember" name="remember" required>
                    <span class="text-xs">
                        {{ __('Remember Me') }}
                    </span>
                </label>
                    @if (Route::has('password.request'))
                    <a class="inline-block align-baseline font-bold text-xs" href="{{ route('password.request') }}" style="color:#863084;">
                        {{ __('Forgot Password?') }}
                    </a>
                    @endif
            </div>
<!-- 
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <!-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> -->
                <div class="pl-10">
                    <div class="btnadmin font-semibold" style="width:90%;">
                        <button style="display: block; width: 100%;" type="submit">
                            {{ __('Sign In') }}
                        </button>
                    </div>
                </div>

                <div class="text-center text-sm font-normal pt-40">Having trouble?<a class="font-bold text-sm" style="color:#863084;" href="/contact-us"> Contact Us</a></div>
            </div>
        </form>

        
    </x-auth-card>
    
    <footer class="bg-gray-100 text-center lg:text-left" style="background-color:#2E052D; color:white">
        <div class="mx-auto px-0 w-full pl-24 pr-20">
            <div class="grid py-20 lg:grid-cols-4 md:grid-cols-4">
            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Network of Academic Law Librarians, Inc.</h5>

                <ul class="list-none mb-0">
                <li>
                    <div class="text-gray-200">Address 1: </div>
                </li>
                <li>
                    <div class="text-gray-200">Address 2: </div>
                </li>
                <li>
                    <div class="text-gray-200">City: </div>
                </li>
                <li>
                    <div class="text-gray-200">ZipCode, Philippines</div>
                </li>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Telephone Number</a>
                </li>
                <li>
                    <a href="mailto: nall.phil2018@gmail.com" class="hovertext text-gray-200">nall.phil2018@gmail.com</a>
                </li>
                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Links</h5>

                <ul class="list-none mb-0">
                <li>
                    <a href="auth-user-aboutus" class="hovertext text-gray-200">About Us</a>
                </li>
                <li>
                    <a href="auth-user-contactus" class="hovertext text-gray-200">Contact Us</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">Legal Education Board</a>
                </li>

                <h5 class="uppercase font-bold mt-4 mb-4 text-gray-200">My Account</h5>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Sign In</a>
                </li>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Sign Up</a>
                </li>
                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Contact Us</h5>

                <ul class="list-none mb-0">
                <li>
                    NALL FB Page: <a href="https://www.facebook.com/nallph.org" class="hovertext text-gray-200">@nallph.org</a>
                </li>
                <li>
                    NALL E-mail Address: <a href="mailto: nall.phil2018@gmail.com" class="hovertext text-gray-200">nall.phil2018@gmail.com</a>
                </li>
                <li>
                    LEB FB Page: <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">@legal.education.board</a>
                </li>
                <li>
                    LEB Website: <a href="https://leb.gov.ph/" class="hovertext text-gray-200">https://leb.gov.ph/</a>
                </li>
                <li>
                    LEB Email Address: <a href="mailto: contact@leb.gov.ph" class="hovertext text-gray-200">contact@leb.gov.ph</a>
                </li>
                </ul>
            </div>

            <div class="text-left mb-6">

                <ul class="list-none mb-0">
                <li>
                    <div class="text-gray-200">Copyright © 2022</div>
                </li>
                <li>
                    <div class="text-gray-200">A Gateway to Open Access Legal Resources in the Philippines,</div>
                </li>
                <li>
                    <div class="text-gray-200">Network of Academic Law Librarians, Inc.,</div>
                </li>
                <li>
                    <div class="text-gray-200">All rights reserved.</div>
                </li>
                </ul>

                <h5 class="uppercase font-bold mb-4 text-gray-200 mt-4">Socials</h5>
                <div class="flex">
                    <a href="#!"><img src="/img/facebook.png" alt="" class="h-12 w-12 hover:bg-pink-500"></img></a>
                    <a href="#!"><img src="/img/gmail.png" alt="" class="h-12 w-12 hover:bg-pink-500"></img></a>
                </div>
            </div>
            </div>
        </div>
    </footer>
</x-guest-layout>

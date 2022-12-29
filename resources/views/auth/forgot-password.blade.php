<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 px-10 pt-10">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 ml-10" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 ml-10" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="admin-input px-10">
                <x-label for="email" :value="__('Email')" style="color:#863084; font-size: 0.9rem;"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="pl-10 mt-4">
                <div class="btnadmin font-semibold" style="width:50%;">
                    <button style="display: block; width: 100%;" type="submit">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </div>

            <div class="mb-4 text-sm text-gray-100 py-8"></div>

            <div class="text-center text-sm font-normal pt-10">Having trouble?<a class="font-bold text-sm" style="color:#863084;" href="/contact-us"> Contact Us</a></div>
        </form>
    </x-auth-card>
    <footer class="bg-gray-100 text-center lg:text-left" style="background-color:#2E052D; color:white">
        <div class="mx-auto px-0 w-full pl-24 pr-20">
            <div class="grid pt-20 pb-20 lg:grid-cols-4 md:grid-cols-4">
            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Network of Academic Law Librarians, Inc.</h5>

                <ul class="list-none">
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

                <ul class="list-none">
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
                        <a href="#!" class="hovertext text-gray-200">Settings & Privacy</a>
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

<x-admin.layout-guest>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="w-20 h-20 fill-current text-gray-900" />
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 text-center" :errors="$errors" />

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <h2 class="font-bold pb-2 pl-10" style="color:#863084; font-size: 1.3rem;">Sign In</h2>
            <!-- Email Address -->
            <div class="px-10 admin-input">
                <x-label for="email" :value="__('Email')" class="font-semibold"
                    style="color:#863084; font-size: 0.9rem;" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4 px-10 admin-input">
                <x-label for="password" :value="__('Password')" class="font-semibold"
                    style="color:#863084; font-size: 0.9rem;" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-between pt-4 pb-16 px-10">
                <label class="block font-bold" for="remember" style="color:#863084;">
                    <input class="leading-tight required:border-red-50 rounded"
                        style="color:#863084; border: 2px solid #E2E6EB; outline: none; box-shadow: 0 0;"
                        type="checkbox" id="remember" name="remember">
                    <span class="text-xs">
                        {{ __('Remember Me') }}
                    </span>
                </label>
                @if (Route::has('admin.password.request'))
                    <a class="inline-block align-baseline font-bold text-xs"
                        href="{{ route('admin.password.request') }}" style="color:#863084;">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>

                <!-- error message -->
                    @if ($errors->any())
                        <div class="font-bold text-center pb-2"><a class="" style="color:red;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                        </div>
                    @endisset


            <div class="flex items-center justify-center">
                <button class="block w-5/6" type="submit">
                    <div class="btnadmin font-semibold">
                        {{ __('Sign In') }}
                    </div>
                </button>
            </div>

            <div class="text-center text-sm font-normal pt-40">Having trouble?<a class="font-bold text-sm"
                    style="color:#863084;" href="{{ route('user.contact-us.index') }}"> Contact Us</a></div>
            </div>
        </form>


    </x-auth-card>
    </x-admin-guest>

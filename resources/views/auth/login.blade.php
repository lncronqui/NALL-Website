<x-user>
    <x-login-card>
        <x-slot name="logo">
            <x-login-banner class="h-100 w-auto" />
        </x-slot>
        <h1 class="display-6 mb-4 font-weight-bold">Login</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="loginForm">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="d-block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="d-block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 d-flex justify-content-between">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="d-flex justify-content-center mt-5">

                <button type="submit" class="w-100 btn text-light bg-dark">
                    {{ __('Log in') }}
                </button>
            </div>

            <div class="mt-4 text-center">
                <h5>or</h5>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="text-lg">Create an Account</a>
            </div>
        </form>

    </x-login-card>
</x-user>

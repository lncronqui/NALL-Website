<x-guest-layout>
    <x-slot name="slot">
        <div class="grid lg:grid-cols-2 md:grid-cols-2">
            <div class="text-left">
                <img src="/img/user-login.png" style="object-fit:fill; object-position:center" alt="">
            </div>

            <div class="text-left">
                <div class="text-justify mx-48 mt-12 text-lg">
                    <img src="/img/logo.png" alt="" style="margin: auto; height: 7rem;">
                    <div class="text-xl font-bold text-center pt-4"><a class="" style="color:#2E052D;">Network of
                            Academic</div>
                    <div class="text-xl font-bold text-center pb-6"><a class="" style="color:#2E052D;">Law
                            Librarians, Inc.</div>
                    <div class="text-3xl font-bold text-left pb-2"><a class="" style="color:#2E052D;">Sign Up
                    </div>
                    @if ($errors->any())
                        <div class="font-bold text-left pb-2"><a class="" style="color:red;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                        </div>
                    @endif
                    @isset($success)
                        <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                                {{ $success }}
                        </div>
                    @endisset


                    <form method="POST" action="{{ route('user.sign-up.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold" for="name" style="color:#2E052D;">
                                Full Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder=" " name="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold" for="institution"
                                style="color:#2E052D;">
                                Institution
                            </label>
                            <select required name="institution_id" id="institution_id"
                                class="shadow appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="" selected disabled>--Select Institution--</option>
                                @foreach ($institutions as $institution)
                                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold" for="email" style="color:#2E052D;">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder=" " name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        </div>
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold" for="password" style="color:#2E052D;">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                id="password" type="password" placeholder=" " name="password" required>
                        </div>
                        <div class="mb-3">
                            <label class="block text-gray-700 text-sm font-bold" for="password_confirmation"
                                style="color:#2E052D;">
                                Confirm Password
                            </label>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full h-10 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                id="password" type="password" placeholder=" " name="password_confirmation" required>
                        </div>
                        <div class="flex items-center justify-between pb-4">
                            <label class="block font-bold" for="remember" style="color:#2E052D;">
                                <input class="leading-tight required:border-red-50 rounded"
                                    style="color:#2E052D; border: 1px solid black; outline: none; box-shadow: 0 0;"
                                    type="checkbox" id="remember" name="remember" required>
                                <span class="text-sm">
                                    <span class="font-normal">I am of legal age and I agree to the</span> TERMS <span
                                        class="font-normal">and</span> CONDITIONS.
                                </span>
                            </label>
                        </div>
                        <div class="btn">
                            <button style="display: block; width: 100%;" type="submit">
                                Sign Up
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <div class="text-sm font-normal pt-8">Having trouble?<a class="font-bold text-sm"
                                style="color:#863084;" href="/contact-us"> Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

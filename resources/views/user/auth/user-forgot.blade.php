<x-guest-layout>
    <x-slot name="slot">
        <div class="grid lg:grid-cols-2 md:grid-cols-2">
            <div class="text-left">
                <img class="user-login" src="/img/user-login.png" style="object-fit:fill; object-position:center" alt="">
            </div>

            <div class="text-left">
                <div class="user-login-margin text-justify text-lg">
                    <img src="/img/logo.png" alt="" style="margin: auto; height: 7rem; ">
                    <div class="text-xl font-bold text-center pt-4"><a class="" style="color:#2E052D;">Network of
                            Academic</a></div>
                    <div class="text-xl font-bold text-center pb-6"><a class="" style="color:#2E052D;">Law
                            Librarians, Inc.</a></div>
                    <div class="text-3xl font-bold text-left pb-2 mt-12"><a class="text-center" style="color:#2E052D;">Forgot Password</a>
                    </div>
                    @if ($errors->any())
                        <div class="font-bold text-left pb-2" style="color:red;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="font-bold text-left pb-2" style="color:green;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('user.password.email') }}">
                        @csrf
                        <div class="mb-3 mt-10">
                            <label class="block text-gray-700 text-sm font-normal mb-3" for="email" style="color:#2E052D;">
                                Please input your email and wait for a while before receiving an email for a reset password.
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full h-10 py-2 pl-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email" placeholder=" " name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        </div>
                        <div class="btn mt-20">
                            <button style="display: block; width: 100%;" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <div class="text-sm font-normal pt-20 pb-6">Having trouble?<a class="font-bold text-sm"
                                style="color:#863084;" href="/contact-us"> Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>


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
                    <div class="text-3xl font-bold text-left pb-2 mt-12"><a class="text-center" style="color:#2E052D;">Change Password</a>
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

                    <form method="POST" action="#">
                        @csrf
                        <div class="mb-3 mt-10">
                            <label class="block text-gray-700 text-sm font-normal mb-3" for="email" style="color:#2E052D;">
                                Please input an 8-character password to reset your current password.
                            </label>
                            <i class="eye-icon far fa-eye absolute mt-3" id="togglePassword" style="cursor: pointer;"></i>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full h-10 py-2 pl-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" placeholder=" " name="password" required>
                        </div>
                        <div class="mb-3 mt-10">
                            <label class="block text-gray-700 text-sm font-normal mb-3" for="email" style="color:#2E052D;">
                                Please input your password again to confirm changes.
                            </label>
                            <i class="eye-icon far fa-eye absolute mt-3" id="togglePassword2" style="cursor: pointer;"></i>
                            <input
                                class="shadow appearance-none border border-red-500 rounded w-full h-10 py-2 px-3 pl-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                id="password2" type="password" placeholder=" " name="password_confirmation" required>
                        </div>
                        <div class="btn mt-20">
                            <button style="display: block; width: 100%;" type="submit">
                                Confirm
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

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    const togglePassword2 = document.querySelector('#togglePassword2');
    const password2 = document.querySelector('#password2');

    togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
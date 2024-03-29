<x-admin.layout>
    <!--L-side-->
    <div class="flex pt-16 pr-10 pb-20">
        <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <img class="absolute ml-12" src="/img/settings.png" alt="" style="margin-top: 0.4rem;">
                <h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <img class="absolute ml-12" style="margin-top:41.5rem;" src="/img/signout.png" alt="">
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42.5rem;"><button
                        type="submit">Sign Out</button></h5>
                </form>
            </div>

        <!--R-side-->
        <div class="flex-auto w-64 ...">
        <a style="font-size:24px" class="fa absolute ml-6 mt-8" style="color: #C4C4C4;" href="{{ route('admin.profile.index') }}">&#xf060;</a>
            <div class="pl-16 pr-32 mb-5 py-6">
                <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                <form method="POST" action="{{ route('admin.profile.update.password') }}">
                    @csrf
                    <hr style="border-top: 1px solid #949494; width: 100%;">
                    <div class="user-input flex flex-col gap-y-4 mx-12 my-10">
                        <div class="flex flex-row gap-x-24">
                            <x-label for="password" :value="__('Old Password')" class="font-normal mt-3"
                                style="color:#383838; font-size: 1rem;" />
                            <x-input id="password" class="block mt-1 w-2/4" style="margin-left:1.9rem;" type="password"
                                name="password" required autocomplete="current-password" />
                        </div>
                        <div class="flex flex-row gap-x-24">
                            <x-label for="password" :value="__('New Password')" class="font-normal mt-3"
                                style="color:#383838; font-size: 1rem;" />
                            <i class="eye-con far fa-eye absolute mt-5" id="togglePassword3" style="cursor: pointer;"></i>
                            <x-input id="password3" class="block mt-1 w-2/4" style="margin-left:1.5rem;" type="password"
                                name="newPassword" required autocomplete="current-password" />
                        </div>
                        <div class="flex flex-row gap-x-24">
                            <x-label for="password" :value="__('Confirm Password')" class="font-normal mt-4"
                                style="color:#383838; font-size: 1rem;" />
                            <i class="eye-con far fa-eye absolute mt-5" id="togglePassword2" style="cursor: pointer;"></i>
                            <x-input id="password2" class="block mt-1 w-2/4" type="password"
                                name="newPassword_confirmation" required autocomplete="current-password" />
                        </div>
                    </div>

                    <hr style="border-top: 1px solid #949494; width: 100%;">

                    @if ($errors->any())
                            <div class="font-bold text-left pb-2" style="color:red;">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                            </div>
                        @endif

                    <div class="mt-10 text-center">
                        <button type="submit" class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin.layout>

<script>
    const togglePassword3 = document.querySelector('#togglePassword3');
    const password3 = document.querySelector('#password3');

    togglePassword3.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
        password3.setAttribute('type', type);
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

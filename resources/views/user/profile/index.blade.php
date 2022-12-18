<x-guest-layout>
    <x-slot name="slot">
        <!--L-side-->
    <div class="hello" id="blur">
        <div class="flex pt-16 pr-10 pb-20">
            <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <img class="absolute ml-12" src="/img/settings.png" alt="" style="margin-top: 0.4rem;">
                <h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <img class="absolute ml-12" style="margin-top:41.5rem;" src="/img/signout.png" alt="">
                <form action="{{ route('user.sign-out') }}" method="post">
                    @csrf
                    <h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42.5rem;"><button
                        type="submit">Sign Out</button></h5>
                </form>
            </div>

            <!--R-side-->
            <div class="flex-auto w-64 ...">
                <div class="pl-16 pr-32 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <table style="width:100%; height:25rem; border-collapse: collapse;">
                        <tbody style="border-top: 1pt solid #949494; border-bottom: 1pt solid #949494;">
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Name</td>
                                <td for="name">{{ auth()->user()->name }}</td>
                                <td><a href="{{ route('user.profile.edit.name') }}" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td style="width:30%;" class="pl-8">Email</td>
                                <td for="email">{{ auth()->user()->email }}</td>
                                <td><a href="{{ route('user.profile.edit.email') }}" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Institution</td>
                                <td for="institution">{{ auth()->user()->institution->name }}</td>
                                <td><a href="{{ route('user.profile.edit.institution') }}" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Password</td>
                                <td for="password">***********</td>
                                <td><a href="{{ route('user.profile.edit.password') }}" style="color:#863084;">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-10 ml-8">
                        <button class="btn4" onclick="toggle()" style="height: 2.5em;">Delete My Account</button>
                    </div>
                    @isset($success)
                        <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                            {{ $success }}
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
        <div id="popup">
            <form>
                <h1 class="text-center text-lg font-bold">Account Deletion</h1>
                <br>
                <p class="text-center">Are you sure that you want to delete your account?</p>
                <br>
                <x-input id="password" class="block mt-1 w-3/4 mx-16" type="password" name="password" placeholder="Enter Password and Click Yes to Delete" autocomplete="current-password" />s
                <br>
                <div class="text-center">
                    <button class="btn4" type="submit" style="width: 6em;">Yes</button>
                    <button class="btn4" onclick="toggle()" style="width: 6em;">No</button>
                </div>
            </form>
        </div>
        <script>
            function toggle() {
                var blur=document.getElementById('blur');
                blur.classList.toggle('active');
                var popup = document.getElementById('popup');
                popup.classList.toggle('active');
            }
        </script>
    </x-slot>
</x-guest-layout>

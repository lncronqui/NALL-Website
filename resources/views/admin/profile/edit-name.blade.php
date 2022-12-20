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
        <a style="font-size:24px" class="fa absolute ml-6 mt-8" style="color: #C4C4C4;" href="{{ route('user.profile.index') }}">&#xf060;</a>
            <div class="pl-16 pr-32 mb-5 py-6">
                <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                <form method="POST" action="{{ route('admin.profile.update.name') }}">
                    @csrf
                    <hr style="border-top: 1px solid #949494; width: 100%;">
                    <div class="user-input flex flex-col gap-y-4 mx-12 my-10">
                        <div class="flex flex-row gap-x-24">
                            <x-label for="text" :value="__('Old Name')" class="font-normal mt-3"
                                style="color:#383838; font-size: 1rem;" />
                            <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.9rem; pointer-events: none;"
                                type="text" name="oldName" value="{{ auth()->user()->name }}" required autocomplete="current-text"/>
                        </div>
                        <div class="flex flex-row gap-x-24">
                            <x-label for="text" :value="__('New Name')" class="font-normal mt-3"
                                style="color:#383838; font-size: 1rem;" />
                            <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.5rem;" type="text"
                                name="newName" required autocomplete="current-text" />
                        </div>
                    </div>

                    <hr style="border-top: 1px solid #949494; width: 100%;">

                    @if ($errors->any())
                        <div class="font-bold text-left pb-2"><a class="" style="color:red;">
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
    </body>

    <x-admin-footer></x-admin-footer>
</x-admin.layout>

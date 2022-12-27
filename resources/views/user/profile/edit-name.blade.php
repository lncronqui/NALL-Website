<x-guest-layout>
    <x-slot name="slot">
        <!--L-side-->
        <div class="flex pt-16 pr-10 pb-20">
            <x-user.settings-nav></x-user.settings-nav>

            <!--R-side-->
            <div class="flex-auto w-64 ...">
            <a style="font-size:24px" class="fa absolute ml-6 mt-8" style="color: #C4C4C4;" href="{{ route('user.profile.index') }}">&#xf060;</a>
                <div class="pl-16 pr-32 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <form method="POST" action="{{ route('user.profile.update.name') }}">
                        @csrf
                        <hr style="border-top: 1px solid #949494; width: 100%;">
                        <div class="user-input flex flex-col gap-y-4 mx-12 my-10">
                            <div class="flex flex-row gap-x-24">
                                <x-label for="text" :value="__('Old Name')" class="font-normal mt-3"
                                    style="color:#383838; font-size: 1rem;" />
                                <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.9rem; pointer-events: none;"
                                    type="text" name="oldName" value="{{ auth()->user()->name }}" autocomplete="current-text"/>
                            </div>
                            <div class="flex flex-row gap-x-24">
                                <x-label for="text" :value="__('New Name')" class="font-normal mt-3"
                                    style="color:#383838; font-size: 1rem;" />
                                <x-input id="text" class="block mt-1 w-2/4" style="margin-left:1.5rem;"
                                    type="text" name="newName" required autocomplete="current-text" />
                            </div>
                        </div>

                        <hr style="border-top: 1px solid #949494; width: 100%;">

                        @if ($errors->any())
                            <div class="font-bold text-center pb-2" style="color:red;">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                            </div>
                        @endif

                        <div class="mt-5 text-center">
                            <button type="submit" class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

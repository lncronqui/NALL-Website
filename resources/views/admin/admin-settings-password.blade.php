<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <!--L-side-->
        <div class="flex pt-16 pr-10 pb-20">
            <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <span class="dot absolute ml-12"></span><h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <span class="dot absolute ml-12" style="margin-top:40.5rem;"></span><h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42rem;"><a href="/">Sign Out</a></h5>
            </div>

        <!--R-side-->
            <div class="flex-auto w-64 ...">
                <div class="pl-16 pr-32 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <form>
                        <hr style="border-top: 1px solid #949494; width: 100%;">
                        <div class="user-input flex flex-col gap-y-4 mx-12 my-10">
                            <div class="flex flex-row gap-x-24">
                                <x-label for="password" :value="__('Old Password')" class="font-normal mt-3" style="color:#383838; font-size: 1rem;"/>
                                <x-input id="password" class="block mt-1 w-2/4" style="margin-left:1.9rem;"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                            </div>
                            <div class="flex flex-row gap-x-24">
                                <x-label for="password" :value="__('New Password')" class="font-normal mt-3" style="color:#383838; font-size: 1rem;"/>
                                <x-input id="password" class="block mt-1 w-2/4" style="margin-left:1.5rem;"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                            </div>
                            <div class="flex flex-row gap-x-24">
                                <x-label for="password" :value="__('Confirm Password')" class="font-normal mt-4" style="color:#383838; font-size: 1rem;"/>
                                <x-input id="password" class="block mt-1 w-2/4"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                            </div>
                        </div>

                        <hr style="border-top: 1px solid #949494; width: 100%;">

                        <div class="mt-10 text-center">
                            <button class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
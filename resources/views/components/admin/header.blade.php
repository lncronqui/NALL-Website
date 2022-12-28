<header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
    <div class="flex items-center justify-between mx-auto">
        <div class="pl-40">
            <a href="{{ route('admin.index') }}"><img src="/img/logo.png" alt="" class="h-12 w-12"></a>
        </div>

        <div class="dropdown inline-block relative pr-32">
            <button class="text-white font-semibold py-2 px-6 rounded inline-flex items-center">
                <span class="mr-1">{{ auth()->user()->name }}</span>
                <div class="pl-4">
                    <img src="/img/dropdown.png" alt="" class="h-4 w-4"></img>
                </div>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                <div class="border  border-solid border-gray-500 shadow-lg rounded bg-gray-200 pb-2 pt-6">
                    <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap py-2"
                                href="{{ route('admin.profile.index') }}">
                                <img class="inline-block mr-2" src="/img/settings.png" alt="" class="h-6 w-6">
                                Settings & Privacy</a>
                        </li>
                    <li class="">
                        <form action="{{ route('admin.logout') }}" method="post">
                            @csrf
                            <button
                                    class="rounded-t bg-gray-200 hover:bg-gray-400 pl-6 pr-24 block py-2" 
                                    type="submit">
                                    <img class="inline-block mr-2" src="/img/signout.png" alt="" class="h-6 w-6">
                                    Sign Out</button>
                        </form>
                    </li>
                </div>
            </ul>
        </div>

    </div>
</header>

<x-guest-layout>
    <x-slot name="slot">
        <img src="/img/about-us.png" alt="">
        <!-- A gateway chuchu landing page  -->
        <div class="mx-auto w-full px-0 pr-64 pl-64 pb-20">
            <div class="p-24">
                <div class="ml-4 text-6xl font-extrabold text-center"><a class="" style="color:#2E052D;">About Us</a>
                </div>
                <div class="ml-4 mt-20 pb-6 text-2xl font-bold text-left"><a class=""
                        style="color:#2E052D;">History</a></div>

                <div class="text-justify ml-4 mt-2 text-lg" style="text-indent: 5rem;">
                    <a class="text-gray-900 font-light" style="color:#2E052D;">{{ $websiteInfo->history }}</a>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-cols-2 divide-x-2 divide-solid mt-20">
                    <div class="text-left">
                        <div class="text-justify ml-4 mt-2 mr-16 text-lg">
                            <div class="ml-4 text-2xl font-bold text-center pb-6"><a class=""
                                    style="color:#2E052D;">Mission</a></div>
                            <div style="text-indent: 5rem;">
                                <a class="text-gray-900 font-light" style="color:#2E052D;">{{ $websiteInfo->mission }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-left">
                        <div class="text-justify ml-16 mt-2 text-lg">
                            <div class="ml-4 mt- text-2xl font-bold text-center pb-6"><a class=""
                                    style="color:#2E052D;">Vision</a></div>
                            <div style="text-indent: 5rem;">
                                <a class="text-gray-900 font-light" style="color:#2E052D;">{{ $websiteInfo->vision }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-4 mt-20 pb-6 text-2xl font-bold text-left"><a class="" style="color:#2E052D;">About
                        the Website</a></div>
                <div class="text-justify ml-4 mt-2 text-lg" style="text-indent: 5rem;">
                    <a class="text-gray-900 font-light" style="color:#2E052D;">{{ $websiteInfo->about }}</a>
                </div>

                <div class="ml-4 mt-20 pb-6 text-2xl font-bold text-left"><a class=""
                        style="color:#2E052D;">Objectives</a></div>
                <div class="text-justify ml-4 mt-2 text-lg">
                    <p class="text-gray-900 font-light" style="color:#2E052D; text-indent: 5rem;">{{ $websiteInfo->objectives }}</p>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

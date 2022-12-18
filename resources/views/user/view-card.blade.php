<x-guest-layout>
    <x-slot name="slot">
        <!-- Bookmarking page  -->
            <!--R-side-->
            <div class="flex-auto w-4/5 mt-10 mb-20 mx-48">
                <div class="pl-16 pr-24 mb-5 py-6">
                    <div class="ml-4 text-3xl font-semibold text-left pb-4">Title: </div>
                    <hr class="pb-1" style="border-color: #949494;">
                </div>
                <div class="pl-20 pr-32 mb-5">
                    <a href="#printedresource">
                        <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="pl-10 pt-5 pb-5">
                                    <label style="font-weight: bold;"> Title: </label> !! title !!
                                    <br>
                                    <label style="font-weight: bold;"> Abstract: </label> !! abstract !!
                                    <br>
                                    <label style="font-weight: bold;"> Author: </label> !! author !!
                                    <br>
                                    <label style="font-weight: bold;"> Journal Title: </label> !! journal_title!!
                                    <br>
                                    <label style="font-weight: bold;"> URL: </label> !! URL !!
                                    <br>
                                    <label style="font-weight: bold;"> DOI: </label> !! DOI !!
                                    <br>
                                    <label style="font-weight: bold;"> Publication Type: </label> !! pub_type !!
                                </div>
                                <div class="mt-10 pt-24">
                                    <label style="font-weight: bold;"> Page: </label> !! page !!
                                    <br>
                                    <label style="font-weight: bold;"> Date Published: </label> !! date_pub !!
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#printedresource">
                        <div class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="pl-10 pt-5 pb-5">
                                    <label style="font-weight: bold;"> Title: </label> !! title !!
                                    <br>
                                    <label style="font-weight: bold;"> Abstract: </label> !! abstract !!
                                    <br>
                                    <label style="font-weight: bold;"> Author: </label> !! author !!
                                    <br>
                                    <label style="font-weight: bold;"> Journal Title: </label> !! journal_title!!
                                    <br>
                                    <label style="font-weight: bold;"> URL: </label> !! URL !!
                                    <br>
                                    <label style="font-weight: bold;"> DOI: </label> !! DOI !!
                                    <br>
                                    <label style="font-weight: bold;"> Publication Type: </label> !! pub_type !!
                                </div>
                                <div class="mt-10 pt-24">
                                    <label style="font-weight: bold;"> Page: </label> !! page !!
                                    <br>
                                    <label style="font-weight: bold;"> Date Published: </label> !! date_pub !!
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#printedresource">
                        <div class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="pl-10 pt-5 pb-5">
                                    <label style="font-weight: bold;"> Title: </label> !! title !!
                                    <br>
                                    <label style="font-weight: bold;"> Abstract: </label> !! abstract !!
                                    <br>
                                    <label style="font-weight: bold;"> Author: </label> !! author !!
                                    <br>
                                    <label style="font-weight: bold;"> Journal Title: </label> !! journal_title!!
                                    <br>
                                    <label style="font-weight: bold;"> URL: </label> !! URL !!
                                    <br>
                                    <label style="font-weight: bold;"> DOI: </label> !! DOI !!
                                    <br>
                                    <label style="font-weight: bold;"> Publication Type: </label> !! pub_type !!
                                </div>
                                <div class="mt-10 pt-24">
                                    <label style="font-weight: bold;"> Page: </label> !! page !!
                                    <br>
                                    <label style="font-weight: bold;"> Date Published: </label> !! date_pub !!
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>


        <div id="printedresource" class="overlay absolute">
            <div class="card">
                <div class="grid grid-col-2 grid-flow-row gap-4">
                    <div class="pt-8 pb-4 pl-8">
                        <h2 class="font-semibold" for="title">Title: </h2>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pt-6 pb-20 pl-8">
                        <a class="close" href="#">&times;</a>
                        <h2 class="font-semibold mb-2" for="abstract">Abstract: </h2>
                        <h2 class="font-semibold mb-2" for="institution">Institution: </h2>
                        <h2 class="font-semibold mb-2" for="journal-title">Journal Title/s: </h2>
                        <h2 class="font-semibold mb-2" for="url">URL: </h2>
                        <h2 class="font-semibold mb-2" for="doi">DOI: </h2>
                        <h2 class="font-semibold mb-2" for="subject">Subject: </h2>
                        <h2 class="font-semibold mb-2" for="pages">Number of Pages: </h2>
                        <h2 class="font-semibold mb-2" for="publishing-date">Publishing Date: </h2>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

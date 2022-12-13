<x-guest-layout>
    <x-admin-header></x-admin-header>
    
    <body>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">
            
            <div class="text-left col-span-2">
                <x-side-nav></x-side-nav>
                <script>
                        const myElement = document.getElementById("approving");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10">
                    <h1 class="text-2xl font-extrabold">Approving of Papers/Videos</h1>
        
                    <div class="pr-36 mt-8 mb-5">
                        <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-3 gap-5">
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
                                    <label style="font-weight: bold;"> Date Published: </label>  !! date_pub !!
                                </div>

                                <div class="flex-auto mt-12 pt-24 pl-10">
                                    <button id="approved" class="button approve response mr-3 mb-2">Approve</button>
                                    <button id="declined" class="button decline response"> Decline </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pr-36 mt-8 mb-5">
                        <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-3 gap-5">
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
                                    <label style="font-weight: bold;"> Date Published: </label>  !! date_pub !!
                                </div>

                                <div class="flex-auto mt-12 pt-24 pl-10">
                                    <button id="approved" class="button approve response mr-3 mb-2">Approve</button>
                                    <button id="declined" class="button decline response"> Decline </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pr-36 mt-8 mb-5">
                        <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                            <div class="grid grid-cols-3 gap-5">
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
                                    <label style="font-weight: bold;"> Date Published: </label>  !! date_pub !!
                                </div>

                                <div class="flex-auto mt-12 pt-24 pl-10">
                                    <button id="approved" class="button approve response mr-3 mb-2">Approve</button>
                                    <button id="declined" class="button decline response"> Decline </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



                </div>
            </div>
        </div>
    </body>

    <x-admin-footer></x-admin-footer>
</x-guest-layout>
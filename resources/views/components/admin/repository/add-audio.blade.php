<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="get">
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-title" style="color:#2E052D;">
                                Title:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 60px;" id="aud-title" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-acc" style="color:#2E052D;">
                                Access Type:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:300px">
                                <option selected disabled></option>
                                <option value="#">Public</option>
                                <option value="#">Private</option>
                            </select>
                    </div>



                <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-author" style="color:#2E052D;">
                                Author:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="aud-author" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-author-email" style="color:#2E052D;">
                                Author Email:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-author-email" type="email" required></input>
                            <button onclick="add()" class="fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"></button>
                    </div>



                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-abstract" style="color:#2E052D;">
                                Abstract:
                            </label> 
                            <textarea class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="aud-abstract" type="text" required></textarea>
                    </div>
                    

                <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-subj" style="color:#2E052D;">
                                Subjects:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="aud-subj" type="text" required></input>
                            <button onclick="add()" class="fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"></button>
                    </div>


                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-url" style="color:#2E052D;">
                                URL:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 63px;" id="aud-url" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-doi" style="color:#2E052D;">
                                DOI:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-doi" type="text" required></input>
                    </div>



                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-inst" style="color:#2E052D;">
                                Institution:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:1100px; margin-left:12px;">
                                        <option selected disabled></option>
                                        <option value="#">Option 1</option>
                                        <option value="#">Option 2</option>
                            </select>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-page" style="color:#2E052D;">
                                Page:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="aud-page" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-date" style="color:#2E052D;">
                                Date Published:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-date" type="text" required></input>


                    </div>
            </div>

        </div>

                                        <div class="btn-pos mt-10 text-center">
                                            <button class="btn4" type="reset" style="width: 40%; background-color:#2E052D;">
                                                Clear
                                            </button>
                                            <button class="btn4" type="submit" style="width: 40%; background-color:#2E052D;">
                                                Submit
                                            </button>
                                        </div>
                    </form>

    </div>
</div>
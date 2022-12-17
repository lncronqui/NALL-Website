<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="get">
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-title" style="color:#2E052D;">
                                Title:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 60px;" id="elec-title" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="elec-acc" style="color:#2E052D;">
                                Access Type:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:300px">
                                <option selected disabled></option>
                                <option value="#">Option 1</option>
                                <option value="#">Option 2</option>
                            </select>
                    </div>



                <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-author" style="color:#2E052D;">
                                Author:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="elec-author" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="elec-author-email" style="color:#2E052D;">
                                Author Email:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="elec-author-email" type="email" required></input>
                            <button onclick="add()" class="fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"></button>
                    </div>



                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-abstract" style="color:#2E052D;">
                                Abstract:
                            </label> 
                            <textarea class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="elec-abstract" type="text" required></textarea>
                    </div>


                 <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-journ" style="color:#2E052D;">
                                Journal Titles:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 3px;" id="elec-journ" type="text" required></input>
                            <button onclick="add()" class="fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"></button>
                    </div>
                    

                <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-subj" style="color:#2E052D;">
                                Subjects:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="elec-subj" type="text" required></input>
                            <button onclick="add()" class="fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"></button>
                    </div>


                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-url" style="color:#2E052D;">
                                URL:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 63px;" id="elec-url" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="elec-doi" style="color:#2E052D;">
                                DOI:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="elec-doi" type="text" required></input>
                    </div>



                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="elec-inst" style="color:#2E052D;">
                                Institution:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:1100px; margin-left:12px;">
                                        <option selected disabled></option>
                                        <option value="#">Option 1</option>
                                        <option value="#">Option 2</option>
                            </select>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="elec-page" style="color:#2E052D;">
                                Page:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="elec-page" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="elec-date" style="color:#2E052D;">
                                Date Published:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="elec-date" type="text" required></input>


                    </div>
            </div>

        </div>

                                        <div class="btn-pos mt-10">
                                            <button class="btn4" type="reset" style="width: 100px; background-color:#2E052D;">
                                                Clear
                                            </button>
                                            <button class="btn4" type="submit" style="width: 100px; background-color:#2E052D;">
                                                Submit
                                            </button>
                                        </div>
                    </form>

    </div>
</div>
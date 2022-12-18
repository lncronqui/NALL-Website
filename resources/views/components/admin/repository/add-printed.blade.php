<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form id="add-printed "method="get">

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="prnt-title" style="color:#2E052D;">
                            Title:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 60px;" id="prnt-title" type="text" required></input>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="prnt-acc"
                            style="color:#2E052D;">
                            Access Type:
                        </label>
                        <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3"
                            style="width:300px">
                            <option selected disabled></option>
                            <option value="#">Public</option>
                            <option value="#">Private</option>
                        </select>
                    </div>



                    <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="prnt-author"
                            style="color:#2E052D;">
                            Author:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 38px;" id="prnt-author" type="text" required>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="prnt-author-email"
                            style="color:#2E052D;">
                            Author Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 27px;" id="prnt-author-email" type="email" required>
                        
                            <button type="button" onclick="add()" class="fa fa-plus-circle ml-2"
                            style="font-size:48px; color: gray;"/>
                    </div>




                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="prnt-abstract"
                            style="color:#2E052D;">
                            Abstract:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 28px;" id="prnt-abstract" type="text" required></textarea>
                    </div>


                    <!--need to make on-click add new field-->
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="prnt-subj" style="color:#2E052D;">
                            Subjects:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 28px;" id="prnt-subj" type="text" required>
                        <button onclick="add()" class="fa fa-plus-circle ml-2"
                            style="font-size:48px; color: gray;"></button>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="prnt-inst" style="color:#2E052D;">
                            Institution:
                        </label>
                        <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3"
                            style="width:1100px; margin-left:12px;">
                            <option selected disabled></option>
                            <option value="#">Option 1</option>
                            <option value="#">Option 2</option>
                        </select>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="prnt-page"
                            style="color:#2E052D;">
                            Page:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 38px;" id="prnt-page" type="text" required>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="prnt-date"
                            style="color:#2E052D;">
                            Date Published:
                        </label>
                        <input
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 27px;" id="prnt-date" type="text" required>
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
</div>
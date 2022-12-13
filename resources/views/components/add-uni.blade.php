<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="get">
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="uni-name" style="color:#2E052D;">
                                Name:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 60px;" id="uni-name" type="text" required></input>
                    </div>
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="uni-email" style="color:#2E052D;">
                                Email:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                        focus:outline-none focus:shadow-outline" style="margin-left: 64px;" id="uni-email" type="email" required></input>
                    </div>
                    <div class="flex mb-5">
                    <label class="block text-gray-700 text-lg font-semibold" for="uni-acc" style="color:#2E052D;">
                                Access Type:
                            </label> 
                            <div>
                            <select name="format" class="shadow appearance-none border rounded w-full ml-3 h-12 py-2 px-3">
                                    <option selected disabled></option>
                                    <option value="#">Option 1</option>
                                    <option value="#">Option 2</option>
                            </select>
                    </div>
                    </div>
            </div>

        </div>

                                        <div class="btn-pos mt-10">
                                            <button class="btn4" type="submit" style="width: 100px; background-color:#2E052D;">
                                                Add
                                            </button>
                                        </div>
                </form>

    </div>
</div>
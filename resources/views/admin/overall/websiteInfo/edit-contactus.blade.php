<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form action="{{ route('admin.overall.website-info.update-contact', $contactInfo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="address1" style="color:#2E052D;">
                            Address 1:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded h-12 ml-4 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="width:85%;" id="address1" type="text" required>{{ $contactInfo->address_1 }}</textarea>
                    </div>

                    <div class="flex flex-wrap mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="address2" style="color:#2E052D;">
                            Address 2:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded ml-4 h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="width:85%;" id="address2" type="text" required>{{ $contactInfo->address_2 }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="city" style="color:#2E052D;">
                            City:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded ml-4 mr-4 h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 65px; width:40%;" id="city" type="text" required>{{ $contactInfo->city }}</textarea>


                            <div class="flex flex-nowrap">
                                    <label class="block text-gray-700 text-lg font-semibold ml-5" for="zip-code"
                                        style="color:#2E052D;">
                                        Zip Code:
                                    </label>
                                    <textarea
                                        class="shadow appearance-none border rounded ml-4 h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                            focus:outline-none focus:shadow-outline"
                                        style="margin-left: 30px; width:55%;" id="zip-code" type="text" required>{{ $contactInfo->zip_code }}</textarea>
                            </div>

                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="tel-no" style="color:#2E052D;">
                            Telephone <br>
                            Number:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded h-12 ml-4 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 18px; width:85%;" id="tel-no" type="text" required>{{ $contactInfo->tel_number }}</textarea>
                    </div>

                            <div class="flex mb-5">
                                    <label class="block text-gray-700 text-lg font-semibold" for="i.email"
                                        style="color:#2E052D;">
                                        E-mail:
                                    </label>
                                    <textarea
                                        class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                            focus:outline-none focus:shadow-outline"
                                        style="margin-left: 47px; margin-right: 50px; width:85%;" id="i.email" type="text" required>{{ $contactInfo->email }}</textarea>
                            </div>
                
            </div>

        </div>

        <div class="btn-pos mt-10 text-center">
            <button class="btn4" type="submit" style="width: 40%; background-color:#2E052D;">
                Submit
            </button>
        </div>
        </form>

    </div>
</div>

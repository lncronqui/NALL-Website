<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form action="{{ route('admin.overall.website-info.update-contact', $contactInfo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="address1" style="color:#2E052D;">
                            Address 1:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 40px;" id="address1" type="text" required>{{ $contactInfo->address_1 }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="address2" style="color:#2E052D;">
                            Address 2:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 40px;" id="address2" type="text" required>{{ $contactInfo->address_2 }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="city" style="color:#2E052D;">
                            City:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 79px;" id="city" type="text" required>{{ $contactInfo->city }}</textarea>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="zip-code"
                            style="color:#2E052D;">
                            Zip Code:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 27px;" id="zip-code" type="text" required>{{ $contactInfo->zip_code }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="tel-no" style="color:#2E052D;">
                            Telephone Number:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 31px;" id="tel-no" type="text" required>{{ $contactInfo->tel_number }}</textarea>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="i.email"
                            style="color:#2E052D;">
                            E-mail:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 31px;" id="i.email" type="text" required>{{ $contactInfo->email }}</textarea>
                    </div>
            </div>

        </div>

        <div class="btn-pos mt-10">
            <button class="btn4" type="submit" style="width: 100px; background-color:#2E052D;">
                Submit
            </button>
        </div>
        </form>

    </div>
</div>

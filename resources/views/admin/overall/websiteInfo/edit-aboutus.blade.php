<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />
<link href="/css/style.css" rel="stylesheet" type="text/css" />

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form action="{{ route('admin.overall.website-info.update-website') }}" method="post">
                    @csrf
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="history" style="color:#2E052D;">
                            History:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 40px; height: 300px;" id="history" name="history" type="text" required>{{ $websiteInfo->history }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="mission" style="color:#2E052D;">
                            Mission:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded mr-6 w-full py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 36px; height: 300px;" id="mission" name="mission" type="text" required>{{ $websiteInfo->mission }}</textarea>

                        <label class="block text-gray-700 text-lg font-semibold" for="vision" style="color:#2E052D;">
                            Vision:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded ml-5 w-full py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="height: 300px;" id="vision" type="text" name="vision" required>{{ $websiteInfo->vision }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="abt-web" style="color:#2E052D;">
                            About the Website:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded  w-full py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: -40px; height: 200px;" id="abt-web" type="text" name="about" required>{{ $websiteInfo->about }}</textarea>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="objectives"
                            style="color:#2E052D;">
                            Objectives:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 15px; height: 200px;" id="objectives" name="objectives" type="text" required>{{ $websiteInfo->objectives }}</textarea>
                    </div>
            </div>

        </div>

        <!-- display if submission is success or error-->
        @if ($errors->any())
            <div class="font-bold text-center pb-2" style="color:red;">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif
        @if (session('success'))
            <div class="font-bold text-left pb-2" style="color:green;">
                    {{ session('success') }}
            </div>
        @endif


        <!-- buttons -->
        <div class="mt-10 text-center">
            <button type="submit" class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                Submit
            </button>
        </div>
        </form>
    </div>
</div>

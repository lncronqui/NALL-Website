<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="POST" action="{{ route('admin.overall.accounts.store.admin') }}">
                    @csrf
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
                    <div class="flex mb-8">
                    <label class="block text-gray-700 text-lg font-semibold" for="uni-acc" style="color:#2E052D;">
                                Access Type:
                            </label>
                            <div>
                            <select name="institution_id"
                                 class="shadow appearance-none border rounded w-full ml-3 mr-3 h-12 py-2 px-3" style="margin-left:11px;">
                                    <option selected disabled>---Select Institution---</option>
                                    @foreach ($institutions as $institution)
                                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                    @endforeach
                            </select>
                    </div>
                    </div>
            </div>

        </div>
                        <!-- display if submission is success or error-->
                        @if ($errors->any())
                        <div class="font-bold text-center pt-2"><a class="" style="color:red;">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                        </div>
                    @endisset


        <!-- buttons -->
        <div class="mt-10 text-center">
                <button type="submit" class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                         Add
                </button>
        </div>
                </form>

    </div>
</div>

<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />

<div class="print">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="POST" action="{{ route('admin.overall.accounts.store.overall-admin') }}">
                    @csrf
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="overall-name"
                            style="color:#2E052D;">
                            Name:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 60px;" id="overall-name" name="name" type="text" required>
                    </div>
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="overall-email"
                            style="color:#2E052D;">
                            Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                        focus:outline-none focus:shadow-outline"
                            style="margin-left: 64px;" id="overall-email" name="email" type="email" required>
                    </div>
                    <div class="flex mb-8">
                        <label class="block text-gray-700 text-lg font-semibold" for="overall-acc"
                            style="color:#2E052D;">
                            Institution:
                        </label>
                        <div>
                            <select name="institution_id"
                                class="shadow appearance-none border rounded w-full ml-3 mr-3 h-12 py-2 px-3" style="margin-left:24px;">
                                <option selected disabled>---Select Institution---</option>
                                @foreach ($institutions as $institution)
                                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>

        </div>

        <div class="mt-10 text-center">
                <button type="submit" class="btn4" style="width: 40%; height: 3rem; border-radius: 5px;">
                         Add
                </button>
        </div>
        </form>

    </div>
</div>
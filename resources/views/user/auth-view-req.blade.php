<x-guest-layout>
    <x-slot name="slot">
        <!-- Bookmarking page  -->

        <!--R-side-->
        <div class="pl-40 pr-40 pt-20 pb-20">
            <div class="mb-5 py-6">
                <div class="ml-10 text-3xl font-semibold text-left pb-4">View Requests</div>
                <hr class="pb-1" style="border-color: #949494;">
            </div>


            <div class="pl-20 pr-20 mb-5">
                <div class="rounded-md border border-gray-300 mb-5">
                    <table class="tableContainer grid" style="border-collapse: collapse;">
                        <thead>
                            <tr class="text-center">
                                <th class="pt-4 pb-4 "> Title </th>
                                <th class="pt-4 pb-4 "> Description </th>
                                <th class="pt-4 pb-4 "> Institution </th>
                                <th class="pt-4 pb-4 "> Subject </th>
                            </tr>
                        </thead>

                        <tbody class="scrollContent" style="border-collapse: collapse;">
                            @foreach ($user->requests as $req)
                                <tr class="text-center">
                                    <td class="pt-3 pb-10 "> {{ $req->title }} </th>
                                    <td class="pt-3 pb-10  text-justify">{{ $req->abstract }}</th>
                                    <td class="pt-3 pb-10 "> {{ $req->institution->name }} </th>
                                    <td class="pt-3 pb-10 "> {{ $req->subject->name }} </th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slot>
</x-guest-layout>

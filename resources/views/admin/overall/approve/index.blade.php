<x-admin.layout>
    <div
        class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

        <div class="text-left col-span-2">
            <x-admin.side-nav></x-admin.side-nav>
            <script>
                const myElement = document.getElementById("approving");
                myElement.style.color = "#2E052D";
                myElement.style.fontWeight = "500";
            </script>
        </div>

        <div class="text-left col-span-8">
            <div class="ml-10">
                <h1 class="text-2xl font-extrabold">Approving of Papers/Videos</h1>

                @foreach ($mediaResources as $mediaResource)
                    @if ($mediaResource->resource_type_id == 1)
                        <div class="pr-36 mt-8 mb-5">
                            <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                                    <!-- Information in card -->
                                    <div class="pl-10 pt-5 pr-10">
                                        <label style="font-weight: bold;"> Title: </label> {{ $mediaResource->title }}
                                        <br>
                                        <label style="font-weight: bold;"> Abstract: </label>
                                        {{ $mediaResource->abstract }}
                                        <br>
                                        <label style="font-weight: bold;"> Author: </label>
                                            @foreach ($mediaResource->authors as $author)
                                                {{ $author->name }} || {{ __('  ') }}
                                            @endforeach
                                        <br>
                                        <label style="font-weight: bold;"> Subject: </label>
                                        {{ $mediaResource->subject->name }}
                                        <br>
                                        <label style="font-weight: bold;"> URL: </label> {{ $mediaResource->url }}
                                        <br>
                                        <label style="font-weight: bold;"> DOI: </label> {{ $mediaResource->doi }}
                                        <br>
                                    </div> 
                                <div class="grid grid-flow-row-dense grid-cols-2">
                                     <div class="pl-10 pb-5 pr-10">
                                        <label style="font-weight: bold;"> Publication Type: </label>
                                        {{ $mediaResource->resource_type->name }}
                                        <br>
                                        <label style="font-weight: bold;"> Page: </label> {{ $mediaResource->page }}
                                        <br>
                                        <label style="font-weight: bold;"> Date Published: </label>
                                        {{ $mediaResource->date }}  
                                    </div>   

                                    <div class="flex-auto ml-56 mr-20 pb-5 pr-10">
                                        <form action="{{ route('admin.overall.approve.accept', $mediaResource) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" id="approved"
                                                class="btn4 approve response mr-3 mb-2">
                                                Approve
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.overall.approve.deny', $mediaResource) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <button type="submit" id="declined" class="btn4 decline response">
                                                Decline 
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       </div>
                    @elseif ($mediaResource->resource_type_id == 2)

                    @elseif ($mediaResource->resource_type_id == 3)

                    @elseif ($mediaResource->resource_type_id == 4)
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</x-admin.layout>

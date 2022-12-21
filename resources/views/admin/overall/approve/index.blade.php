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
            <div class="ml-10 mt-5">
                <h1 class="text-3xl font-extrabold mb-6 ml-2">Approving of Papers/Videos</h1>
                @if (session('success'))
                    <div class="font-bold text-left pb-2" style="color:green;">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="font-bold text-center pb-2" style="color:red;">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endisset
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
                                        @if ($loop->last)
                                            {{ $author->name }}
                                        @else
                                            {{ $author->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> Subject: </label>
                                    @foreach ($mediaResource->subjects as $subject)
                                        @if ($loop->last)
                                            {{ $subject->name }}
                                        @else
                                            {{ $subject->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                </div>
                                <div class="grid grid-flow-row-dense grid-cols-2">
                                    <div class="pl-10 pb-5 pr-10">
                                        <label style="font-weight: bold;"> Publication Type: </label>
                                        {{ $mediaResource->resource_type->name }}
                                        <br>
                                        <label style="font-weight: bold;"> Page: </label>
                                        {{ $mediaResource->page }}
                                        <br>
                                        <label style="font-weight: bold;"> Date Published: </label>
                                        {{ $mediaResource->date }}
                                    </div>

                                    <div class="flex-auto mr-20 pb-5 pr-10 app-btn">
                                        <form
                                            action="{{ route('admin.overall.approve.update', $mediaResource->id) }}"
                                            method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" id="approved"
                                                class="btn4 approve response mr-3 mb-2">
                                                Approve
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.overall.approve.destroy', $mediaResource->id) }}"
                                            method="POST">
                                            @method('DELETE')
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
                                        @if ($loop->last)
                                            {{ $author->name }}
                                        @else
                                            {{ $author->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> Subject: </label>
                                    @foreach ($mediaResource->subjects as $subject)
                                        @if ($loop->last)
                                            {{ $subject->name }}
                                        @else
                                            {{ $subject->name }},
                                        @endif
                                    @endforeach
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
                                        <label style="font-weight: bold;"> Page: </label>
                                        {{ $mediaResource->page }}
                                        <br>
                                        <label style="font-weight: bold;"> Date Published: </label>
                                        {{ $mediaResource->date }}
                                    </div>

                                    <div class="flex-auto mr-20 pb-5 pr-10 app-btn">
                                        <form
                                            action="{{ route('admin.overall.approve.update', $mediaResource->id) }}"
                                            method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" id="approved"
                                                class="btn4 approve response mr-3 mb-2">
                                                Approve
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.overall.approve.destroy', $mediaResource->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" id="declined" class="btn4 decline response">
                                                Decline
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($mediaResource->resource_type_id == 3)
                        <div class="pr-36 mt-8 mb-5">
                            <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                                <!-- Information in card -->
                                <div class="pl-10 pt-5 pr-10">
                                    <label style="font-weight: bold;"> Title: </label> {{ $mediaResource->title }}
                                    <br>
                                    <label style="font-weight: bold;"> Description: </label>
                                    {{ $mediaResource->abstract }}
                                    <br>
                                    <label style="font-weight: bold;"> Author/Instructors: </label>
                                    @foreach ($mediaResource->authors as $author)
                                        @if ($loop->last)
                                            {{ $author->name }}
                                        @else
                                            {{ $author->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> Subject: </label>
                                    @foreach ($mediaResource->subjects as $subject)
                                        @if ($loop->last)
                                            {{ $subject->name }}
                                        @else
                                            {{ $subject->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> URL: </label> {{ $mediaResource->url }}
                                    <br>
                                </div>
                                <div class="grid grid-flow-row-dense grid-cols-2">
                                    <div class="pl-10 pb-5 pr-10">
                                        <label style="font-weight: bold;"> Publication Type: </label>
                                        {{ $mediaResource->resource_type->name }}
                                        <br>
                                        <label style="font-weight: bold;"> Date Published: </label>
                                        {{ $mediaResource->date }}
                                    </div>

                                    <div class="flex-auto mr-20 pb-5 pr-10 app-btn">
                                        <form
                                            action="{{ route('admin.overall.approve.update', $mediaResource->id) }}"
                                            method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" id="approved"
                                                class="btn4 approve response mr-3 mb-2">
                                                Approve
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.overall.approve.destroy', $mediaResource->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" id="declined" class="btn4 decline response">
                                                Decline
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($mediaResource->resource_type_id == 4)
                        <div class="pr-36 mt-8 mb-5">
                            <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                                <!-- Information in card -->
                                <div class="pl-10 pt-5 pr-10">
                                    <label style="font-weight: bold;"> Title: </label> {{ $mediaResource->title }}
                                    <br>
                                    <label style="font-weight: bold;"> Description: </label>
                                    {{ $mediaResource->abstract }}
                                    <br>
                                    <label style="font-weight: bold;"> Author/Instructor: </label>
                                    @foreach ($mediaResource->authors as $author)
                                        @if ($loop->last)
                                            {{ $author->name }}
                                        @else
                                            {{ $author->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> Subject: </label>
                                    @foreach ($mediaResource->subjects as $subject)
                                        @if ($loop->last)
                                            {{ $subject->name }}
                                        @else
                                            {{ $subject->name }},
                                        @endif
                                    @endforeach
                                    <br>
                                    <label style="font-weight: bold;"> URL: </label> {{ $mediaResource->url }}
                                    <br>
                                </div>
                                <div class="grid grid-flow-row-dense grid-cols-2">
                                    <div class="pl-10 pb-5 pr-10">
                                        <label style="font-weight: bold;"> Publication Type: </label>
                                        {{ $mediaResource->resource_type->name }}
                                        <br>
                                        <label style="font-weight: bold;"> Date Published: </label>
                                        {{ $mediaResource->date }}
                                    </div>

                                    <div class="flex-auto mr-20 pb-5 pr-10 app-btn">
                                        <form
                                            action="{{ route('admin.overall.approve.update', $mediaResource->id) }}"
                                            method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <button type="submit" id="approved"
                                                class="btn4 approve response mr-3 mb-2">
                                                Approve
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('admin.overall.approve.destroy', $mediaResource->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" id="declined" class="btn4 decline response">
                                                Decline
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>

</x-admin.layout>

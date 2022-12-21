<x-guest-layout>
    <x-slot name="slot">
        <!-- A gateway chuchu landing page  -->
        <form action="{{ route('user.search.index') }}" method="GET">
            <div
                class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 py-20 px-20">
                <div class="text-left col-span-2">
                    <div class="side-panel text-justify text-lg">
                        <div class="block">

                            <!-- filter by category -->
                            <span class="text-black font-semibold">Category</span>
                            <div class="mt-2 mb-6">
                                <div class="checkbox">
                                    <input type="checkbox" {{ $title ? 'checked' : '' }} id="titles" name="title">
                                    <label for="titles">Title</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" {{ $author ? 'checked' : '' }} id="authors" name="author">
                                    <label for="authors">Author</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" {{ $institution ? 'checked' : '' }} id="institution"
                                        name="institution">
                                    <label for="institution">Institution</label>
                                </div>
                            </div>

                            <!-- filter by type -->
                            <span class="text-black font-semibold">Type</span>
                            <div class="mt-2 mb-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="printed" name="printed" {{ $printed ? 'checked' : '' }}
                                        oninput="filterCondt(event);">
                                    <label for="printed">Printed</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="video" name="video" {{ $video ? 'checked' : '' }}
                                        oninput="filterCondt(event);">
                                    <label for="video">Video</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="audio" name="audio" {{ $audio ? 'checked' : '' }}
                                        oninput="filterCondt(event);">
                                    <label for="audio">Audio</label>
                                </div>
                                <div class="flex checkbox" style="margin-left:5px;">
                                    <input type="checkbox" id="elec-resource" name="elec"
                                        {{ $elec ? 'checked' : '' }} oninput="filterCondt(event);">
                                    <label for="elec-resource">Electronic Resource</label>
                                </div>
                            </div>

                            <span class="text-black font-semibold">Year</span>
                            <div class="flex relative ml-1 mt-2">
                                <input type="number" name="beforeYear" min="1800" max="{{ date('Y') }}"
                                    class="input-year"
                                    style="height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
                                <span class=" mx-2 text-gray-700">-</span>
                                <input type="number" name="afterYear" min="1800" max="{{ date('Y') }}"
                                    class="input-year"
                                    style="height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
                            </div>
                            <div class="pl-4 pt-6 text-md">
                                <button type="submit" class="btn4b w-full">
                                    Apply Filters
                                </button>
                            </div>
                            <div class="pl-4 pt-2 text-md">
                                <button type="reset" class="btn4b w-full">
                                    Reset Filters
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-left col-span-8">
                    <div class="text-justify ml-16 text-lg grid mr-24 my-6">
                        <div class="ml-4 text-3xl font-normal text-center pb-6">A Gateway to Open Access Legal Resources
                            in
                            the Philippines</div>
                        <label for="searchbar" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-900"
                            style="color:#737373;">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-10 pointer-events-none">
                                <svg aria-hidden="true" class="w-8 h-8 text-gray-900 dark:text-gray-500" fill="none"
                                    stroke="#737373" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" style="color:#737373;"></path>
                                </svg>
                            </div>
                            <input type="search" id="searchbar"
                                class="block p-4 pl-20 w-full h-16 text-md bg-gray-50 rounded-lg focus:border-none"
                                placeholder="Search for Legal Resources..." name="search" value="{{ $search }}"
                                style="color:black;">
                        </div>
                        <!-- sort by -->
                        <div class="relative mt-4">
                            <div class="text-sm font-bold text-left relative float-left mt-1">Sort By: </div>
                            <button class="sorting font-light ml-2">Title <i class="fa fa-sort"
                                    style="color: #797979;"></i></button>
                            <button class="sorting font-light ml-2">Pages <i class="fa fa-sort"
                                    style="color: #797979;"></i></button>
                            <button class="sorting font-light ml-2">Year <i class="fa fa-sort"
                                    style="color: #797979;"></i></button>
                        </div>
        </form>

        <!-- display if submission is success or error-->
        @if ($errors->any())
            <div class="font-bold text-center" style="color:red;">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endisset

        @if (session('success'))
            <div class="font-bold text-left pb-2" style="color:green;">
                {{ session('success') }}
            </div>
        @endif

        <!-- result table-->
        <script>
            let btnFirstBookmarked = document.querySelector('#bookmark1');
            let btnSecondBookmarked = document.querySelector('bookmark2');

            btnFirstBookmarked.addEventListener('click', () => btnFirstBookmarked.style.backgroundColor = '#2E052D')
            btnSecondBookmarked.addEventListener('click', () => btnSecondBookmarked.style.backgroundColor = '#2E052D')
        </script>


        @foreach ($mediaResources as $mediaResource)
            @if ($mediaResource->resource_type->id == 1)
                <form action="{{ route('user.search.bookmark') }}" method="post">
                    @csrf
                    <input type="hidden" name="bookmark" value="{{ $mediaResource->id }}">
                    <div id="bookmark1" for="bookmarked">
                        <button class="bookmark-button" type="submit">
                            <i class="fa fa-bookmark absolute mt-10" style="font-size: 70px;"></i>
                        </button>
                    </div>
                    <script>
                        button.addEventListener('click', () => {
                            button.dataset.bookmarked = button.dataset.bookmarked === 'true';
                        });
                    </script>
                </form>



                <div class="rounded-md mb-3 mt-12" style="border: 2px solid #BEC1C5;">
                    <a href="{{ route('user.search.show', $mediaResource) }}">
                        <div class="pl-16 pr-16 py-6">
                            <label style="font-weight: bold;" for="title"> Title:
                                {{ $mediaResource->title }}</label>
                            <br>
                            <label style="font-weight: bold;" for="author">
                                Author:
                                @foreach ($mediaResource->authors as $author)
                                    @if ($loop->last)
                                        {{ $author->name }}
                                    @else
                                        {{ $author->name }},
                                    @endif
                                @endforeach
                            </label>

                            <br>
                            <label style="font-weight: bold;" for="journal-title"> Subject:
                                @foreach ($mediaResource->subjects as $subject)
                                    @if ($loop->last)
                                        {{ $subject->name }}
                                    @else
                                        {{ $subject->name }},
                                    @endif
                                @endforeach
                            </label>
                            <br>
                            <label style="font-weight: bold;" for="pub-type"> Publication Type:
                                {{ $mediaResource->resource_type->name }}
                            </label>
                            <div class="flex justify-between">
                                <div class="">
                                    <label style="font-weight: bold;" for="page"> Page:
                                        {{ $mediaResource->page }}</label>
                                    <br>
                                    <label style="font-weight: bold;" for="date-pub"> Date Published:
                                        {{ $mediaResource->date }}</label>
                                </div>
                                <div class="">
                                    @if ($mediaResource->access_type->public)
                                        @if (auth()->user()->hasRequest($mediaResource))
                                        @else
                                            <form action="{{ route('user.search.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="media_resource_id"
                                                    value="{{ $mediaResource->id }}">
                                                <button class="btn4" type="submit">
                                                    Request Access
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            @elseif ($mediaResource->resource_type->id == 2)
                <form action="{{ route('user.search.bookmark') }}" method="post">
                    @csrf
                    <input type="hidden" name="bookmark" value="{{ $mediaResource->id }}">
                    <div id="bookmark1" for="bookmarked">
                        <button class="bookmark-button" type="submit">
                            <i class="fa fa-bookmark absolute mt-10" style="font-size: 70px;"></i>
                        </button>
                    </div>
                    <script>
                        button.addEventListener('click', () => {
                            button.dataset.bookmarked = button.dataset.bookmarked === 'true';
                        });
                    </script>
                </form>

                <div class="rounded-md mb-3 mt-12" style="border: 2px solid #BEC1C5;">
                    <a href="{{ route('user.search.show', $mediaResource) }}">
                        <div class="pl-16 pr-16 py-6">
                            <label style="font-weight: bold;" for="title"> Title:
                                {{ $mediaResource->title }}</label>
                            <br>
                            <label style="font-weight: bold;" for="author">
                                Author:
                                @foreach ($mediaResource->authors as $author)
                                    @if ($loop->last)
                                        {{ $author->name }}
                                    @else
                                        {{ $author->name }},
                                    @endif
                                @endforeach
                            </label>
                            <br>
                            <label style="font-weight: bold;" for="journal-title"> Subject:
                                @foreach ($mediaResource->subjects as $subject)
                                    @if ($loop->last)
                                        {{ $subject->name }}
                                    @else
                                        {{ $subject->name }},
                                    @endif
                                @endforeach
                            </label>
                            <br>
                            <label style="font-weight: bold;" for="url"> URL:
                                {{ $mediaResource->url }}</label>
                            <br>
                            <label style="font-weight: bold;" for="doi"> DOI:
                                {{ $mediaResource->doi }}</label>
                            <br>
                            <label style="font-weight: bold;" for="pub-type"> Publication Type:
                                {{ $mediaResource->resource_type->name }}
                            </label>
                            <div class="flex justify-between items-center">
                                <div class="">
                                    <label style="font-weight: bold;" for="page"> Page:
                                        {{ $mediaResource->page }}</label>
                                    <br>
                                    <label style="font-weight: bold;" for="date-pub"> Date Published:
                                        {{ $mediaResource->date }}</label>
                                </div>
                                <div class="">
                                    @if ($mediaResource->access_type->public)
                                        <form action="{{ route('user.search.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="media_resource_id"
                                                value="{{ $mediaResource->id }}">
                                            <button class="btn4" type="submit">
                                                Request Access
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @elseif ($mediaResource->resource_type->id == 3)
                <form action="{{ route('user.search.bookmark') }}" method="post">
                    @csrf
                    <input type="hidden" name="bookmark" value="{{ $mediaResource->id }}">
                    <div id="bookmark2" for="bookmarked">
                        <button class="bookmark-button" type="submit">
                            <i class="fa fa-bookmark absolute mt-10" style="font-size: 70px;"></i>
                        </button>
                    </div>
                    <script>
                        button.addEventListener('click', () => {
                            button.dataset.bookmarked = button.dataset.bookmarked === 'true';
                        });
                    </script>
                </form>
                <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                    <a href="{{ route('user.search.show', $mediaResource) }}">
                        <div class="pl-16 pr-16 py-6">
                            <label style="font-weight: bold;" for="title"> Title:
                                {{ $mediaResource->title }}</label>
                            <br>
                            <label style="font-weight: bold;" for="description"> Description:
                                {{ $mediaResource->abstract }}</label>
                            <br>
                            <label style="font-weight: bold;" for="author">
                                Author/Instructor:
                                @foreach ($mediaResource->authors as $author)
                                    @if ($loop->last)
                                        {{ $author->name }}
                                    @else
                                        {{ $author->name }},
                                    @endif
                                @endforeach
                            </label>
                            <br>
                            <label style="font-weight: bold;" for="url"> URL:
                                {{ $mediaResource->url }}</label>
                        </div>
                    </a>
                </div>
            @elseif ($mediaResource->resource_type->id == 4)
                <form action="{{ route('user.search.bookmark') }}" method="post">
                    @csrf
                    <input type="hidden" name="bookmark" value="{{ $mediaResource->id }}">
                    <div id="bookmark2" for="bookmarked2">
                        <button class="bookmark-button" type="submit">
                            <i class="fa fa-bookmark absolute mt-10" style="font-size: 70px;"></i>
                        </button>
                    </div>
                    <script>
                        button.addEventListener('click', () => {
                            button.dataset.bookmarked = button.dataset.bookmarked === 'true';
                        });
                    </script>
                </form>
                <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                    <a href="{{ route('user.search.show', $mediaResource) }}">
                        <div class="pl-16 pr-16 py-6">
                            <label style="font-weight: bold;" for="title"> Title:
                                {{ $mediaResource->title }}</label>
                            <br>
                            <label style="font-weight: bold;" for="description"> Description:
                                {{ $mediaResource->abstract }}</label>
                            <br>
                            <label style="font-weight: bold;" for="author">
                                Author/Instructor:
                                @foreach ($mediaResource->authors as $author)
                                    @if ($loop->last)
                                        {{ $author->name }}
                                    @else
                                        {{ $author->name }},
                                    @endif
                                @endforeach
                            </label>
                            <br>
                            <label style="font-weight: bold;" for="url"> URL:
                                {{ $mediaResource->url }}</label>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
        </div>
        </div>

        <!-- bookmark select script -->
        <script>
            const bookmarkButtons = document.querySelectorAll('.bookmark-button');

            bookmarkButtons.forEach(button => {
                button.addEventListener('click', () => {
                    button.dataset.bookmarked = button.dataset.bookmarked === 'true' ? 'false' : 'true';
                });
            });
        </script>
</x-slot>
</x-guest-layout>

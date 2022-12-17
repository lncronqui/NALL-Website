<x-guest-layout>
    <x-slot name="slot">
        <!-- A gateway chuchu landing page  -->
        <div
            class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 py-20 px-20">
            <div class="text-left col-span-2">
                <div class="text-justify mr-16 text-lg ml-12">
                    <form>
                        <div class="block">
                            <span class="text-black font-semibold">Category</span>
                            <div class="mt-2 mb-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="title">
                                    <label for="title">Title</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="author">
                                    <label for="author">Author</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="institution">
                                    <label for="institution">Institution</label>
                                </div>
                            </div>
                            <span class="text-black font-semibold">Filter</span>
                            <div class="mt-2 mb-6">
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="dissertation">
                                        <label for="dissertation">Dissertation</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="journal">
                                        <label for="journal">Journal</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="book">
                                        <label for="book">Book</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="proceedings">
                                        <label for="proceedings">Proceedings</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="readings">
                                        <label for="readings">Readings</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="researchproject">
                                        <label for="researchproject">Research Project</label>
                                    </div>
                                </div>
                            </div>
                            <span class="text-black font-semibold">Type</span>
                            <div class="mt-2 mb-6">
                                <div class="checkbox">
                                    <input type="checkbox" id="printed">
                                    <label for="printed">Printed</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" id="video">
                                    <label for="video">Video</label>
                                </div>
                            </div>

                            <span class="text-black font-semibold">Year</span>
                            <div class="relative ml-4 mt-2">
                                <input type="number" min="1800" max="2022"
                                    style="width: 5.5rem; height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
                                <span class=" mx-2 text-gray-700">-</span>
                                <input type="number" min="1800" max="2022"
                                    style="width: 5.5rem; height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
                            </div>
                            <div class="pl-4 pt-6 text-md">
                                <button class="btn4">
                                    Apply Filters
                                </button>
                            </div>
                            <div class="pl-4 pt-2 text-md">
                                <button class="btn4">
                                    Reset Filters
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-left col-span-8">
                <div class="text-justify ml-16 text-lg grid mr-24 my-6">
                    <div class="ml-4 text-3xl font-normal text-center pb-6">A Gateway to Open Access Legal Resources in
                        the Philippines</div>
                    <form>
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
                                placeholder="Search for Legal Resources..." style="color:black;">
                        </div>
                    </form>
                    <div class="relative mt-4">
                        <div class="text-sm font-bold text-left relative float-left mt-1">Sort By: </div>
                        <button class="sorting font-light ml-2">Title <i class="fa fa-sort"
                                style="color: #797979;"></i></button>
                        <button class="sorting font-light ml-2">Pages <i class="fa fa-sort"
                                style="color: #797979;"></i></button>
                        <button class="sorting font-light ml-2">Year <i class="fa fa-sort"
                                style="color: #797979;"></i></button>
                    </div>

                    <script>
                        let btnFirstBookmarked = document.querySelector('#bookmark1');
                        let btnSecondBookmarked = document.querySelector('bookmark2');

                        btnFirstBookmarked.addEventListener('click', () => btnFirstBookmarked.style.backgroundColor = '#2E052D')
                        btnSecondBookmarked.addEventListener('click', () => btnSecondBookmarked.style.backgroundColor = '#2E052D')
                    </script>

                    @foreach ($medias as $media)
                        @if ($media->resource_type->id == 1)
                            <div id="bookmark1" for="bookmarked">
                                <a href="#popup1" active><button class="absolute"
                                        style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img
                                            src="/img/outlineribbon.png" alt=""
                                            class="w-12"></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <div class="text-md absolute" style="margin-left: 50rem; margin-top: 10.8rem;">
                                    <button class="btn4" style="width: 12rem; height: 2.5rem;">
                                        Request Access
                                    </button>
                                </div>
                                <a href="#printedresource">
                                    <div class="grid grid-cols-3 gap-40">
                                        <div class="pl-16 py-6">
                                            <label style="font-weight: bold;" for="title"> Title: {{ $media->title }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="author"> Author: </label>
                                            <br>
                                            <label style="font-weight: bold;" for="journal-title"> Journal Title: {{ $media->subject->name }}
                                            </label>
                                            <br>
                                            <label style="font-weight: bold;" for="pub-type"> Publication Type: {{ $media->resource_type->name }}
                                            </label>
                                        </div>
                                        <div class="mt-16 pt-24 ml-24">
                                            <label style="font-weight: bold;" for="page"> Page: {{ $media->page }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="date-pub"> Date Published: {{ $media->date }}</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @elseif ($media->resource_type->id == 2)
                            <div id="bookmark1" for="bookmarked">
                                <a href="#popup1" active><button class="absolute"
                                        style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img
                                            src="/img/outlineribbon.png" alt=""
                                            class="w-12"></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <div class="text-md absolute" style="margin-left: 50rem; margin-top: 10.8rem;">
                                    <button class="btn4" style="width: 12rem; height: 2.5rem;">
                                        Request Access
                                    </button>
                                </div>
                                <a href="#electronicresource">
                                    <div class="grid grid-cols-3 gap-40">
                                        <div class="pl-16 py-6">
                                            <label style="font-weight: bold;" for="title"> Title: {{ $media->title }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="author"> Author: </label>
                                            <br>
                                            <label style="font-weight: bold;" for="journal-title"> Journal Title: {{ $media->subject->name }}
                                            </label>
                                            <br>
                                            <label style="font-weight: bold;" for="url"> URL: {{ $media->url }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="doi"> DOI: {{ $media->doi }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="pub-type"> Publication Type: {{ $media->resource_type->name }}
                                            </label>
                                        </div>
                                        <div class="mt-16 pt-24 ml-24">
                                            <label style="font-weight: bold;" for="page"> Page: {{ $media->page }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="date-pub"> Date Published: {{ $media->date }}</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @elseif ($media->resource_type->id == 3)
                            <div id="bookmark2" for="bookmarked2">
                                <a href="#popup1" active><button class="absolute"
                                        style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img
                                            src="/img/outlineribbon.png" alt=""
                                            class="w-12"></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <a href="#videocard">
                                    <div class="grid grid-cols-3 gap-40">
                                        <div class="pl-16 py-6">
                                            <label style="font-weight: bold;" for="title"> Title: {{ $media->title }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="description"> Description: {{ $media->abstract }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="author"> Author/Instructor:
                                            </label>
                                            <br>
                                            <label style="font-weight: bold;" for="url"> URL: {{ $media->url }}</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @elseif ($media->resource_type->id == 4)
                            <div id="bookmark2" for="bookmarked2">
                                <a href="#popup1" active><button class="absolute"
                                        style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img
                                            src="/img/outlineribbon.png" alt=""
                                            class="w-12"></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <a href="#audiocard">
                                    <div class="grid grid-cols-3 gap-40">
                                        <div class="pl-16 py-6">
                                            <label style="font-weight: bold;" for="title"> Title: {{ $media->title }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="description"> Description: {{ $media->abstract }}</label>
                                            <br>
                                            <label style="font-weight: bold;" for="author"> Author/Instructor:
                                            </label>
                                            <br>
                                            <label style="font-weight: bold;" for="url"> URL: {{ $media->url }}</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div id="electronicresource" class="overlay absolute">
            <div class="card">
                <div class="grid grid-col-2 grid-flow-row gap-4">
                    <div class="pt-8 pb-4 pl-8">
                        <h2 class="font-semibold" for="title">Title: </h2>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pt-6 pb-20 pl-8">
                        <a class="close" href="#">&times;</a>
                        <h2 class="font-semibold mb-2" for="abstract">Abstract: </h2>
                        <h2 class="font-semibold mb-2" for="institution">Institution: </h2>
                        <h2 class="font-semibold mb-2" for="journal-title">Journal Title/s: </h2>
                        <h2 class="font-semibold mb-2" for="url">URL: </h2>
                        <h2 class="font-semibold mb-2" for="doi">DOI: </h2>
                        <h2 class="font-semibold mb-2" for="subject">Subject: </h2>
                        <h2 class="font-semibold mb-2" for="pages">Number of Pages: </h2>
                        <h2 class="font-semibold mb-2" for="publishing-date">Publishing Date: </h2>
                    </div>
                </div>
            </div>
        </div>

        <div id="printedresource" class="overlay absolute">
            <div class="card">
                <div class="grid grid-col-2 grid-flow-row gap-4">
                    <div class="pt-8 pb-4 pl-8">
                        <h2 class="font-semibold" for="title">Title: </h2>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pt-6 pb-20 pl-8">
                        <a class="close" href="#">&times;</a>
                        <h2 class="font-semibold mb-2" for="abstract">Abstract: </h2>
                        <h2 class="font-semibold mb-2" for="institution">Institution: </h2>
                        <h2 class="font-semibold mb-2" for="journal-title">Journal Title/s: </h2>
                        <h2 class="font-semibold mb-2" for="url">URL: </h2>
                        <h2 class="font-semibold mb-2" for="doi">DOI: </h2>
                        <h2 class="font-semibold mb-2" for="subject">Subject: </h2>
                        <h2 class="font-semibold mb-2" for="pages">Number of Pages: </h2>
                        <h2 class="font-semibold mb-2" for="publishing-date">Publishing Date: </h2>
                    </div>
                </div>
            </div>
        </div>

        <div id="videocard" class="overlay absolute">
            <div class="card">
                <div class="grid grid-col-2 grid-flow-row gap-4">
                    <div class="pt-8 pb-4 pl-8">
                        <h2 class="font-semibold" for="title">Title: </h2>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pt-6 pb-20 pl-8">
                        <a class="close" href="#">&times;</a>
                        <h2 class="font-semibold mb-2" for="description">Description: </h2>
                        <h2 class="font-semibold mb-2" for="author">Author/Instructor: </h2>
                        <h2 class="font-semibold mb-2" for="link">Link: </h2>
                        <video style="margin: auto;" width="640" height="480" controls>
                            <source src="movie.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>


        <div id="audiocard" class="overlay absolute">
            <div class="card">
                <div class="grid grid-col-2 grid-flow-row gap-4">
                    <div class="pt-8 pb-4 pl-8">
                        <h2 class="font-semibold" for="title">Title: </h2>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pt-6 pb-20 pl-8">
                        <a class="close" href="#">&times;</a>
                        <h2 class="font-semibold mb-2" for="description">Description: </h2>
                        <h2 class="font-semibold mb-2" for="author">Author/Instructor: </h2>
                        <h2 class="font-semibold mb-2" for="link">Link: </h2>
                        <audio controls style="margin: auto;">
                            <source src="horse.ogg" type="audio/ogg">
                            <source src="horse.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>
        </div>

        <div id="popup1" class="overlay absolute">
            <div class="popup">
                <div class="grid grid-col-3 grid-flow-row gap-4">
                    <div class="pt-4 pl-4">
                        <h2 class="font-semibold">Bookmark to...</h2>
                    </div>

                    <hr style="border-color:black;">

                    <div>
                        <a class="close" href="#">&times;</a>
                        <div class="checkbox2 mb-2">
                            <input type="checkbox" id="item1">
                            <label for="item1" class="font-semibold" style="font-size: 16px;">Lorem Ipsum
                                Dolor</label>
                        </div>
                        <div class="checkbox2">
                            <input type="checkbox" id="item2">
                            <label for="item2" class="font-semibold" style="font-size: 16px;">Lorem Ipsum
                                Dolor</label>
                        </div>
                    </div>

                    <hr style="border-color:black;">

                    <div class="pb-6">
                        <a class="plus" style="margin-left: 1.3rem; top: 9.2rem;" href="#popup2">&times;</a>
                        <h2 class="font-semibold" style="font-size: 16px; margin-left: 3.5rem;">Create New Bookmark
                            List</h2>
                    </div>
                </div>
            </div>
        </div>

        <form>
            <div id="popup2" class="overlay absolute">
                <div class="popup">
                    <div class="grid grid-col-3 grid-flow-row gap-4">
                        <div class="pt-4 pl-4">
                            <h2 class="font-semibold">Bookmark to...</h2>
                        </div>

                        <hr style="border-color:black;">

                        <div>
                            <a class="close" href="#popup1">&times;</a>
                            <div class="checkbox2 mb-2">
                                <input type="checkbox" id="itemA">
                                <label for="itemA" class="font-semibold" style="font-size: 16px;">Lorem Ipsum
                                    Dolor</label>
                            </div>
                            <div class="checkbox2">
                                <input type="checkbox" id="itemB">
                                <label for="itemB" class="font-semibold" style="font-size: 16px;">Lorem Ipsum
                                    Dolor</label>
                            </div>
                        </div>

                        <hr style="border-color:black;">

                        <div class="pb-6">
                            <h2 class="font-semibold" style="font-size: 16px; margin-left: 1.5rem;">Bookmark List Name
                            </h2>
                            <div class="ml-6">
                                <input type="text" name="bookmark-name" id="bookmark-name"
                                    class="px-2 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                                    style="width: 90%; text-align:left; font-size: 14px; height: 2rem; border-color:black;"
                                    placeholder="Enter Name" required></input>
                                <p id="count-result" class="text-sm float-right pr-8">0/50</p>

                                <script>
                                    let myText = document.getElementById("bookmark-name");
                                    myText.addEventListener("input", () => {
                                        let count = (myText.value).length;
                                        document.getElementById("count-result").textContent = `${count}/50`;
                                    });
                                </script>
                            </div>

                            <h2 class="font-semibold pt-6" style="font-size: 16px; margin-left: 1.5rem;">Description
                            </h2>
                            <div class="ml-6">
                                <textarea type="text" name="bookmark-desc" id="bookmark-desc"
                                    class="px-2 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                                    style="width: 90%; text-align:left; font-size: 14px; height: 8rem; border-color: black;"
                                    placeholder="Enter Description" required></textarea>
                            </div>

                            <p id="count-result2" class="text-sm float-right pr-8">0/250</p>

                            <script>
                                let myText2 = document.getElementById("bookmark-desc");
                                myText2.addEventListener("input", () => {
                                    let count2 = (myText2.value).length;
                                    document.getElementById("count-result2").textContent = `${count2}/250`;
                                });
                            </script>

                            <div class="pt-8 pb-8 float-right mr-4">
                                <button class="hovertext font-semibold absolute"
                                    style="outline: none; box-shadow: 0 0;" type="submit">
                                    Create
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </x-slot>
</x-guest-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NALL, Inc.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Open_Sans', sans-serif;
            }
        </style>
    </head>

    <body class="bg-white">

        <header class="sticky top-0 z-50 text-white py-6" style="background-color:#2E052D;">
                <div class="flex items-center justify-between mx-auto">
                    <div class="pl-40">
                        <img src="/img/logo.png" alt="" class="h-12 w-12"></img>
                    </div>
                    <div class="authhome">
                        <nav>
                            <a href="/auth-user-home">Home</a>
                            <a href="/auth-user-search">Search</a>
                            <a href="/auth-view-req">View Request</a>
                            <a href="/auth-user-bookmark">Bookmarks</a>
                            <a href="/auth-user-aboutus">About Us</a>
                            <a href="/auth-user-contactus">Contact Us</a>
                            <div class="animation start-search"></div>
                        </nav>
                    </div>

                    <div class="dropdown inline-block relative pr-20">
                        <button class="text-white font-semibold py-2 px-6 rounded inline-flex items-center">
                            <span class="mr-1">My Account</span>
                            <div class="pl-4">
                                <img src="/img/dropdown.png" alt="" class="h-4 w-4"></img>
                            </div>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <div class="border border-solid border-gray-500 shadow-lg rounded bg-gray-200 py-6">
                                <li class="">
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="/auth-user-settings">
                                    <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>
                                    Settings & Privacy</a>
                                </li>
                                <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="/">
                                <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>    
                                Sign Out</a></li>
                        </div>
                        </ul>
                    </div>
                    
                </div>
        </header>
        <!-- A gateway chuchu landing page  -->
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 py-20 px-20">
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
                                    <input type="number" min="1800" max="2022" style="width: 5.5rem; height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
                                    <span class=" mx-2 text-gray-700">-</span>
                                    <input type="number" min="1800" max="2022" style="width: 5.5rem; height: 2.5rem; border: 2px solid #E2E6EB; border-radius: 5px; outline: none; box-shadow: 0 0;">
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
                            <div class="ml-4 text-3xl font-normal text-center pb-6">A Gateway to Open Access Legal Resources in the Philippines</div>
                            <form>   
                                <label for="searchbar" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-900" style="color:#737373;">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-10 pointer-events-none">
                                        <svg aria-hidden="true" class="w-8 h-8 text-gray-900 dark:text-gray-500" fill="none" stroke="#737373" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" style="color:#737373;"></path></svg>
                                    </div>
                                    <input type="search" id="searchbar" class="block p-4 pl-20 w-full h-16 text-md bg-gray-50 rounded-lg focus:border-none" placeholder="Search for Legal Resources..." style="color:black;">
                                </div>
                            </form>
                            <div class="relative mt-4">
                                <div class="text-sm font-bold text-left relative float-left mt-1">Sort By: </div>
                                <button class="sorting font-light ml-2">Title <i class="fa fa-sort" style="color: #797979;"></i></button>
                                <button class="sorting font-light ml-2">Pages <i class="fa fa-sort" style="color: #797979;"></i></button>
                                <button class="sorting font-light ml-2">Year <i class="fa fa-sort" style="color: #797979;"></i></button>
                            </div>

                            <script>
                                let btnFirstBookmarked = document.querySelector('#bookmark1');
                                let btnSecondBookmarked = document.querySelector('bookmark2');

                                btnFirstBookmarked.addEventListener('click', () => btnFirstBookmarked.style.backgroundColor = '#2E052D')
                                btnSecondBookmarked.addEventListener('click', () => btnSecondBookmarked.style.backgroundColor = '#2E052D')
                            </script>
                            
                            
                            <div id="bookmark1" for="bookmarked">
                                <a href="#popup1" active><button class="absolute" style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img src="/img/outlineribbon.png" alt="" class="w-12"></img></button></a>
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
                                        <label style="font-weight: bold;" for="title"> Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="abstract"> Abstract: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="author"> Author: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="journal-title"> Journal Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="url"> URL: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="doi"> DOI: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="pub-type"> Publication Type: </label>
                                    </div>
                                    <div class="mt-16 pt-24 ml-24">
                                        <label style="font-weight: bold;" for="page"> Page: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="date-pub"> Date Published: </label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div id="bookmark2" for="bookmarked2">
                                <a href="#popup1" active><button class="absolute" style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img src="/img/outlineribbon.png" alt="" class="w-12"></img></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <a href="#videocard">
                                <div class="grid grid-cols-3 gap-40">
                                    <div class="pl-16 py-6">                              
                                        <label style="font-weight: bold;" for="title"> Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="description"> Description: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="author"> Author/Instructor: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="url"> URL: </label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div id="bookmark2" for="bookmarked2">
                                <a href="#popup1" active><button class="absolute" style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img src="/img/outlineribbon.png" alt="" class="w-12"></img></button></a>
                            </div>
                            <div class="rounded-md mb-5 mt-12" style="border: 2px solid #BEC1C5;">
                                <a href="#audiocard">
                                <div class="grid grid-cols-3 gap-40">
                                    <div class="pl-16 py-6">                              
                                        <label style="font-weight: bold;" for="title"> Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="description"> Description: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="author"> Author/Instructor: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="url"> URL: </label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div id="bookmark1" for="bookmarked">
                                <a href="#popup1" active><button class="absolute" style="margin-left: 65rem; margin-top: 2rem; outline: none; box-shadow: 0 0;"><img src="/img/outlineribbon.png" alt="" class="w-12"></img></button></a>
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
                                        <label style="font-weight: bold;" for="title"> Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="abstract"> Abstract: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="author"> Author: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="journal-title"> Journal Title: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="url"> URL: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="doi"> DOI: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="pub-type"> Publication Type: </label>
                                    </div>
                                    <div class="mt-16 pt-24 ml-24">
                                        <label style="font-weight: bold;" for="page"> Page: </label>
                                        <br>
                                        <label style="font-weight: bold;" for="date-pub"> Date Published: </label>
                                    </div>
                                </div>
                                </a>
                            </div>
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
                                                    <label for="item1" class="font-semibold" style="font-size: 16px;">Lorem Ipsum Dolor</label>
                                                </div>
                                                <div class="checkbox2">
                                                    <input type="checkbox" id="item2">
                                                    <label for="item2" class="font-semibold" style="font-size: 16px;">Lorem Ipsum Dolor</label>
                                                </div>
                                        </div>

                                        <hr style="border-color:black;">

                                        <div class="pb-6">
                                            <a class="plus" style="margin-left: 1.3rem; top: 9.2rem;" href="#popup2">&times;</a>
                                            <h2 class="font-semibold" style="font-size: 16px; margin-left: 3.5rem;">Create New Bookmark List</h2>
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
                                                    <label for="itemA" class="font-semibold" style="font-size: 16px;">Lorem Ipsum Dolor</label>
                                                </div>
                                                <div class="checkbox2">
                                                    <input type="checkbox" id="itemB">
                                                    <label for="itemB" class="font-semibold" style="font-size: 16px;">Lorem Ipsum Dolor</label>
                                                </div>
                                        </div>

                                        <hr style="border-color:black;">

                                        <div class="pb-6">
                                            <h2 class="font-semibold" style="font-size: 16px; margin-left: 1.5rem;">Bookmark List Name</h2>
                                            <div class="ml-6">
                                                <input type="text" name="bookmark-name" id="bookmark-name" class="px-2 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300" style="width: 90%; text-align:left; font-size: 14px; height: 2rem; border-color:black;" placeholder="Enter Name" required></input>
                                                <p id="count-result" class="text-sm float-right pr-8">0/50</p>

                                                <script>
                                                    let myText = document.getElementById("bookmark-name");
                                                    myText.addEventListener("input", () => {
                                                        let count = (myText.value).length;
                                                        document.getElementById("count-result").textContent = `${count}/50`;
                                                    });
                                                </script>
                                            </div>

                                            <h2 class="font-semibold pt-6" style="font-size: 16px; margin-left: 1.5rem;">Description</h2>
                                            <div class="ml-6">
                                                <textarea type="text" name="bookmark-desc" id="bookmark-desc" class="px-2 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300" style="width: 90%; text-align:left; font-size: 14px; height: 8rem; border-color: black;" placeholder="Enter Description" required></textarea>
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
                                                <button class="hovertext font-semibold absolute" style="outline: none; box-shadow: 0 0;" type="submit">
                                                    Create
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            
        <footer class="bg-gray-100 text-center lg:text-left" style="background-color:#2E052D; color:white">
        <div class="mx-auto px-0 w-full pl-24 pr-20">
            <div class="grid pt-20 pb-20 lg:grid-cols-4 md:grid-cols-4">
            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Network of Academic Law Librarians, Inc.</h5>

                <ul class="list-none">
                    <li>
                        <div class="text-gray-200">Address 1: </div>
                    </li>
                    <li>
                        <div class="text-gray-200">Address 2: </div>
                    </li>
                    <li>
                        <div class="text-gray-200">City: </div>
                    </li>
                    <li>
                        <div class="text-gray-200">ZipCode, Philippines</div>
                    </li>
                    <li>
                        <a href="#!" class="hovertext text-gray-200">Telephone Number</a>
                    </li>
                    <li>
                        <a href="mailto: nall.phil2018@gmail.com" class="hovertext text-gray-200">nall.phil2018@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Links</h5>

                <ul class="list-none">
                    <li>
                        <a href="auth-user-aboutus" class="hovertext text-gray-200">About Us</a>
                    </li>
                    <li>
                        <a href="auth-user-contactus" class="hovertext text-gray-200">Contact Us</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">Legal Education Board</a>
                    </li>

                    <h5 class="uppercase font-bold mt-4 mb-4 text-gray-200">My Account</h5>
                    <li>
                        <a href="#!" class="hovertext text-gray-200">Settings & Privacy</a>
                    </li>
                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Contact Us</h5>

                <ul class="list-none mb-0">
                <li>
                    NALL FB Page: <a href="https://www.facebook.com/nallph.org" class="hovertext text-gray-200">@nallph.org</a>
                </li>
                <li>
                    NALL E-mail Address: <a href="mailto: nall.phil2018@gmail.com" class="hovertext text-gray-200">nall.phil2018@gmail.com</a>
                </li>
                <li>
                    LEB FB Page: <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">@legal.education.board</a>
                </li>
                <li>
                    LEB Website: <a href="https://leb.gov.ph/" class="hovertext text-gray-200">https://leb.gov.ph/</a>
                </li>
                <li>
                    LEB Email Address: <a href="mailto: contact@leb.gov.ph" class="hovertext text-gray-200">contact@leb.gov.ph</a>
                </li>
                </ul>
            </div>

            <div class="text-left mb-6">

                <ul class="list-none mb-0">
                <li>
                    <div class="text-gray-200">Copyright © 2022</div>
                </li>
                <li>
                    <div class="text-gray-200">A Gateway to Open Access Legal Resources in the Philippines,</div>
                </li>
                <li>
                    <div class="text-gray-200">Network of Academic Law Librarians, Inc.,</div>
                </li>
                <li>
                    <div class="text-gray-200">All rights reserved.</div>
                </li>
                </ul>

                <h5 class="uppercase font-bold mb-4 text-gray-200 mt-4">Socials</h5>
                <div class="flex">
                    <a href="#!"><img src="/img/facebook.png" alt="" class="h-12 w-12 hover:bg-pink-500"></img></a>
                    <a href="#!"><img src="/img/gmail.png" alt="" class="h-12 w-12 hover:bg-pink-500"></img></a>
                </div>
            </div>
            </div>
        </div>
    </footer>
    </body>
</html>

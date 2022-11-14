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
                            <a href="#">View Request</a>
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
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="#">
                                    <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>
                                    Settings & Privacy</a>
                                </li>
                                <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 px-6 block whitespace-no-wrap" href="#">
                                <svg class="inline-block" height="40" width="40"><circle cx="20" cy="20" r="10" fill="gray" /></svg>    
                                Sign Out</a></li>
                        </div>
                        </ul>
                    </div>
                    
                </div>
        </header>

        <!-- A gateway chuchu landing page  -->
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-400 py-24 px-20">
                <div class="text-left col-span-2">
                    <div class="text-justify mr-16 text-lg ml-12">
                        <form>
                            <div class="block">
                                <span class="text-black font-semibold">Category</span>
                                <div class="mt-2 mb-4 ml-2">
                                        <div>
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5 default:ring-0">
                                                <span class="ml-2 font-light">Title</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="author">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="author">
                                                <span class="ml-2 font-light">Author</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="institution">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="institution">
                                                <span class="ml-2 font-light">Institution</span>
                                            </label>
                                        </div>
                                </div>
                                <span class="text-black font-semibold">Filter</span>
                                <div class="mt-2 mb-4 ml-2">
                                        <div>
                                            <label class="inline-flex items-center" for="dissertation">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="dissertation">
                                                <span class="ml-2 font-light">Dissertation</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="journal">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="journal">
                                                <span class="ml-2 font-light">Journal</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="book">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="book">
                                                <span class="ml-2 font-light">Book</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="proceedings">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="proceedings">
                                                <span class="ml-2 font-light">Proceedings</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="readings">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="readings">
                                                <span class="ml-2 font-light">Readings</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="research">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="research">
                                                <span class="ml-2 font-light">Research Project</span>
                                            </label>
                                        </div>
                                </div>
                                <span class="text-black font-semibold">Type</span>
                                <div class="mt-2 mb-4 ml-2">
                                        <div>
                                            <label class="inline-flex items-center" for="printed">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="research">
                                                <span class="ml-2 font-light">Printed</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center" for="video">
                                                <input type="checkbox" class="form-checkbox rounded h-5 w-5" id="video">
                                                <span class="ml-2 font-light">Video</span>
                                            </label>
                                        </div>
                                </div>
                                <span class="text-black font-semibold">Year</span>
                                <div class="ml-2 mt-2">
                                    <div date-rangepicker class="flex items-center text-black" format="yyyy" datepicker-buttons>
                                        <div class="relative">
                                            <input name="start" type="text" class="bg-gray-50 border border-gray-400 text-gray-900 sm:text-sm rounded-md focus:ring-pink-500 focus:border-pink-500 block w-20 h-8 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-700 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="">
                                        </div>
                                        <span class="mx-3 text-gray-700">-</span>
                                        <div class="relative">
                                            <input name="end" type="text" class="bg-gray-50 border border-gray-400 text-gray-900 sm:text-sm rounded-md focus:ring-pink-500 focus:border-pink-500 block w-20 h-8 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-500 dark:focus:border-pink-500" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-2 pt-4 text-md">
                                    <button class="btn3">
                                        Apply Filters
                                    </button>
                                </div>
                                <div class="pl-2 pt-2 text-md">
                                    <button class="btn3">
                                        Reset Filters
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                    <div class="text-left col-span-8">
                        <div class="text-justify ml-16 text-lg grid mr-12">
                            <div class="ml-4 text-3xl font-normal text-center pb-6">A Gateway to Open Access Legal Resources in the Philippines</div>
                            <form>   
                                <label for="searchbar" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-900" style="color: #737373">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-10 pointer-events-none">
                                        <svg aria-hidden="true" class="w-8 h-8 text-gray-900 dark:text-gray-500" fill="none" stroke="#737373" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    </div>
                                    <input type="search" id="searchbar" class="block p-4 pl-20 w-full h-16 text-md bg-gray-50 rounded-lg focus:border-none" placeholder="Search for Legal Resources..." style="color:black;">
                                </div>
                            </form>
                            <div class="relative mt-4">
                                <div class="text-sm font-bold text-left relative float-left">Sort By: </div>
                                <button class="sorting font-light ml-2">Title <i class="fa fa-sort" style="color: #797979;"></i></button>
                                <button class="sorting font-light ml-2">Pages <i class="fa fa-sort" style="color: #797979;"></i></button>
                                <button class="sorting font-light ml-2">Year <i class="fa fa-sort" style="color: #797979;"></i></button>
                            </div>
                        </div>
                    </div>

        </div>

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

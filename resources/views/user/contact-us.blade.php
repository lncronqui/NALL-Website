<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NALL, Inc.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

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
                    <div class="pl-24">
                    <ul class="flex space-x-20 items-center list-none text-lg">
                        <li class="ml-4">
                            <div class="hovertext"><a class="no-underline text-gray font-regular" href="/">Home</a></div>
                        </li>
                        <li class="ml-4">
                            <div class="hovertext"><a class="no-underline text-gray font-regular" href="#">About Us</a></div>
                        </li>
                        <li class="ml-4">
                            <div class="hovertext"><a class="no-underline text-gray font-regular" style="color:#FF29FB;" href="#">Contact Us</a></div>
                        </li>
                    </ul>
                    </div>
                    <div class="space-x-5 top-0 right-0 pr-40">
                        <button class="btn2">Log In</button>
                        <button class="btn2">Sign Up</button>
                    </div>
                </div>
        </header>

        <!-- Contact Us  -->
        <div class="imgc">
            <img src="/img/contact-us.png" alt="" class="mx-auto w-full"></img>
        </div>

        <h1 class="pt-20 text-5xl font-extrabold font-inter text-center" style="color:#2E052D;">Contact Us</h1>

        <div class="flex justify-center container mx-auto my-auto w-screen flex-col pr-40 pl-40 pt-20 pb-20">
        <form action="#">
                <!-- name input -->
                <div class="">
                        <label class="mb-2 text-lg font-bold" style="color:#2E052D;">Name*</label>
                        <label class="text-xs" style="color:#704f6f;">Required</label>
                </div>
                <div class="items-center rounded-md mb-6">
                        <input type="text" name="name" id="name" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500 border-solid border-2 border-slate-300" placeholder="Enter your name" required>
                </div>

                <!-- email input -->
                <div class="">
                    <label class="mb-2 text-lg font-bold " style="color:#2E052D;">Email*</label>
                    <label class="text-xs" style="color:#704f6f;">Required</label>
                </div>
                <div class="w-full md:w-2/4  lg:w-1/2 flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500 border-solid border-2 border-slate-300" placeholder="Enter your email" required>
                </div>

                <!-- subject input -->
                <div class="">
                    <label class="mb-2 text-lg font-bold" style="color:#2E052D;">Subject*</label>
                    <label class="text-xs" style="color:#704f6f;">Required</label>
                </div>
                <div class="w-full md:w-2/4  lg:w-1/2 flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <input type="text" name="subject" id="subject" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-slate-300" placeholder="Type the subject" required>
                </div>

                <!-- message input -->
                <div class="">
                    <label class="mb-2 text-lg font-bold" style="color:#2E052D;">Message*</label>
                    <label class="text-xs" style="color:#704f6f;">Required</label>
                </div>
                <div class="w-full md:w-2/4  lg:w-1/2 flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <textarea name="message" id="message" class="w-full py-4  bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-slate-300" placeholder="Type your message here..." required></textarea>
                </div>

                <!-- button -->
                <div class="w-full md:w-2/4  lg:w-1/2 flex flex-col items-center ">
                        <button class="btn3">
                            Submit
                        </button>
                </div>
        </form>
        </div>


        <footer class="bg-gray-100 text-center lg:text-left" style="background-color:#2E052D; color:white">
        <div class="mx-auto px-0 w-full pl-24 pr-20">
            <div class="grid pt-20 pb-20 lg:grid-cols-4 md:grid-cols-4">
            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Network of Academic Law Librarians, Inc.</h5>

                <ul class="list-none mb-0">
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

                <ul class="list-none mb-0">
                <li>
                    <a href="#!" class="hovertext text-gray-200">About Us</a>
                </li>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Contact Us</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">Legal Education Board</a>
                </li>

                <h5 class="uppercase font-bold mt-4 mb-4 text-gray-200">My Account</h5>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Sign In</a>
                </li>
                <li>
                    <a href="#!" class="hovertext text-gray-200">Sign Up</a>
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

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

                    <div class="authhome">
                        <nav>
                            <a href="/auth-user-home">Home</a>
                            <a href="/auth-user-search">Search</a>
                            <a href="/auth-view-req">View Request</a>
                            <a href="/auth-user-bookmark">Bookmarks</a>
                            <a href="/auth-user-aboutus">About Us</a>
                            <a href="/auth-user-contactus">Contact Us</a>
                            <div class="animation"></div>
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
                        <div class="border  border-solid border-gray-500 shadow-lg rounded bg-gray-200 py-6">
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

        <!-- Bookmarking page  -->
        <!--L-side-->
        <div class="flex pt-16 pr-10 pb-20">
            <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
                <span class="dot absolute ml-12"></span><h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
                <span class="dot absolute ml-12" style="margin-top:40.5rem;"></span><h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42rem;"><a href="/">Sign Out</a></h5>
            </div>

        <!--R-side-->
            <div class="flex-auto w-64 ...">
                <div class="pl-16 pr-32 mb-5 py-6">
                    <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                    <table style="width:100%; height:25rem; border-collapse: collapse;">
                        <tbody style="border-top: 1pt solid #949494; border-bottom: 1pt solid #949494;">
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Name</td>
                                <td for="name">Lorem ipsum dolor sit amet</td>
                                <td><a href="/auth-users-settings-name" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td style="width:30%;" class="pl-8">Email</td>
                                <td for="email">Loremipsum@dolor.sit.amet</td>
                                <td><a href="/auth-users-settings-email" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Institution</td>
                                <td for="institution">Lorem ipsum dolor sit amet</td>
                                <td><a href="/auth-users-settings-institution" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #949494;">
                                <td class="pl-8">Password</td>
                                <td for="password">***********</td>
                                <td><a href="/auth-users-settings-password" style="color:#863084;">Edit</a></td>
                            </tr>
                            <tr></tr>
                                <td class="pl-8">Use two-factor authentication</td>
                                <td></td>
                                <td><a href="" style="color:#863084;">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <x-auth-user-footer></x-auth-user-footer>
    </body>
</html>
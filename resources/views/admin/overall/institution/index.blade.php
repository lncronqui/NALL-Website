<x-admin.layout>
<link href="/css/institution.css" rel="stylesheet" type="text/css"/>
    <div class="hello" id="blur">
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                    const myElement = document.getElementById("institution-list");
                    myElement.style.color = "#2E052D";
                    myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">Institution List</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <div class="upload-btn-wrapper">
                            <button class="btn" style="height: 3rem; width: 10rem; border-radius: 10px; pointer-events: auto;">Import</button>
                            <input type="file" name="myfile" />
                        </div>        
                        <button class="btn" style="width: 11rem; border-radius: 10px;"><a class="no-underline"
                                href="{{ route('admin.overall.institutions.create') }}">+Add Institution</a></button>
                    </div>

                    <!-- display if submission is success or error-->
                        @if(session('success'))
                            <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                                {{ session('success') }}
                            </div>
                        @endif

                    <div class="institution">
                        <div class="tbl-header mt-16">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <tr>
                                        <th>Institution Name</th>
                                        <th>Function</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                        <tr>
                                            <!-- <td>{{ auth()->user()->institution->name }}</td> -->
                                            <td>Institution Name</td>
                                            <td><a class="function-hover" href="#" onclick="toggle2()">Delete</a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup2">
            <form>
                <h1 class="text-center text-lg font-bold">Institution Deletion</h1>
                <br>
                <p class="text-center">Are you sure that you want to delete this institution?</p>
                <br>
                <div class="text-center">
                    <button class="btn4" onclick="" style="width: 6em;">Yes</button>
                    <button class="btn4" onclick="toggle2()" style="width: 6em;">No</button>
                </div>
            </form>
    </div>
    <script>
            function toggle2() {
                var blur=document.getElementById('blur');
                blur.classList.toggle('active');
                var popup = document.getElementById('popup2');
                popup.classList.toggle('active');
            }
    </script>
    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();

        function printedFunction() {
            var resourceFormat = document.getElementById("resourceFormat");
            var selectedValue = resourceFormat.options[resourceFormat.selectedIndex].value;

            if (selectedValue == "printed") {
                document.getElementById("printed-table").style.display = 'block';
                document.getElementById("video-table").style.display = 'none';
                document.getElementById("elecresource-table").style.display = 'none';
                document.getElementById("audio-table").style.display = 'none';
            } else if (selectedValue == "video") {
                document.getElementById("video-table").style.display = 'block';
                document.getElementById("printed-table").style.display = 'none';
                document.getElementById("elecresource-table").style.display = 'none';
                document.getElementById("audio-table").style.display = 'none';
            } else if (selectedValue == "elec-resource") {
                document.getElementById("elecresource-table").style.display = 'block';
                document.getElementById("video-table").style.display = 'none';
                document.getElementById("printed-table").style.display = 'none';
                document.getElementById("audio-table").style.display = 'none';
            } else if (selectedValue == "audio") {
                document.getElementById("audio-table").style.display = 'block';
                document.getElementById("printed-table").style.display = 'none';
                document.getElementById("video-table").style.display = 'none';
                document.getElementById("elecresource-table").style.display = 'none';
            } else {
                document.getElementById("printed-table").style.display = 'none';
            }
        }
    </script>
</x-admin.layout>

<x-admin.layout>
<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<div class="hello" id="blur">
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                        const myElement = document.getElementById("view-repository");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">View Repository</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar search-length">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                        <button class="btn" style="height: 3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="#">Import</a></button>
                        <button class="btn" style="width: 9rem; border-radius: 10px;"><a class="no-underline" href="{{ route('admin.repository.create') }}">+Add Article</a></button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                            <div class="select ml-2">
                            <select name="format" id="editFormat" onChange="siteRedirect()">
                                    <option selected disabled>Choose Type</option>
                                    <option value="">Printed</option>
                                    <option value="">Electronic Resource</option>
                                    <option value="">Video</option>
                                    <option value="">Audio</option>
                                </select>
                            </div>
                    </div>

                    <!-- display if submission is success or error-->
                    @if (session('success'))
                        <div class="font-bold text-left pb-2"><a class="" style="color:green;">
                                {{ session('success') }}
                        </div>
                    @endif

                    <div class="print">
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Institution</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Subject</th>
                                        <th>Pages</th>
                                        <th>Access Type</th>
                                        <th>Publishing Date</th>
                                        <th>Encoded By</th>
                                        <th>
                                            @if (auth()->user()->role_id == 3)
                                                Approved by
                                            @else
                                                Status
                                            @endif
                                        </th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    @foreach ($mediaResources as $mediaResource)
                                        <tr>
                                            <td>{{ $mediaResource->institution->name }}</td>
                                            <td>{{ $mediaResource->title }}</td>
                                            <td>
                                                @foreach ($mediaResource->authors as $author)
                                                    @if ($loop->last)
                                                        {{ $author->name }}
                                                    @else
                                                        {{ $author->name }},
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($mediaResource->subjects as $subject)
                                                    @if ($loop->last)
                                                        {{ $subject->name }}
                                                    @else
                                                        {{ $subject->name }},
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $mediaResource->page }}</td>
                                            <td>
                                                @if ($mediaResource->access_type->public)
                                                    Public
                                                @else
                                                    Private
                                                @endif
                                            </td>
                                            <td>{{ $mediaResource->date }}</td>
                                            <td>{{ $mediaResource->encoded_by }}</td>
                                            <td>
                                                @if (auth()->user()->role_id == 3)
                                                    {{ $mediaResource->approved_by }}
                                                @else
                                                    @if (isset($mediaResource->approved_by))
                                                        Released
                                                    @else
                                                        To approve
                                                    @endif
                                                @endif
                                            </td>
                                            <td><a class="function-hover" href="#" onclick="toggle2()">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>
            <!-- delete popup -->
            <div id="popup2">
                    <form>
                        <h1 class="text-center text-lg font-bold">Repository Deletion</h1>
                        <br>
                        <p class="text-center">Are you sure that you want to delete this repository?</p>
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
    function siteRedirect() {
        var selectbox = document.getElementById("editFormat");
        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
        window.location.href = selectedValue;
    }</script> 

</x-admin.layout>

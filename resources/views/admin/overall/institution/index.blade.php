<div class="hello" id="blur">
<x-admin.layout>
    <link href="/css/institution.css" rel="stylesheet" type="text/css" />
        <div
            class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

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

                    <div class="flex flex-row gap-x-6">
                        <form action="{{ route('admin.overall.institutions.index') }}" method="get">
                            <div class="search-bar search-l">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" name="search">
                            </div>
                        </form>
                        <button class="btn" style="height: 3.2rem; width: 11.7rem; border-radius: 10px;"><a class="no-underline"
                                href="{{ route('admin.overall.institutions.create') }}">+Add Institution</a></button>
                    </div>

                    <!-- display if submission is success or error-->
                    @if (session('success'))
                        <div class="font-bold text-left pb-2" style="color:green;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="institution mt-16">
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <tr>
                                        <th>Institution Name</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    @foreach ($institutions as $institution)
                                        <tr>
                                            <td>{{ $institution->name }}</td>
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

    <script>
        $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({
                'padding-right': scrollWidth
            });
        }).resize();
    </script>
</x-admin.layout>

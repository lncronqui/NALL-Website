<x-admin.layout>
    <div class="hello" id="blur">
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                    const myElement = document.getElementById("access-request");
                    myElement.style.color = "#2E052D";
                    myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">

                    <h1 class="text-3xl font-extrabold mb-6 ml-2">Access Requests</h1>

                    <div class="flex flex-row gap-x-2">
                        <div class="search-bar" style="width: 100%;">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="">
                        </div>
                    </div>

                    @include('admin.request.access-table')
                </div>
            </div>

        </div>
    </div>

    <div id="popup2">
            <form>
                <h1 class="text-center text-lg font-bold">Request Deletion</h1>
                <br>
                <p class="text-center">Are you sure that you want to delete this request?</p>
                <br>
                <div class="text-center">
                    <button class="btn4" onclick="" style="width: 6em;">Yes</button>
                    <button class="btn4" onclick="toggle2()" style="width: 6em;">No</button>
                </div>
            </form>
    </div>
    <script>
            function toggle2() {
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
    </script>
</x-admin.layout>

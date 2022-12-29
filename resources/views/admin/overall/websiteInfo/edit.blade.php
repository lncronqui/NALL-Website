<x-admin.layout>
        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                        const myElement = document.getElementById("aboutus-edit");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="border-b-2 border-gray-300 ml-16 mt-5 mr-16">
                    <h1 class="text-3xl font-extrabold mb-3 ml-2 text-center">Editing of Details</h1>
                </div>
                <div class="ml-16 mt-3 mr-16 mb-10">
                    <h1 class="text-2xl mt-2 font-bold ml-2 text-center">Type </h1>
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                        <select name="format" id="editFormat" onchange="printedFunction()">
                                <option selected disabled>About Us/Contact Us Details</option>
                                <option value="aboutus">About Us</option>
                                <option value="contactus">Contact Us</option>
                        </select>
                    </div>
                </div>
                    <div id="edit-about-us">
                        @include('admin.overall.websiteInfo.edit-aboutus')
                    </div>
                    <div id="edit-contact-us">
                        @include('admin.overall.websiteInfo.edit-contactus')
                    </div>
                @if ($errors->any())
                    <div class="font-bold text-center pb-2" style="color:red;">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                    </div>
                @endif
                @if (session('success'))
                    <div class="font-bold text-center pb-2" style="color:green;">
                            {{ session('success') }}
                    </div>
                @endif
            </div>

        </div>

        <script>
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();

            function printedFunction() {
                var editFormat = document.getElementById("editFormat");
                var selectedValue = editFormat.options[editFormat.selectedIndex].value;

                if(selectedValue == "aboutus"){
                    document.getElementById("edit-about-us").style.display = 'block';
                    document.getElementById("edit-contact-us").style.display = 'none';
                }
                else if(selectedValue == "contactus"){
                    document.getElementById("edit-about-us").style.display = 'none';
                    document.getElementById("edit-contact-us").style.display = 'block';
                }
                else{
                    document.getElementById("edit-about-us").style.display = 'none';
                }
            }
        </script>
</x-admin.layout>

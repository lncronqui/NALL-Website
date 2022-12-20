<x-admin.layout>
<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
            <div class="border-b-2 border-gray-300 ml-16 mt-5 mr-16">
                <h1 class="text-3xl font-extrabold mb-3 ml-2 text-center">Add Article</h1>
            </div>
            <div class="ml-16 mt-3 mr-16 mb-10">
                <a style="font-size:24px" class="fa" style="color: #C4C4C4;"
                    href="{{ route('admin.repository.index') }}">&#xf060;</a>
                <h1 class="text-2xl mt-2 font-bold ml-2 text-center" style="margin-top:-20px;">Type </h1>
                <div class="border-b-2 border-gray-300">
                    <div class="select2 mt-2 mb-4 ml-20 mr-24">
                        <select name="format" id="editFormat" onChange="siteRedirect()" >
                            <option selected disabled>Audio</option>
                            <option value="{{ route('admin.repository.create.elec') }}">Electronic Resource</option>
                            <option value="{{ route('admin.repository.create.printed') }}">Printed</option>
                            <option value="{{ route('admin.repository.create.video') }}">Video</option>
                        </select>
                    </div>
                </div>
<div class="audio">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="get" id="a-article-form">
                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="aud-title" style="color:#2E052D;">
                            Title:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 60px;" id="aud-title" type="text" name="title" required>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-acc"
                            style="color:#2E052D;">
                            Access Type:
                        </label>
                        <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3"
                            style="width:300px">
                            <option selected disabled></option>
                            <option value="0">Private</option>
                            <option value="1">Public</option>
                        </select>
                    </div>



                    <!--need to make on-click add new field-->
                    <div id="fields">
                        <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-author"
                                style="color:#2E052D;">
                                Author:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                                style="margin-left: 38px;" id="aud-author" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-author-email"
                                style="color:#2E052D;">
                                Author Email:
                            </label>
                            <input
                                class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                                style="margin-left: 27px;" id="aud-author-email" type="email"></input>

                            <button class="add-fields fa fa-plus-circle ml-2" style="font-size:48px; color: gray;">
                            </button>

                        </div>
                    </div>


                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="aud-abstract"
                            style="color:#2E052D;">
                            Abstract:
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 28px;" id="aud-abstract" type="text" required></textarea>
                    </div>


                    <!--need to make on-click add new field-->
                    <div id="field">
                        <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-subj"
                                style="color:#2E052D;">
                                Subjects:
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                                style="margin-left: 28px;" id="aud-subj" type="text" required>
                            <button class="add-field fa fa-plus-circle ml-2" style="font-size:48px; color: gray;">
                            </button>
                        </div>
                    </div>

                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="aud-url" style="color:#2E052D;">
                            URL:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 63px;" id="aud-url" type="text" required>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-doi"
                            style="color:#2E052D;">
                            DOI:
                        </label>
                        <input
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 27px;" id="aud-doi" type="text" required>
                    </div>



                    <div class="flex mb-5">
                        <label class="block text-gray-700 text-lg font-semibold" for="aud-inst" style="color:#2E052D;">
                            Institution:
                        </label>
                        <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3"
                            style="width:1100px; margin-left:12px;">
                            <option selected disabled></option>
                            @foreach ($institutions as $institution)
                                <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                            @endforeach
                        </select>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-page"
                            style="color:#2E052D;">
                            Page:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 38px;" id="aud-page" type="text" required>

                        <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-date"
                            style="color:#2E052D;">
                            Date Published:
                        </label>
                        <input
                            class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline"
                            style="margin-left: 27px;" id="aud-date" type="text" required>


                    </div>
            </div>

        </div>

        <!-- display if submission is success or error-->
        @if ($errors->any())
            <div class="font-bold text-center pb-2"><a class="" style="color:red;">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endisset


        <!-- buttons -->
        <div class="btn-pos mt-10">
            <button class="btn4" type="reset" style="width: 100px; background-color:#2E052D;">
                Clear
            </button>
            <button class="btn4" type="submit" style="width: 100px; background-color:#2E052D;">
                Submit
            </button>
        </div>
        </form>

</div>


<!-- Script Here for the Authors -->
<script type="text/x-templates" id="fields-templates">
                    <div class="flex mb-5" id="fields">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-author" style="color:#2E052D;">
                                Author:
                            </label>
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="aud-author" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-author-email" style="color:#2E052D;">
                                Author Email:
                            </label>
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                        focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-author-email" type="email"></input>

                    </script>
<script type="text/x-templates" id="field-template">
                <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="aud-subj" style="color:#2E052D;">
                                Subjects:
                            </label>
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="aud-subj" type="text" required></input>
                </div>
                    </script>
<script>
    $(function() {
        var FIELDS_TEMPLATE = $('#fields-templates').text();
        var FIELD_TEMPLATE = $('#field-template').text();
        var $form = $('#a-article-form');
        var $fields = $form.find('#fields');
        var $field = $form.find('#field');
        $form.on('click', '.add-fields', function() {
            $fields.prepend($(FIELDS_TEMPLATE));
        });
        $form.on('click', '.add-field', function() {
            $field.prepend($(FIELD_TEMPLATE));
        });

    });
</script>
<script>

function siteRedirect() {
    var selectbox = document.getElementById("editFormat");
    var selectedValue = selectbox.options[selectbox.selectedIndex].value;
    window.location.href = selectedValue;
}
</script> 
</div>
</div>
</div></div>
</x-admin.layout>
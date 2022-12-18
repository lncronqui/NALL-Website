<link href="/css/tableprinted.css" rel="stylesheet" type="text/css"/>
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<div class="video">
    <div class="ml-20 mr-20 mt-6 mb-6">
        <div class="border-b-2 border-gray-300">
            <div class="ml-16 mr-16">
                <form method="get" id="v-article-form">
                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="video-title" style="color:#2E052D;">
                                Title:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 60px;" id="video-title" type="text" required></input>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="video-acc" style="color:#2E052D;">
                                Access Type:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:300px">
                                <option selected disabled></option>
                                <option value="#">Option 1</option>
                                <option value="#">Option 2</option>
                            </select>
                    </div>

                
                    <!--Authors: need to make on-click add new field-->
                    <div id="fields">
                        <div class="flex mb-5">
                                <label class="block text-gray-700 text-lg font-semibold" for="aud-author" style="color:#2E052D;">
                                    Author:
                                </label> 
                                <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                    focus:outline-none focus:shadow-outline" style="margin-left: 38px;" id="aud-author" type="text" required></input>

                                <label class="block text-gray-700 text-lg font-semibold ml-5" for="aud-author-email" style="color:#2E052D;">
                                    Author Email:
                                </label> 
                                <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                    focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-author-email" type="email" required></input>

                                <button class="add-fields fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"> </button>

                    </div>
                    </div>


                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="video-abstract" style="color:#2E052D;">
                                Abstract:
                            </label> 
                            <textarea class="shadow appearance-none border rounded w-full h-40 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="video-abstract" type="text" required></textarea>
                    </div>
 

                     <!--Subjects: need to make on-click add new field-->
                     <div id="field">
                        <div class="flex mb-5">
                                <label class="block text-gray-700 text-lg font-semibold" for="aud-subj" style="color:#2E052D;">
                                    Subjects:
                                </label> 
                                <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                    focus:outline-none focus:shadow-outline" style="margin-left: 28px;" id="aud-subj" type="text" required></input>
                        <button class="add-field fa fa-plus-circle ml-2" style="font-size:48px; color: gray;"> </button>
                        </div>
                    </div>

                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="video-url" style="color:#2E052D;">
                                URL:
                            </label> 
                            <input class="shadow appearance-none border rounded w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 63px;" id="video-url" type="text" required></input>                                              
                    </div>

                    <div class="flex mb-5">
                            <label class="block text-gray-700 text-lg font-semibold" for="video-inst" style="color:#2E052D;">
                                Institution:
                            </label> 
                            <select name="format" class="shadow appearance-none border rounded ml-5 h-12 py-2 px-3" style="width:1100px; margin-left:12px;">
                                        <option selected disabled></option>
                                        <option value="#">Option 1</option>
                                        <option value="#">Option 2</option>
                            </select>

                            <label class="block text-gray-700 text-lg font-semibold ml-5" for="video-date" style="color:#2E052D;">
                                Date Published:
                            </label> 
                            <input class="shadow appearance-none border rounded ml-5 w-full h-12 py-2 px-3 text-gray-700 bg-white bg-clip-padding 
                                                focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="video-date" type="text" required></input>


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
                          focus:outline-none focus:shadow-outline" style="margin-left: 27px;" id="aud-author-email" type="email" required></input>

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
        $(function () {
            var FIELDS_TEMPLATE = $('#fields-templates').text();
            var FIELD_TEMPLATE = $('#field-template').text();
            var $form = $('#v-article-form');
            var $fields = $form.find('#fields');
            var $field = $form.find('#field');   
            
            $form.on('click', '.add-fields', function () {
                $fields.prepend($(FIELDS_TEMPLATE));
                });
            $form.on('click', '.add-field', function () {
                $field.prepend($(FIELD_TEMPLATE));
                });

        });
    </script>
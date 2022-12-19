<x-guest-layout>
    <x-slot name="slot">
        <!-- View Article  -->
            <!--R-side-->
            <div class="flex-auto w-4/5 mt-10 mb-20 mx-48">
                <div class="pl-16 pr-24 mb-5 py-6">
                    <div class="ml-4 text-3xl font-bold text-left pb-4">Title: </div>
                    <hr class="pb-1" style="border-color: #949494;">
                </div>
                <!-- Printed -->
            @if ($media->resource_type->id==1)
                <div class="pl-20 pr-32 mb-5">      
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract: </label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="journal-title"> Subject: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="page"> Page: </label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">    
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published: </label>
                    </div>
                </div>
                <!-- Electronic Source -->
            @elseif ($media->resource_type->id==2)
                <div class="pl-20 pr-32 mb-5">      
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract:</label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="subject"> Subject: </label>
                    </div>    
                        <br>
                        <label style="font-size: 16px; font-weight: 500;" for="url"> URL: </label>
                    </div>    
                        <br>
                        <label style="font-size: 16px; font-weight: 500;" for="doi"> DOI: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="page"> Page: </label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">    
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published: </label>
                    </div>
                </div>
                <!-- Video -->
            @elseif ($media->resource_type->id==3)
                <div class="pl-20 pr-32 mb-5">      
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract:</label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="subject"> Subject: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">    
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published: </label>
                    </div>
                </div>
                <!-- Audio -->
            @elseif ($media->resource_type->id==4)
                <div class="pl-20 pr-32 mb-5">      
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract:</label>
                    </div>
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="journal-title"> Subject: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: </label>
                    </div>    
                        <br>
                    <div class="pl-4 py-1">    
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published: </label>
                    </div>
                </div>
            @endif

            </div>
        </div>


        
        </div>
    </x-slot>
</x-guest-layout>

<x-guest-layout>
    <x-slot name="slot">
        <!-- View Article  -->
        <!--R-side-->
        <div class="flex-auto w-4/5 mt-10 mx-48" style="margin-bottom: 20rem;">
            <a style="font-size:24px" class="fa absolute mr-10 mt-8" style="color: #C4C4C4;" href="{{ route('user.search.index') }}">&#xf060;</a>
            <div class="pl-16 pr-24 mb-5 py-6">
                <div class="ml-4 text-3xl font-bold text-left pb-4">Title: {{ $mediaResource->title }}</div>
                <hr class="pb-1" style="border-color: #949494;">
            </div>
            <!-- Printed -->
            @if ($mediaResource->resource_type->id == 1)
                <div class="pl-20 pr-32 mb-5">
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract:
                            {{ $mediaResource->abstract }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author">
                            Author:
                            @foreach ($mediaResource->authors as $author)
                                @if ($loop->last)
                                    {{ $author->name }}
                                @else
                                    {{ $author->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="subject"> Subject:
                            @foreach ($mediaResource->subjects as $subject)
                                @if ($loop->last)
                                    {{ $subject->name }}
                                @else
                                    {{ $subject->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type:
                            {{ $mediaResource->resource_type->name }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="page"> Page:
                            {{ $mediaResource->page }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published:
                            {{ date('M d, Y', strtotime($mediaResource->date)) }}</label>
                    </div>
                </div>
                <!-- Electronic Source -->
            @elseif ($mediaResource->resource_type->id == 2)
                <div class="pl-20 pr-32 mb-5">
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract:
                            {{ $mediaResource->abstract }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author:
                            @foreach ($mediaResource->authors as $author)
                                @if ($loop->last)
                                    {{ $author->name }}
                                @else
                                    {{ $author->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="subject"> Subject:
                            {{ $mediaResource->subject->name }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="url"> URL:
                            {{ $mediaResource->url }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="doi"> DOI:
                            {{ $mediaResource->doi }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type:
                            {{ $mediaResource->resource_type->name }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="page"> Page:
                            {{ $mediaResource->page }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published:
                            {{ date('M d, Y', strtotime($mediaResource->date)) }}</label>
                    </div>
                </div>
                <!-- Video -->
            @elseif ($mediaResource->resource_type->id == 3)
                <div class="pl-20 pr-32 mb-5">
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract: {{ $mediaResource->abstract }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: 
                            @foreach ($mediaResource->authors as $author)
                                @if ($loop->last)
                                    {{ $author->name }}
                                @else
                                    {{ $author->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="subject"> Subject: 
                            @foreach ($mediaResource->subjects as $subject)
                                @if ($loop->last)
                                    {{ $subject->name }}
                                @else
                                    {{ $subject->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: {{ $mediaResource->resource_type->name }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published:
                            {{ date('M d, Y', strtotime($mediaResource->date)) }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> URL: {{ $mediaResource->url }}</label>
                    </div>
                </div>
                <!-- Audio -->
            @elseif ($mediaResource->resource_type->id == 4)
                <div class="pl-20 pr-32 mb-5">
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="abstract"> Abstract: {{ $mediaResource->abstract }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="author"> Author: 
                            @foreach ($mediaResource->authors as $author)
                                @if ($loop->last)
                                    {{ $author->name }}
                                @else
                                    {{ $author->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="journal-title"> Subject: 
                            @foreach ($mediaResource->subjects as $subject)
                                @if ($loop->last)
                                    {{ $subject->name }}
                                @else
                                    {{ $subject->name }},
                                @endif
                            @endforeach
                        </label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> Publication Type: {{ $mediaResource->resource_type->name }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="date-pub"> Date Published:
                            {{ date('M d, Y', strtotime($mediaResource->date)) }}</label>
                    </div>
                    <br>
                    <div class="pl-4 py-1">
                        <label style="font-size: 16px; font-weight: 500;" for="pub-type"> URL: {{ $mediaResource->url }}</label>
                    </div>
                </div>
            @endif
        </div>
    </x-slot>
</x-guest-layout>

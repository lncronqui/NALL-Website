<x-guest-layout>
    <x-slot name="slot">
        <!-- Bookmarking page  -->
        <!--R-side-->
        <div class="flex-auto w-4/5 mt-c mb-20 mx-48">
            <div class="pl-16 pr-24 mb-5 py-6">
                <div class="ml-4 text-3xl font-semibold text-left pb-4">Bookmarks</div>
                <hr class="pb-1" style="border-color: #949494;">
            </div>
            @foreach ($user->bookmarks as $mediaResource)
                <div class="pl-20 pr-32 mb-5">
                    <a href="#{{ $loop->index }}">
                        <div id='B-set1' class="rounded-md border border-gray-300 mb-5">
                            <a href="{{ route('user.search.show', $mediaResource) }}">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="pl-10 pt-5 pb-5">
                                        <label style="font-weight: bold;"> Title:
                                            {{ $mediaResource->title }}
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> Abstract:
                                            {{ $mediaResource->abstract }}
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> Author:
                                            @foreach ($mediaResource->authors as $author)
                                                @if ($loop->last)
                                                    {{ $author->name }}
                                                @else
                                                    {{ $author->name }},
                                                @endif
                                            @endforeach
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> Subject:
                                            @foreach ($mediaResource->subjects as $subject)
                                                @if ($loop->last)
                                                    {{ $subject->name }}
                                                @else
                                                    {{ $subject->name }},
                                                @endif
                                            @endforeach
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> URL:
                                            {{ $mediaResource->url }}
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> DOI:
                                            {{ $mediaResource->doi }}
                                        </label>
                                        <br>
                                        <label style="font-weight: bold;"> Publication Type:
                                            {{ $mediaResource->resource_type->name }}
                                        </label>

                                    </div>
                                    <div class="mt-10 pt-24">
                                        @if ($mediaResource->page)
                                            <label style="font-weight: bold;"> Page:
                                                {{ $mediaResource->page }}
                                            </label>
                                            <br>
                                        @endif
                                        <label style="font-weight: bold;"> Date Published:
                                            {{ $mediaResource->date }}
                                        </label>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </a>
                </div>
                <div id="{{ $loop->index }}" class="overlay absolute">
                    <div class="card">
                        <div class="grid grid-col-2 grid-flow-row gap-4">
                        <a href="{{ route('user.search.show', $mediaResource) }}">
                            <div class="pt-8 pb-4 pl-8">
                                <h2 class="font-semibold" for="title">Title: {{ $mediaResource->title }}</h2>
                            </div>
                            <hr style="border-color:black;">
                            <div class="pt-6 pb-20 pl-8">
                                <a class="close" href="#">&times;</a>
                                <h2 class="font-semibold mb-2" for="abstract">Abstract: {{ $mediaResource->abstract }}
                                </h2>
                                <h2 class="font-semibold mb-2" for="institution">Institution:
                                    {{ $mediaResource->institution->name }}</h2>
                                <h2 class="font-semibold mb-2" for="subject">Subject:
                                    @foreach ($mediaResource->subjects as $subject)
                                        @if ($loop->last)
                                            {{ $subject->name }}
                                        @else
                                            {{ $subject->name }},
                                        @endif
                                    @endforeach
                                </h2>
                                @if ($mediaResource->url)
                                    <h2 class="font-semibold mb-2" for="url">URL: {{ $mediaResource->url }}</h2>
                                @endif
                                @if ($mediaResource->doi)
                                    <h2 class="font-semibold mb-2" for="doi">DOI: {{ $mediaResource->doi }}</h2>
                                @endif
                                <h2 class="font-semibold mb-2" for="pub_type">Publication Type:
                                    {{ $mediaResource->resource_type->name }}</h2>
                                @if ($mediaResource->page)
                                    <h2 class="font-semibold mb-2" for="pages">Number of Pages:
                                        {{ $mediaResource->page }}</h2>
                                @endif
                                <h2 class="font-semibold mb-2" for="publishing-date">Publishing Date:
                                    {{ $mediaResource->date }}</h2>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-slot>
</x-guest-layout>

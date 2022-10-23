<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
            <!-- Page Content -->
            <main>
                @if ($articles)
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Abstract</th>
                        <th>Date</th>
                        <th>DOI</th>
                        <th>Institution</th>
                        <th>Page</th>
                        <th>Publication Type</th>
                        <th>URL</th>
                        <th>Encoded By</th>
                        @if (auth()->user()->role->name == 'Overall Admin')
                            <th>Action</th>
                        @endif
                    </tr>
                    @foreach ($articles as $article)
                        <tr>
                            <th>{{ $article->id }}</th>
                            <th>{{ $article->title }}</th>
                            <th>{{ $article->abstract }}</th>
                            <th>{{ $article->date }}</th>
                            <th>{{ $article->doi }}</th>
                            <th>{{ $article->institution->name }}</th>
                            <th>{{ $article->page }}</th>
                            <th>{{ $article->pubType->name }}</th>
                            <th>{{ $article->url }}</th>
                            <th>{{ $article->encoder->name }}</th>
                            @if (auth()->user()->role->name == 'Overall Admin')
                                <th>
                                    <form action="{{ route('admin.articles.update', $article) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="user" value={{auth()->user()->id}}>
                                        <button type="submit" onclick="confirm('Approve this?');">Approve</button>
                                    </form>
                                </th>
                            @endif
                        </tr>
                    @endforeach
                </table>
                @endif

            </main>
        </div>
    </body>
</html>

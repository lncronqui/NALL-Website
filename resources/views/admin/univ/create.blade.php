<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.overall.article.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="abstract" placeholder="Abstract"><br>
        <input type="text" name="journal_title" placeholder="Journal Title"><br>
        <input type="date" name="date" placeholder="Date"><br>
        <input type="url" name="doi" placeholder="DOI"><br>
        <input type="number" name="page" placeholder="Page"><br>
        <select name="pub_type">
            @foreach ($pubTypes as $pubType)
                <option value="{{ $pubType->id }}">{{$pubType->name}}</option>
            @endforeach
        </select><br>
        <input type="url" name="url" placeholder="URL"><br>
        <input type="text" name="name[]" placeholder="Author Name"><br>
        <input type="email" name="email[]" placeholder="Author Email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

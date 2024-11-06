<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $playlist->name }}</title>
</head>
<body>
    <h1>{{ $playlist->name }}</h1>
    <p>{{ $playlist->description }}</p>
    
    <ul>
        @foreach($playlist->songs as $song)
            <li>{{ $song->title }} - {{ $song->artist }}</li>
        @endforeach
    </ul>
</body>
</html>

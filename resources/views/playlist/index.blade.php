<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Playlists</title>
</head>
<body>
    <h1>All Playlists</h1>
    
    @foreach ($playlists as $playlist)
        <div>
            <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->name }}</a>
        </div>
    @endforeach

</body>
</html>

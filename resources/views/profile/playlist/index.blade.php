<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/playlist.css') }}">

    <title>All Playlists</title>
</head>

<body>
    <h1>Your Playlists</h1>
    @if ($playlists->isEmpty())
        <p>No playlists found. <a href="{{ route('playlists.create') }}">Create one now</a>.</p>
    @else
        <ul>
            @foreach ($playlists as $playlist)
                <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->name }}</a>
            @endforeach
        </ul>
    @endif
    </h1>
</body>

</html>

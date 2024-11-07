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

    <!-- Display existing songs in the playlist -->
    <ul>
        @foreach($playlist->songs as $song)
            <li>{{ $song->title }} - {{ $song->artist }}</li>
        @endforeach
    </ul>

    <!-- Form to add a new song to the playlist -->
    <form action="{{ route('playlist.addSong', $playlist->id) }}" method="POST">
        @csrf
        <label for="song_id">Add Song to Playlist:</label>
        <select name="song_id" id="song_id">
            @foreach($songs as $song)
                <option value="{{ $song->id }}">{{ $song->title }} - {{ $song->artist }}</option>
            @endforeach
        </select>
        <button type="submit">Add Song</button>
    </form>
</body>
</html>

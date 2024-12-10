<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $playlist->name }}</title>
</head>
<body>
    <h1>{{ $playlist->name }}</h1>

    <!-- Display existing songs in the playlist -->
    <ul>
        @foreach($playlist->songs as $song)
            <li>{{ $song->title }} - {{ $song->artist }}</li>
        @endforeach
    </ul>

    @foreach($playlist->songs as $song)
        <div>
            <span>{{ $song->name }}</span>
            <form action="{{ route('playlists.removeSong', ['playlist' => $playlist->id, 'song' => $song->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this song?')">
                    Delete
                </button>
            </form>
        </div>
    @endforeach

    @section('content')
        <div class="playlist-details">
            <h1>{{ $playlist->name }}</h1>
            
            <div class="songs">
                @foreach ($playlist->songs as $song)
                    <div class="song">
                        <img src="{{ asset('storage/' . $song->cover_image) }}" alt="{{ $song->name }}">
                        <p>{{ $song->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection


    <!-- Form to add a new song to the playlist -->
    <form action="{{ route('playlists.addSong', $playlist->id) }}" method="POST">
        @csrf
        <label for="song_id">Add Song to Playlist:</label>
        <select name="song_id" id="song_id">
            @foreach($songs as $song)
                <option value="{{ $song->id }}">{{ $song->title }} - {{ $song->artist }}</option>
            @endforeach
        </select>
        <button type="submit">Add Song</button>
    </form>

    <form action="{{ route('playlists.index') }}" method="GET" style="margin-top: 20px;">
        <button type="submit" class="btn btn-primary">Save and Exit</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>

<!DOCTYPE html>
<html lang="en">

@section('content')
<div class="playlist-gallery">
    <div class="playlist-header">
        <h2>Playlist: {{ $playlist->name }}</h2>
        <button class="add-song-btn" onclick="showAddSong()">Add Song</button>
    </div>

    <div class="gallery">
        @foreach($songs as $song)
            <div class="song-item">
                <img src="{{ $song->cover_url }}" alt="{{ $song->title }}" class="song-cover">
                <div class="song-info">
                    <div class="song-title">{{ $song->title }}</div>
                    <div class="song-artist">{{ $song->artist }}</div>
                </div>
                <form action="{{ route('playlist.removeSong', $song->id) }}" method="POST" class="remove-song-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="remove-btn">Remove</button>
                </form>
            </div>
        @endforeach
    </div>

    <div class="playlist-controls">
        <button id="backBtn_songs" class="control-btn">←</button>
        <button id="nextBtn_songs" class="control-btn">→</button>
    </div>
</div>

<div class="add-song">
    <div class="modal-content">
        <h3>Add a Song</h3>
        <form action="{{ route('playlist.addSong', $playlist->id) }}" method="POST">
            @csrf
            <input type="text" name="song_title" placeholder="Song Title" required>
            <input type="text" name="song_artist" placeholder="Artist Name" required>
            <input type="text" name="song_cover" placeholder="Cover Image URL" required>
            <button type="submit">Add Song</button>
        </form>
        <button class="close-modal" onclick="closeAddSong()">Close</button>
    </div>
</div>

@endsection

</html>
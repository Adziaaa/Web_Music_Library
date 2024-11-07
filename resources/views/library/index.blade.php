@extends('layout.app')

@section('content')
<div class="library">
    <h1 class="library-title">Music Library</h1>

    <!-- Albums Section -->
    <div class="section">
        <h2 class="section-title">Albums</h2>
        <div class="albums-list">
            @foreach($albums as $album)
                <div class="albums-card">
                    <a href="{{ route('albums.show', $album->id) }}" class="albums-link">
                        <img src="{{ $album->cover_image }}" alt="{{ $album->title }} Cover Image" class="albums-cover">
                        <div class="albums-info">
                            <h3 class="albums-title">{{ $album->title }}</h3>
                            <p class="albums-artist">By {{ $album->artist->name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Songs Section -->
    <div class="section">
        <h2 class="section-title">Songs</h2>
        <div class="songs-list">
            @foreach($songs as $song)
                <div class="songs-card">
                    <a href="{{ route('songs.show', $song->id) }}" class="songs-link">{{ $song->title }}</a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Playlists Section -->
    <div class="section">
        <h2 class="section-title">Your Playlists</h2>
        <div class="playlist-list">
            @if($playlists && $playlists->count() > 0)
                @foreach($playlists as $playlist)
                    <div class="playlist-card">
                        <a href="{{ route('playlist.show', $playlist->id) }}" class="playlist-link">{{ $playlist->name }}</a>
                    </div>
                @endforeach
            @else
                <p>You have no playlist.</p>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
    <style>
        .library {
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .library-title {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }
        .section {
            margin-bottom: 40px;
        }
        .section-title {
            font-size: 2em;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .albums-list, .songs-list, .playlist-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }
        .albums-card, .songs-card, .playlist-card {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .albums-card:hover, .songs-card:hover, .playlist-card:hover {
            transform: translateY(-5px);
        }
        .albums-link, .songs-link, .playlist-link {
            color: inherit;
            text-decoration: none;
            display: block;
        }
        .albums-cover {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .albums-info {
            text-align: center;
        }
        .albums-title {
            font-size: 1.2em;
            font-weight: bold;
        }
        .albums-artist {
            font-size: 1em;
            color: #888;
        }
    </style>
@endpush


@extends('layouts.app')

@section('content')
<div class="user-profile">
    <h1>{{ $user->name }}'s Profile</h1>
    <p>{{ $user->bio }}</p>

    @if($playlists)
        <div class="section">
            <h2>Your Playlists</h2>
            <div class="playlist-list">
                @foreach($playlists as $playlist)
                    <div class="playlist-card">
                        <a href="{{ route('playlist.show', $playlist->id) }}">{{ $playlist->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection

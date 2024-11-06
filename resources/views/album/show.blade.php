@extends('layouts.app')

@section('content')
<div class="albums">
    <h1>{{ $albums->title }}</h1>
    <p>By <a href="{{ route('user.show', $albums->artist->id) }}">{{ $albums->artist->name }}</a></p>
    
    <div class="albums-cover">
        <img src="{{ $albums->cover_image }}" alt="{{ $albums->title }}">
    </div>

    <h2>Songs in this Albums</h2>
    <ul>
        @foreach($albums->songs as $songs)
            <li>
                <a href="{{ route('songs.show', $songs->id) }}">{{ $songs->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection

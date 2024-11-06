@extends('layouts.app')

@section('content')
<div class="songs">
    <h1>{{ $songs->title }}</h1>
    <p>Albums: <a href="{{ route('albums.show', $songs->albums->id) }}">{{ $songs->albums->title }}</a></p>
    <p>Artist: <a href="{{ route('users.show', $songs->albums->artist->id) }}">{{ $songs->albums->artist->name }}</a></p>
    
    <div class="songs-details">
        {{--Songs details?? --}}
    </div>
</div>
@endsection

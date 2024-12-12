<!-- resources/views/components/music-gallery.blade.php -->

@foreach (['songs' => $songs, 'albums' => $albums, 'artists' => $artists] as $title => $items)
    <div class="header text-white">
        <p>{{ ucwords($title) }}</p>
    </div>
    <div class="popular text-white">
        <div class="gallery-container">
            <div class="gallery {{ $title }}">
                @foreach ($items as $item)
                    <div class="image-container">
                        <a>
                            <img class="wave" src="{{ $item->image }}">
                        </a>
                        <p>{{ $item->name }}</p> <br>
                        <p>{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
            <div class="gallery-wrap left">
                <button id="backBtn_{{ $title }}">⬅️</button>
            </div>
            <div class="gallery-wrap right">
                <button id="nextBtn_{{ $title }}">➡️</button>
            </div>
        </div>
    </div>
@endforeach

<x-footer />

<script src="{{ asset('js/musicGallery.js') }}"></script>

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

<div class="bottom">
    <div class="bottom-section">
        <h4>Company</h4>
        <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Affiliate program</a></li>
        </ul>
    </div>
    <div class="bottom-section">
        <h4><a href="{{ route('contact.form') }}">Help</a></h4>
        <ul>
            <li><a href="#">Q&A</a></li>
            <li><a href="#">Sign up</a></li>
        </ul>
    </div>
    <div class="bottom-section">
        <h4>Contact us</h4>
        <ul>
            <li>Alsion 2, 6400 Sønderborg</li>
            <li>Telephone: 6550 1160</li>
        </ul>
    </div>
</div>

<div class="end">
    <footer>
        <marquee>
            <p>©2024 Made by Group 7 | All Rights Reserved</p>
        </marquee>
    </footer>
</div>

<script src="{{ asset('js/musicGallery.js') }}"></script>

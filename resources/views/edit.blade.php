<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">

    <body>


        <div class="scheduler">
            <h3 class="title-alarm"><b>Update Playlist</b></h3>
            <div class="form_alarm">
                <form action="{{ route('update', ['id' => $playlist->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" value="{{ old('name', $playlist->name) }}" required>
                    <input type="text" name="duration" value="{{ old('duration', $playlist->duration) }}" required>
                    <input type="text" name="genre" value="{{ old('genre', $playlist->genre) }}" required>
                    <button type="submit">Update</button>
                </form>



            </div>
        </div>

        <div class="bottom">
            <div class="bottom-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="/about">About us</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Affiliate program</a></li>
                </ul>
            </div>
            <div class="bottom-section">
                <h4>Help</h4>
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
    </body>
</x-app-layout>



</html>

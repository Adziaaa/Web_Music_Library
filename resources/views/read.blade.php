<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <title>Song List</title>
</head>

<body>

    <div class="songs-title-container">
        <h3>Your Playlist</h3>

        <div class="backBtn">
            <a href="{{ url('/playlist') }}">
                <button class="back-button">
                    <i class="bi bi-arrow-left"></i> Back
                </button>
            </a>
        </div>
    </div>

    <div class="songs">
        <div id="songList" class="song-list-container"></div>
    </div>
    <div class="backBtn">
        <a href="{{ url('/playlist') }}">
            <button>
                <i class="bi bi-arrow-left"></i> Back
            </button>
        </a>
    </div>
    <script src="{{ asset('js/songs.js') }}"></script>
</body>

</html>

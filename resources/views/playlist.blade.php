<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Extension - Music Player</title>
    <link rel="stylesheet" href="style1.css">
    <!-- Bootstrap Icons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="music-container" id="music-container">
        <div class="music_text">
            <p id="artist"></p>
            <h4 id="title"></h4>
        </div>
        <div class="img-container">
            <img id="cover" src="/images/es.jpeg" alt="Album Cover">
        </div>
        <div class="music-info">
            <div class="progress-container" id="progress-container">
                <div class="progress" id="progress">
                </div>
            </div>
            <div class="update">
                <p id="timeLeft">0:00</p>
                <p id="currentTime">0:00</p>
                <p id="duration">0:00</p>
            </div>
        </div>
        <div class="navigation">
            <button id="muteBtn" class="action-btn">
                <i class="fa-duotone fa-light fa-music-note"></i> </button>
            <button id="prevBtn" class="action-btn">
                <i class="fas fa-backward"></i>
            </button>
            <button id="playBtn" class="action-btn">
                <i class="fas fa-play"></i>
            </button>
            <button id="nextBtn" class="action-btn">
                <i class="fas fa-forward"></i>
            </button>
            <button onclick="randomsong()" id="specialbtn" class="action-btn">
                <i class="bi bi-dice-3-fill"></i>
            </button>
        </div>
    </div>
    <div class="buttons-row">
        <a id="read" href="songs.html">Read more about playlist</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>

    <script src="howler.min.js"></script>
    <script src="player.js"></script>
</body>

</html>

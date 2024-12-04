<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <!-- Bootstrap Icons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



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
            <button onclick="copy()" id="muteBtn" class="action-btn">
                <i class="bi bi-c-circle-fill"></i>
            </button>
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
        <a id="read" href="{{ url('/read') }}">Read more about playlist</a>
    </div>







    <div class="bottom">
        <div class="bottom-section">
            <h4>Company</h4>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="{{ route('websiteRegulations') }}">View Website Regulations</a>
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





    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>

    <script src="howler.min.js"></script>
    <script src="{{ asset('js/player.js') }}"></script>
</x-app-layout>

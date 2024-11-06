<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        .popular {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .wave {
            height: 150px;
            width: 150px;
        }

        .image-container {
            text-align: center;
            margin: 5px;
            display: inline-block;
        }

        .image-container img {
            display: block;
            margin: 0 auto;
        }

        .image-container p {
            font-size: 15px;
            display: inline-block;
            margin: 0;
        }

        .button {
            width: 70px;
            height: 70px;
            cursor: pointer;
            user-select: none;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            color: white;
        }

        .button:hover {
            background-color: blue;
        }

        .scroll-container {
            display: flex;
            align-items: center;
        }

        .scroll-content {
            overflow-x: auto;
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .scroll-left,
        .scroll-right {
            background: #888;
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: black;
        }

        .gallery {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 10px;
            flex-grow: 1;
        }

        .gallery div img {

            transition: transform 0.5s;
        }

        .gallery::-webkit-scrollbar {
            height: 10px;
        }

        .gallery::-webkit-scrollbar-thumb {
            display: none;
        }

        .gallery::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .gallery-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 20px;
        }

        #backBtn,
        #nextBtn {
            width: 50px;
            cursor: pointer;
            border-radius: 17px;
            background-color: rgb(248, 248, 252);
        }

        #backBtn:hover,
        #nextBtn:hover {
            background-color: #050505;
        }

        .gallery div button:hover {
            cursor: pointer;
            transform: scale(1.1);
        }

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            font-family: 'Ubuntu', sans-serif;
            background-color: #171718;
            color: white;
        }

        .container {
            display: flex;
            padding: 15px;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            height: 60px;
        }

        .search {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        input[type="text"] {
            width: 40%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .header {
            text-align: left;
            padding-left: 50px;
            margin: 20px 0 5px;
        }

        .popular {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
            align-items: center;
        }

        .bottom {
            display: flex;
            flex-wrap: wrap;
            background-color: black;
            color: white;
            padding: 20px;
        }

        .bottom-section {
            flex: 1;
            margin: 0 20px;
        }

        .bottom-section h4 {
            margin-bottom: 10px;
        }

        .bottom-section ul {
            list-style-type: none;
            padding: 0;
        }

        .bottom-section ul li {
            margin-bottom: 10px;
        }

        .bottom-section ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .bottom-section ul li a:hover {
            text-decoration: underline;
        }

        .end {
            display: flex;
            justify-content: center;
            background-color: black;
            color: white;
            padding: 10px 0;
        }

        footer marquee {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="https://img.icons8.com/quill/100/228BE6/galaxy.png" alt="Home" />
            <h3>Atari800</h3>
        </div>
        <div class="search">
            <input type="text" spellcheck="true" placeholder="What would you like to listen?">
        </div>
        <div class="menu">
            <button class="profile">⛄</button>
            <div class="hide">
                <a href="#">Account</a>
                <a href="#">Support</a>
                <a href="#">About</a>
                <a href="#">Settings</a>
            </div>
        </div>
    </div>

    <div class="header">
        <p>Popular Songs</p>
    </div>
    <div class="popular">
        <div class="gallery">
            @foreach ($popularsong as $item)
                <div class="image-container">
                    <a>
                        <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                    </a>
                    <p>{{ $item->name }}</p> <br>
                    <p>{{ $item->title }}</p>
                </div>
            @endforeach
        </div>
        <div class="gallery-wrap">
            <button id="backBtn">⬅️</button>
        </div>
        <div class="gallery-wrap">
            <button id="nextBtn">➡️</button>
        </div>
    </div>


    <div class="popular">
        <div class="gallery">
            @foreach ($popularalbum as $item)
                <div class="image-container">
                    <a>
                        <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                    </a>
                    <p>{{ $item->name }}</p> <br>
                    <p>{{ $item->title }}</p>
                </div>
            @endforeach
        </div>
        <div class="gallery-wrap">
            <button id="backBtn">⬅️</button>
        </div>
        <div class="gallery-wrap">
            <button id="nextBtn">➡️</button>
        </div>
    </div>
















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

</html>




<script>
    let scrollContainer = document.querySelector(".gallery");
    let backBtn = document.getElementById("backBtn");
    let nextBtn = document.getElementById("nextBtn");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    });

    nextBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 200;
    });

    backBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 200;
    });
</script>

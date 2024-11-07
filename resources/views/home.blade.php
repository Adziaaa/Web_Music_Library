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

        .gallery,
        .gallery1,
        .gallery2 {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 10px;
            flex-grow: 1;
        }

        .gallery div img,
        .gallery1 div img,
        .gallery2 div img {

            transition: transform 0.5s;
        }

        .gallery::-webkit-scrollbar,
        .gallery1::-webkit-scrollbar,
        .gallery2::-webkit-scrollbar {
            height: 10px;
        }

        .gallery::-webkit-scrollbar-thumb,
        .gallery1::-webkit-scrollbar-thumb,
        .gallery2::-webkit-scrollbar-thumb {
            display: none;
        }

        .gallery::-webkit-scrollbar-thumb:hover,
        .gallery1::-webkit-scrollbar-thumb:hover,
        .gallery2::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .gallery-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 20px;
        }



        #backBtn:hover,
        #nextBtn:hover {
            background-color: #050505;
        }

        .gallery div button:hover .gallery1 div button:hover .gallery2 div button:hover {
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

        .gallery-container {
            position: relative;
            overflow: hidden;
        }

        .gallery,
        .gallery1,
        .gallery2 {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 10px;
            flex-grow: 1;
        }

        .gallery-wrap {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        .gallery-wrap.left {
            left: 10px;
        }

        .gallery-wrap.right {
            right: 10px;
        }

        #backBtn,
        #nextBtn,
        #backBtn1,
        #nextBtn1,
        #backBtn2,
        #nextBtn2 {
            width: 40px;
            height: 40px;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: 50%;
            width: 60px;
            border-radius: 30px;
            font-family: 20px;
            background-color: rgb(67, 141, 201);
        }

        #backBtn:hover,
        #nextBtn:hover,
        #backBtn1:hover,
        #nextBtn1:hover,
        #backBtn2:hover,
        #nextBtn2:hover {
            background-color: #050505;
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
        <div class="dropup">
            <button class="prdropbtnofile">⛄</button>
            <div class="dropup-content">
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
        <div class="gallery-container">
            <div class="gallery">
                @foreach ($songs as $item)
                    <div class="image-container">
                        <a>
                            <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                        </a>
                        <p>{{ $item->name }}</p> <br>
                        <p>{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
            <div class="gallery-wrap left">
                <button id="backBtn">⬅️</button>
            </div>
            <div class="gallery-wrap right">
                <button id="nextBtn">➡️</button>
            </div>
        </div>
    </div>


    <div class="header">
        <p>Popular Album</p>
    </div>
    <div class="popular">
        <div class="gallery-container">
            <div class="gallery1">
                @foreach ($albums as $item)
                    <div class="image-container">
                        <a>
                            <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                        </a>
                        <p>{{ $item->name }}</p> <br>
                        <p>{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
            <div class="gallery-wrap left">
                <button id="backBtn1">⬅️</button>
            </div>
            <div class="gallery-wrap right">
                <button id="nextBtn1">➡️</button>
            </div>
        </div>
    </div>

    <div class="header">
        <p>Popular Artists</p>
    </div>
    <div class="popular">
        <div class="gallery-container">
            <div class="gallery2">
                @foreach ($artists as $item)
                    <div class="image-container">
                        <a>
                            <img class="wave" src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}">
                        </a>
                        <p>{{ $item->name }}</p> <br>
                        <p>{{ $item->title }}</p>
                    </div>
                @endforeach
            </div>
            <div class="gallery-wrap left">
                <button id="backBtn2">⬅️</button>
            </div>
            <div class="gallery-wrap right">
                <button id="nextBtn2">➡️</button>
            </div>
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

    let scrollContainer1 = document.querySelector(".gallery1");
    let backBtn1 = document.getElementById("backBtn1");
    let nextBtn1 = document.getElementById("nextBtn1");

    let scrollContainer2 = document.querySelector(".gallery2");
    let backBtn2 = document.getElementById("backBtn2");
    let nextBtn2 = document.getElementById("nextBtn2");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    });

    scrollContainer2.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer2.scrollLeft += evt.deltaY;
        scrollContainer2.style.scrollBehavior = "auto";
    });

    scrollContainer1.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer1.scrollLeft += evt.deltaY;
        scrollContainer1.style.scrollBehavior = "auto";
    });

    nextBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 200;
    });

    backBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 200;
    });

    nextBtn2.addEventListener("click", () => {
        scrollContainer2.style.scrollBehavior = "smooth";
        scrollContainer2.scrollLeft += 200;
    });

    backBtn2.addEventListener("click", () => {
        scrollContainer2.style.scrollBehavior = "smooth";
        scrollContainer2.scrollLeft -= 200;
    });

    nextBtn1.addEventListener("click", () => {
        scrollContainer1.style.scrollBehavior = "smooth";
        scrollContainer1.scrollLeft += 200;
    });

    backBtn1.addEventListener("click", () => {
        scrollContainer1.style.scrollBehavior = "smooth";
        scrollContainer1.scrollLeft -= 200;
    });
</script>

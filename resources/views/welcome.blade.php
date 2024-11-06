<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
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
            box-sizing: border-box;
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
        <p>Popular Albums</p>
    </div>

    <div class="popular">
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

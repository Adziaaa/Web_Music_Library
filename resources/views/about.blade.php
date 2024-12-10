<x-app-layout>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/support.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <title>ABOUT</title>
    
   
    


    <div class="dreamteam">
        <h1 id="dream-team-title">Dream Team</h1>
    </div>
    <div class="team">


        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/ada.jpg') }}" alt="Adriana"><br>
            <h3> Adriana Jaworska</h3>
        </div>
        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/iana.jpg') }}" alt="Iana"><br>
            <h3>Iana Pavliuc</h3>
        </div>
        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/daniel.jpg') }}" alt="Daniel"><br>
            <h3>Daniel Vacas Crespo</h3>
        </div>

        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/dainius.png') }}" alt="Dainius"><br>
            <h3>Dainius Čeliauskas</h3>
        </div>
        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/marius.png') }}" alt="Marius"><br>
            <h3>Marius Chirița </h3>
        </div>
        <div class="member" data-aos="fade-up"><img class="member-image" src="{{ asset('images/maciej.jpg') }}" alt="Maciej"><br>
            <h3>Maciej Grasela</h3>
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
    
        <script> AOS.init(); </script>
        <script src="{{ asset('js/support.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0"></script>
        <script src="./app.js"></script>
</body>

</html>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }} -->
                    <head>
                        <!-- <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="preconnect" href="https://fonts.googleapis.com">
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

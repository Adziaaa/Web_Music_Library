<x-app-layout>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/support.css') }}">
        <title>SUPPORT</title>
    </head>
    <body class="bg-gray-100 dark:bg-gray-900">
    <main class="main-content">
    <section class="common">
        <h1 ID="common-title">COMMONLY ASKED QUESTIONS</h1>
        <ul class="hover-list">
            <li class="question">
                <a href="#" onclick="toggleDropdown('login')">Can't log in</a>
            </li>
            <li  id="login" class="dropdown-content">
                <p>If you are logged in as a Guest(you can see that in the right side of the menu on to of the website), click "Log In" button next to it. Then either log in with existing account or create a new one by clicking "Sign up"</p>
            </li>
            <li class="question">
                <a href="#" onclick="toggleDropdown('rating')">Update payment details</a>
            </li>
            <li id="rating" class="dropdown-content">
                <p>We're glad that you like our website. To tell us how much you love it use contact form bellow!</p>
            </li>
        </ul>
        <div >
        <h2 id="title"><br>NOT WHAT YOU'RE LOOKING FOR?</h2>
        <h2 id="title"  > CONTACT US! </h2>
        </div>
    </section>        
    
    <section class="contact-section">
        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif
        
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" name="email" id="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" placeholder="subject" required>
            </div>
            <div class="form-group">
                <label for="content">Message:</label>
                <textarea name="content" id="content" placeholder="what is the issue?" required></textarea>
            </div>
            <button type="submit">Send Email</button>
        </form>
    </section>
    </main>
    
    <x-footer />
    
    <script src="{{ asset('js/support.js') }}"></script>
    </body>
    </html>
    </x-app-layout>
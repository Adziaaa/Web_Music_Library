<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf
        <title>Search Page</title>
        <link rel="stylesheet" href="./SearchFor/SearchFor.css" />
    </head>
    <body>
        <section class="searchBarSection" action="/album" method="POST">
          <input id="searchBar"  type="text" placeholder="Search..." class="searchBar" oninput="searchMusic()"><br>
          <div class="dropdown" id="dropdown">
            <!-- Search results will appear here -->
          </div>
        </section>
        <script src="./SearchFor/SearchFor.js"></script>
    </body>
</html>
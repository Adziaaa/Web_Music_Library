<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf
        <title>Search Page</title>
        <link rel="stylesheet" href="./SearchFor/SearchFor.css" />
    </head>
    <body>
        <form id="searchBarForm" class="searchBarForm" action="/search" method="GET">
          <textarea id="searchBar"  type="text" placeholder="Search..." class="searchBar" oninput="searchMusic()"><br>
          <div class="dropdown" id="dropdown">
            <!-- Search results will appear here -->
          </div>
        </form>
        <script src="./SearchFor/SearchFor.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf
        <title>Search Page</title>
        <link rel="stylesheet" href="./SearchFor/SearchFor.css" />
    </head>


    <body>
        <section class="searchBarSection">
          <input id="searchBar"  type="text" placeholder="Search..." class="searchBar" oninput="searchMusic()"><br>
          <div class="dropdown" id="dropdown">
            <!-- Search results will appear here -->
          </div>
        </section>










        <section class="searchingList">
            @if(isset($results))
                @if($results->isEmpty())
                    <p>No results found for "{{$searchTerm}}"<p>
                @else
                <div class="container" id="searchContainer">
                <ol>
                  @if($result==song)
                   <li class="list"> 
                    <div class="info" id="song">
                        <img src="https://i.scdn.co/image/ab67616d0000b2734246e3158421f5abb75abc4f" class="picture">
                        <h3>$title</h3>
                        <p>$artist</p>
                        <p>$album</p>
                    </div>
                   </li>
                  @elseif($result==album)
                   <li class="list">
                    <div class="info" id="album">
                        <img src="https://i.scdn.co/image/ab67616d0000b2739ad3e9959f48d513886b8933" class="picture">
                        <h3>$title</h3>
                        <p>$artist</p>
                        <p>$year - Album</p>
                    </div>
                   </li>
                   @elseif($result==artist)
                   <li class="list">
                    <div class="info" id="artist">
                        <img src="https://i.scdn.co/image/b040846ceba13c3e9c125d68389491094e7f2982" class="ArtistPicture">
                        <h3>$name</h3>
                        <p>Artist</p>
                    </div>
                   </li>
                   @endif
                </ol>
                </div>
                @endif
            @endif
        </section>
        <script src="./SearchFor/SearchFor.js"></script>
    </body>
</html>
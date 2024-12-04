function searchMusic() {
    const searchBar = document.getElementById('searchBar');
    const dropdown = document.getElementById('dropdown');
    const query = searchBar.value.toLowerCase().trim();

    // Clear previous results
    dropdown.innerHTML = '';
    dropdown.style.display = 'none';

    if (query.length === 0) return;

    // Make AJAX request to the server
    fetch(`/search?query=${query}`)
        .then(response => {
            if (!response.ok) {
                console.error('Server error:', response.status, response.statusText);
                return []; // Return empty results on error
            }
            return response.json(); // Parse JSON response
        })
        .then(data => {
            const { songs, albums, artists, playlists, profiles } = data;

            const allResults = [
                ...songs.map(item => ({ ...item, type: 'song' })),
                ...albums.map(item => ({ ...item, type: 'album' })),
                ...artists.map(item => ({ ...item, type: 'artist' })),
                //...playlists.map(item => ({ ...item, type: 'playlist' })),
                ...(profiles ? profiles.map(item => ({ ...item, type: 'profile' })) : [])
            ];

            if (allResults.length > 0) {
                dropdown.style.display = 'block';
                allResults.forEach(result => {
                    const item = document.createElement('div');
                    item.classList.add('dropdownItem');

                    const img = document.createElement('img');
                    img.src = result.image || '/default-image.png'; // Provide a default image
                    img.alt = "Image";

                    const text = document.createElement('a');
                    text.classList.add('submit');

                    switch (result.type) {
                        case 'song':
                            text.textContent = `${result.title} - ${result.type}`;
                            break;
                        case 'album':
                            text.textContent = `${result.title}- ${result.type}`;
                            text.href = `/album/${result.id}`;
                            break;
                        case 'artist':
                            text.textContent = `${result.name} - ${result.type}`;
                            text.href = `/artist/${result.id}`;
                            break;
                        /*case 'playlist':
                            text.textContent = `${result.name} - ${result.type}`;
                            text.href = `/playlist/${result.id}`;
                            break;*/
                        case 'profile':
                            text.textContent = `${result.name} - ${result.type}`;
                            text.href = `/profile/${result.id}`;
                            break;
                    }
                    item.appendChild(text);
                    item.appendChild(img);

                    dropdown.appendChild(item);
                });
            }
        })
        .catch(error => console.error('Error fetching search results:', error));
}

function selectResult(music) {
    const searchBarForm = document.getElementById("searchBarForm");
    document.querySelector(".submit").addEventListener("click", function(){

    searchBarForm.submit();

    });

    const searchBar = document.getElementById('searchBar');
    let link;
    switch(music.type){
        case 'Song':
            break;
        case 'Album':
            link = `{{ route('album.show', ['id' => ':id']) }}`.replace(':id', album.id);
            break;
        case 'Artist':
            text.textContext = `${music.title} - ${music.type}`;
            link = `{{ route('artist.show', ['id' => ':id']) }}`.replace(':id', artist.id);
            break;
        case 'Profile':
            text.textContext=`${music.title}`;
            link = `{{ route('profile.show', ['id' => ':id']) }}`.replace(':id', profile.id);
            break;
        /*case 'Playlist':
            text.textContext=`${music.title} - ${music.type}`;
            link = `{{ route('playlist.show', ['id' => ':id']) }}`.replace(':id', playlist.id);
            break;*/
    }
    // Hide the dropdown
    document.getElementById('dropdown').style.display = 'none';

} 
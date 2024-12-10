let debounceTimer;
const queryCache = {}; // Cache for storing results of previous queries

function debounce(func, delay) {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(func, delay);
}

function searchMusic() {
    const searchBar = document.getElementById('searchBar');
    const dropdown = document.getElementById('dropdown');
    const query = searchBar.value.toLowerCase().trim();

    dropdown.innerHTML = '';
    dropdown.style.display = 'none';

    if (query.length === 0) return; // If input is empty, clear the dropdown

    // Check if query exists in cache or is a subset of a previous query
    const cachedKeys = Object.keys(queryCache);
    const matchingKey = cachedKeys.find(key => key.startsWith(query));

    if (queryCache[query]) {
        // Exact match found in cache
        renderResults(queryCache[query]);
        return;
    } else if (matchingKey) {
        // Query is a subset of a cached query
        const subsetResults = queryCache[matchingKey].filter(item =>
            item.title.toLowerCase().includes(query) || item.name?.toLowerCase().includes(query)
        );
        renderResults(subsetResults);
        return;
    }

    debounce(() => {
        fetch(`/search?query=${query}`)
            .then(response => response.json())
            .then(data => {
                queryCache[query] = data; // Store new results in cache
                renderResults(data); // Render results from the response
            })
            .catch(error => console.error('Error fetching search results:', error));
    }, 300); // Adjust debounce delay as needed
}

function renderResults(data) {
    const dropdown = document.getElementById('dropdown');

    const songs = data.songs || [];
    const albums = data.albums || [];
    const artists = data.artists || [];
    const profiles = data.profiles || [];

    const allResults = [
        ...songs.map(item => ({ ...item, type: 'song' })),
        ...albums.map(item => ({ ...item, type: 'album' })),
        ...artists.map(item => ({ ...item, type: 'artist' })),
        ...profiles.map(item => ({ ...item, type: 'profile' }))
    ];
    
    dropdown.innerHTML='';
    const seenIds = new Set();
    const uniqueResults = [];

    allResults.forEach(result => {
        const uniqueKey = `${result.type}-${result.id}`;
        if (!seenIds.has(uniqueKey)) {
            seenIds.add(uniqueKey);
            uniqueResults.push(result);
        }
    });

    if (uniqueResults.length > 0) {
        dropdown.style.display = 'block';
        uniqueResults.forEach(result => {
            const item = document.createElement('div');
            item.classList.add('dropdownItem');

            const img = document.createElement('img');
            img.src = result.image || 'images/profile.png';
            img.alt = "Image";

            const text = document.createElement('a');
            text.classList.add('submit');

            switch (result.type) {
                case 'song':
                    text.textContent = `${result.title} - ${result.type}`;
                    break;
                case 'album':
                    text.textContent = `${result.title} - ${result.type}`;
                    text.href = `/album/${result.id}`;
                    break;
                case 'artist':
                    text.textContent = `${result.name} - ${result.type}`;
                    text.href = `/artist/${result.id}`;
                    break;
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
}

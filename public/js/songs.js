fetch('/ada_we/json/songs.json')
    .then(response => response.json())
    .then(data => {
        const songList = document.getElementById('songList');
        for (const [title, details] of Object.entries(data)) {
            const songDiv = document.createElement('div');
            songDiv.className = 'song-card';
            songDiv.innerHTML = `
            <div class="title"><strong>Title:</strong> ${title}</div>
            <div class="artist"><strong>Artist:</strong> ${details.artist}</div>
            <div class="year"><strong>Year:</strong> ${details.year}</div>
            <div class="genre"><strong>Genre:</strong> ${details.genre}</div>
            <div class="rating"><strong>Rating:</strong> ${details.rating}</div>
            <div class="description">${details.description}</div>
        `;
            songList.appendChild(songDiv);
        }
    })
    .catch(error => {
        console.error('Error fetching the JSON file:', error);
    });
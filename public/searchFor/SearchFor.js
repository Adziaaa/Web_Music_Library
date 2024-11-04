const titles = [
      {type:'Song',title:'All I Want for Christmas is You',artist:'Mariah Carey'},
      {type:'Album',title:'Ride the Lightning', artist:'Metallica'},
      {type:'Album',title:'InRainbows', artist:'Radiohead',src:'https://upload.wikimedia.org/wikipedia/en/1/14/Inrainbowscover.png'},
      {type:'Artist', title:'Pink Floyd'},
      {type:'Artist', title:'Metallica'},
      {type:'Profile', title: 'MarsTyrant'},
      {type:'Playlist', title: '#1 playlist'}
  ];


  function searchMusic() {
    const searchBar = document.getElementById('searchBar');
    const dropdown = document.getElementById('dropdown');
    const query = searchBar.value.toLowerCase().trim();

    // Clear previous results
    dropdown.innerHTML = '';
    dropdown.style.display = 'none';

    if (query.length==0) return;

    const results = titles.filter(music => 
        music.title.toLowerCase().includes(query) ||
        music.type.toLowerCase().includes(query) 
    );

    if (results.length > 0) {
        dropdown.style.display = 'block';
        results.forEach(music => {
            const item = document.createElement('div');
            item.classList.add('dropdownItem');

            const img = document.createElement('img');
            img.src = music.src;
            img.alt="no image";

            const text = document.createElement('span');

            switch(music.type){
                case 'Song':
                    text.textContent = `${music.title} - ${music.artist} - ${music.type}`;
                    break;
                case 'Album':
                    text.textContent = `${music.title} - ${music.artist} - ${music.type}`;
                    text.href = `/album/${music.title}`;
                    break;
                case 'Artist':
                    text.textContent = `${music.title} - ${music.type}`;
                    break;
                case 'Profile':
                    text.textContent=`${music.title}`;
                    break;
                case 'Playlist':
                    text.textContent=`${music.title} - ${music.type}`;
                    break;
            }
            item.appendChild(text)
            item.appendChild(img);
            
            item.onclick = () => selectResult(music);
            dropdown.appendChild(item);
        });
    }
}

function selectResult(music) {
    const searchBar = document.getElementById('searchBar');
    searchBar.value = `${music.title} - ${music.type}`;

    // Hide the dropdown
    document.getElementById('dropdown').style.display = 'none';

}
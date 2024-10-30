const titles = [
      {type:'song',title:'All I Want for Christmas is You'},
      {type:'album',title:'Ride the Lightning'},
      {type:'album',title:'In Rainbows'},
      {type:'artist', title:'Pink Floyd'},
      {type:'artist', title:'Metallica'},
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
            item.textContent = `${music.title} - ${music.type}`;
            item.onclick = () => selectResult(music);
            dropdown.appendChild(item);
        });
    }
}

function selectResult(music) {
    const searchBar = document.getElementById('searchBar');
    searchBar.value = `${music.title} - ${music.type}`;d

    // Hide the dropdown
    document.getElementById('dropdown').style.display = 'none';

}
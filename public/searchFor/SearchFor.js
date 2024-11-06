const titles = [
      {type:'song', id:"123",title:'All I Want for Christmas is You', artist:'Mariah Carey', src:"https://i.scdn.co/image/ab67616d0000b2734246e3158421f5abb75abc4f"},
      {type:'album',id:"137",title:'Ride the Lightning', artist:'Metallica', src:"https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Ridetl.png/220px-Ridetl.png"},
      {type:'album',id:"353",title:'In Rainbows', artist:'Radiohead',src:'https://upload.wikimedia.org/wikipedia/en/1/14/Inrainbowscover.png'},
      {type:'artist', id:"457",title:'Pink Floyd', src:"https://upload.wikimedia.org/wikipedia/en/d/d6/Pink_Floyd_-_all_members.jpg"},
      {type:'artist', id:"234",title:'Metallica', src:"https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Metallica_March_2024.jpg/300px-Metallica_March_2024.jpg"},
      {type:'profile', id:"987",title: 'MarsTyrant', src:"https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp"},
      {type:'playlist', id:"573",title: '#1 playlist', src:"https://pro2-bar-s3-cdn-cf4.myportfolio.com/dbea3cc43adf643e2aac2f1cbb9ed2f0/f14d6fc4-2cea-41a2-9724-a7e5dff027e8_rw_1200.jpg?h=60e8fb45f75e1a2612c53a4f2174997c"}
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

            const text = document.createElement('a');
            text.classList.add('submit');

            switch(music.type){
                case 'song':
                    text.textContent= `${music.title} - ${music.artist} - ${music.type}`;
                    break;
                case 'album':
                    text.textContent = `${music.title} - ${music.artist} - ${music.type}`;
                    text.href = `/album/${music.id}`;
                    break;
                case 'artist':
                    text.textContent = `${music.title} - ${music.type}`;
                    text.href = `/artist/${music.id}`;
                    break;
                case 'profile':
                    text.textContent=`${music.title} - ${music.type}`;
                    text.href = `/profile/${music.id}`;
                    break;
                case 'playlist':
                    text.textContent=`${music.title} - ${music.type}`;
                    text.href = `/playlist/${music.id}`;
                    break;
            }
            item.appendChild(text);
            item.appendChild(img);
            
            item.onclick = () => selectResult(music);
            dropdown.appendChild(item);
        });
    }
}

function selectResult(music) {
    const searchBarForm = document.getElementById("searchBarForm");
    document.querySelector(".submit").addEventListener("click", function(){

    searchBarForm.submit();

    });

    const searchBar = document.getElementById('searchBar');
    /*let link;
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
        case 'Playlist':
            text.textContext=`${music.title} - ${music.type}`;
            link = `{{ route('playlist.show', ['id' => ':id']) }}`.replace(':id', playlist.id);
            break;
    }*/
    // Hide the dropdown
    document.getElementById('dropdown').style.display = 'none';

}
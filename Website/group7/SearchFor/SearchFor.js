document.getElementById('searchButton').addEventListener('click', function() {
    const searchTerm = document.getElementById('searchBar').value;
    
    if (searchTerm.trim() === '') {
      alert('Please enter a search term.');
      return;
    }
  
    const resultsContainer = document.getElementById('searchContainer');
    resultsContainer.innerHTML = '';
  
    results.forEach(result => {
      const resultItem = document.createElement('div');
      resultItem.classList.add('result-item');
  
      const resultTitle = document.createElement('span');
      resultTitle.classList.add('result-title');
      resultTitle.innerText = result.title;
  
      const resultType = document.createElement('span');
      resultType.classList.add('result-type');
      resultType.innerText = ` (${result.type})`;
  
      resultItem.appendChild(resultTitle);
      resultItem.appendChild(resultType);
      
      resultsContainer.appendChild(resultItem);
    });
  });
  
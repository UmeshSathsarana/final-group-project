document.addEventListener("DOMContentLoaded", function() {
  var searchButton = document.querySelector('.search-btn');
  var searchInput = document.querySelector('.search-input');

  function performSearch() {
    var searchText = searchInput.value.toLowerCase();
    var elements = document.querySelectorAll('h5, p, h2'); // Add more selectors if needed

    for (var i = 0; i < elements.length; i++) {
      if (elements[i].textContent.toLowerCase().includes(searchText)) {
        elements[i].scrollIntoView({ behavior: 'smooth', block: 'center' });
        elements[i].classList.add('blink');
        setTimeout(() => {
          elements[i].classList.remove('blink');
        }, 3000); // Remove the blink class after 3 seconds
        break;
      }
    }
  }

  // Search functionality for the button click
  if (searchButton) {
    searchButton.addEventListener('click', performSearch);
  }

  // Search functionality for pressing Enter key
  if (searchInput) {
    searchInput.addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default form submission behavior
        performSearch();
      }
    });
  }
});

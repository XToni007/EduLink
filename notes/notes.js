// Fetch notes data from JSON file
fetch('notes-data.json')
  .then(response => response.json())
  .then(data => {
    // Get notes list element from HTML
    const notesList = document.getElementById('notes-list');

    // Loop through notes data and create list items with buttons
    data.notes.forEach(note => {
      // Create list item element
      const li = document.createElement('li');

      // Create button element
      const btn = document.createElement('button');
      btn.textContent = 'Delete';
      btn.classList.add('delete-btn');

      // Add click event listener to button
      btn.addEventListener('click', () => {
        // Remove list item element from HTML
        li.remove();
      });

      // Add title and content to list item element
      li.textContent = note.title + ': ' + note.content;

      // Append button to list item element
      li.appendChild(btn);

      // Append list item element to notes list
      notesList.appendChild(li);
    });
  })
  .catch(error => console.error(error));

// Get the button and the dropdown content
var button = document.querySelector('.drop-down-button');
var dropdownContent = document.querySelector('.drop-down-content-hidden');

// Add a click event listener to the button
button.addEventListener('click', function() {
  // If the dropdown content is hidden, show it
  if (dropdownContent.classList.contains('drop-down-content-hidden')) {
    dropdownContent.classList.remove('drop-down-content-hidden');
    dropdownContent.classList.add('drop-down-content-show');
  } 
  // Otherwise, hide it
  else {
    dropdownContent.classList.remove('drop-down-content-show');
    dropdownContent.classList.add('drop-down-content-hidden');
  }
});
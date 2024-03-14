document.addEventListener('DOMContentLoaded', function() {
    // References to the form fields and submit button //
const nameInput = document.getElementById('name');
const companyInput = document.getElementById('company');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('telephone');
const messageInput = document.getElementById('message');
const submitButton = document.getElementById('submit-btn');
const validationMsgContainer = document.querySelector('.validation-msg-container');

// Add event listener to the submit button //
submitButton.addEventListener('click', function(event) {
  // Prevent form submission //
  event.preventDefault();

  // Clear previous validation messages //
  validationMsgContainer.innerHTML = '';

  // Validate first name (at least 2 characters) //
  const name = nameInput.value;
  if (name.length < 2) {
    displayValidationMessage('Please enter a first name with at least 2 characters', 'alert-danger');
  }

  // Validate email (format: xxx@xxx.xxx)
  const email = emailInput.value;
  const emailRegex = /^[^\s@]+([-][^\s@]+)?@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    displayValidationMessage('Please enter a valid email address', 'alert-danger');
  }

  // Validate phone number (exactly 11 digits)
  const phoneNumber = phoneInput.value;
  if (!phoneNumber || !/^[\d-+]{11}$/.test(phoneNumber)) {
    displayValidationMessage('Please enter a valid phone number', 'alert-danger');
  }

  // Validate message (at least 10 characters)
  const message = messageInput.value;
  if (message.length > 0 && message.length < 10) {
    displayValidationMessage('Please enter a message with at least 10 characters', 'alert-danger');
  }

  // If no validation errors, submit the form //
  if (validationMsgContainer.children.length === 0) {
    event.target.closest('form').submit(); // Submit the form
  }
});

// Function to display validation messages //
function displayValidationMessage(message, className) {
  const validationMsgBox = document.createElement('div');
  validationMsgBox.classList.add('validation-msg', className);

  const msgText = document.createTextNode(message);
  validationMsgBox.appendChild(msgText);

  const closeBtn = document.createElement('span');
  closeBtn.classList.add('close-btn');
  closeBtn.innerHTML = '&times;';
  closeBtn.addEventListener('click', function() {
    validationMsgBox.remove(); // Remove the message box when close button is clicked
  });
  validationMsgBox.appendChild(closeBtn);

  validationMsgContainer.appendChild(validationMsgBox);
}

});


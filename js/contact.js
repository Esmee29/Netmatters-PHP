// References to the form fields and submit button //
const nameInput = document.getElementById('name');
const companyInput = document.getElementById('company');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('telephone');
const messageInput = document.getElementById('message');
const submitButton = document.getElementById('submit-btn');
const validationMsg = document.querySelector('.validation-msg');
const validationSpan = validationMsg.querySelector('span');

// Add event listener to the submit button //
submitButton.addEventListener('click', function(event) {
  // Prevent form submission //
  event.preventDefault();

  // Clear previous validation messages //
  validationSpan.textContent = '';
  validationMsg.classList.remove('alert-success', 'alert-danger');

  // Validate first name (at least 2 characters) //
  const name = nameInput.value;
  if (name.length < 2) {
    displayValidationMessage('Please enter a first name with at least 2 characters', 'alert-danger');
    return;
  }

  // Validate email (format: xxx@xxx.xxx) //
  const email = emailInput.value;
  const emailRegex = /^[^\s@]+([-][^\s@]+)?@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    displayValidationMessage('Please enter a valid email address', 'alert-danger');
    return;
  }

  // Validate phone number (exactly 11 digits) //
  const phoneNumber = phoneInput.value;
  if (!phoneNumber || !/^[\d-+]{11,}$/.test(phoneNumber)) {
    displayValidationMessage('Please enter a valid phone number', 'alert-danger');
    return;
  }

  // Validate message (any characters), if provided //
  const message = messageInput.value;
  if (message.length > 0 && message.length < 10) {
    displayValidationMessage('Please enter a message with at least 10 characters', 'alert-danger');
    return;
  }

  // If all validations pass, submit the form //
  displayValidationMessage('Form submitted successfully!', 'alert-success');
});

// Function to display validation messages //
function displayValidationMessage(message, className) {
  validationSpan.textContent = message;
  validationMsg.classList.add(className);
}

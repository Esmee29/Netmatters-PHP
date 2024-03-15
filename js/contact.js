document.addEventListener('DOMContentLoaded', function() {
  // References to the form fields and submit button //
  const form = document.getElementById('form');
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const phoneInput = document.getElementById('telephone');
  const messageInput = document.getElementById('message');
  const submitButton = document.getElementById('submit-btn');
  const validationMsgContainer = document.querySelector('.validation-msg-container');

  // Add event listener to the form submit event //
  form.addEventListener('submit', function(event) {
    // Prevent form submission //
    event.preventDefault();

    // Clear previous validation messages //
    validationMsgContainer.innerHTML = '';

    // Validate name (at least 2 characters)
    const name = nameInput.value.trim();
    if (name.length < 2) {
      displayValidationMessage('Please enter a value into name.', 'alert-danger');
    }

    // Validate email (format: xxx@xxx.xxx)
    const email = emailInput.value.trim();
    const emailRegex = /^[^\s@]+([-][^\s@]+)?@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      displayValidationMessage('Please enter a valid email address', 'alert-danger');
    }

    // Validate phone number (exactly 11 digits)
    const phoneNumber = phoneInput.value.trim();
    if (!phoneNumber || !/^\d{11}$/.test(phoneNumber)) {
      displayValidationMessage('Please enter a valid phone number (11 digits)', 'alert-danger');
    }

    // Validate message (at least 10 characters)
    const message = messageInput.value.trim();
    if (message.length < 10) {
      displayValidationMessage('Please enter a message with at least 10 characters', 'alert-danger');
    }

    // If no validation errors, submit the form and display success message //
    if (validationMsgContainer.children.length === 0) {
      displayValidationMessage('Your Enquiry has been Submitted', 'alert-success');
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

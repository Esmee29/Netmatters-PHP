<?php
// Load environment variables
require_once __DIR__ . '/../../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'db.env');
$dotenv->load();

// Initialize $successMessage
$successMessage = '';

require_once 'php/controllers/DatabaseController.php'; 
require_once 'php/controllers/ContactUsController.php'; 

$formPosted = $formInPost = $formValid = false;
$errorMessage = '';

try {
    // Provide the required database connection details
    $host = $_ENV['MySQL_DB_HOST'];
    $dbname = $_ENV['MySQL_DB_NAME'];
    $dbusername = $_ENV['MySQL_DB_USER_NAME'];
    $dbpassword = $_ENV['MySQL_DB_PASSWORD'];

    // Instantiate the DatabaseController with the provided details
    $db = new DatabaseController($host, $dbusername, $dbpassword, $dbname);

    // Connect to the database
    $db->connect();
    // Instantiate the ContactUsController with the DatabaseController
    $formController = new ContactUsController($db);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formInPost = true;
        $formPosted = $formController->send();
        $formValid = true;
        $formInPost = false;
        $errorMessage = '';

        // Check if the form was submitted successfully
        if ($formPosted) {
            $successMessage = 'Form submitted successfully!';
        }
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo "<script defer>console.log('Error: " . $errorMessage . "');</script>";
}
?>

<form id="form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="validation-msg-container"></div>


                            <div class="grid-2">
        <div class="form-group">
            <label class="required" for="name">Your Name</label>
            <input class="<?= $formInPost && !$formController->isValid('name') ? "error" : "" ?>" type="text" name="name" id="name"
                value="<?= $formInPost ? $formController->getName() : "" ?>">
        </div>
        <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" name="company" id="company"
                value="<?= $formInPost ? $formController->getCompany() : "" ?>">
        </div>
    </div>
    <div class="grid-2">
        <div class="form-group">
            <label class="required" for="email">Your Email</label>
            <input class="<?= $formInPost && !$formController->isValid('email') ? "error" : "" ?>" type="text" name="email" id="email"
                value="<?= $formInPost ? $formController->getEmail() : "" ?>">
        </div>
        <div class="form-group">
            <label class="required" for="telephone">Your Telephone Number</label>
            <input class="<?= $formInPost && !$formController->isValid('telephone') ? "error" : "" ?>" type="text" name="telephone" id="telephone"
                value="<?= $formInPost ? $formController->getTelephone() : "" ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="required" for="message">Message</label>
        <textarea class="<?= $formInPost && !$formController->isValid('message') ? "error" : "" ?>" name="message" id="message" cols="50"
            rows="10"><?= $formInPost ? $formController->getMessage() : "Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?" ?></textarea>
    </div>

    <div class="form-group form-checkbox">
        <input class="form-checkbox-input" type="checkbox" name="marketing" id="marketing" <?= $formInPost && !$formValid ? ($formController->getMarketing() ? "on" : " ") : "" ?> />
        <label class="form-checkbox-label" for="marketing">
            <span class="media-left">
                <span class="form-checkbox-button">
                    <span class="form-checkbox-icon"></span>
                </span>
            </span>
            <span class="form-checkbox-label-text">
                Please tick this box if you wish to receive marketing
                information from us. Please see our
                <a href="#">Privacy Policy</a> for more information on how
                we keep your data safe.
            </span>
        </label>
    </div>
    <p class="recaptcha">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a
            href="">Terms of Service</a> apply.</p>
    <div class="group">
        <button class="btn btn-form" type="submit" id="submit-btn">Send Enquiry</button>
        <small class="required-notice"><span>*</span> Fields Required</small>
    </div>
</form> 
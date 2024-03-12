<?php
require_once 'php/controllers/DatabaseController.php'; 
require_once 'php/controllers/ContactUsController.php'; 

$formPosted = $formInPost = $formValid = false;
$errorMessage = '';

$db = new DatabaseController();
$formController = new ContactUsController($db);

if (isset($_SERVER['REQUEST_METHOD'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formInPost = true;
        try {
            $formPosted = $formController->send();
            $formValid = true;
            $formInPost = false;
            $errorMessage = '';
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            echo "<script defer>console.log('Error: " . $errorMessage . "');</script>";
        }
    }
}
?>

<div class="container section">
    <div class="form-section">
                        <div class="netmatters-info">
                            <p><strong>Email us on:</strong></p>
                            <p><a class="h3 text-web">sales@netmatters.com</a></p> 
                            <p><strong>Business Hours:</strong></p>
                            <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                            <!-- container class for dropdown-content class will go here -->
                            <div class="drop-down">
                                <a class="drop-down-button">Out of Hours IT Support <i class="fa-solid fa-angle-down"></i> </a>
                                <div class="drop-down-content-hidden">
                                    <p>
                                        Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.
                                    </p>
                                    <p><strong>
                                            Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>
                                            Sunday 10:00 - 18:00
                                        </strong></p>
                                    <p>
                                        To log a critical task, you will need to call our main line number and select Option 2 to leave
                                        an Out of Hours voicemail. A technician will contact you on the number provided within 45
                                        minutes of your call.
                                    </p>
                                </div>
                            </div>
                        </div>
        <div class="contact-form">
                <form id="form" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        
                                    <div class="form-group-flex">
                                        
                                        <div class="form-group form-group-space-between form-name">
                                            <label class="required" for="name">Your Name</label>
                                                <input class="<?= $formInPost && !$formController->isValid('name') ? "error" : "" ?>" type="text" name="name" id="name"
                                                    value="<?= $formInPost ? $formController->getName() : "" ?>">
                                            </div>

                                        <div class="form-group form-group-space-between form-company">
                                            <label for="company">Company Name</label>
                                            <input type="text" name="company" id="company"
                                                    value="<?= $formInPost ? $formController->getCompany() : "" ?>">
                                            </div>

                                        <div class="form-group form-group-space-between form-email">
                                                <label class="required" for="email">Your Email</label>
                                                    <input class="<?= $formInPost && !$formController->isValid('email') ? "error" : "" ?>" type="text" name="email" id="email"
                                                        value="<?= $formInPost ? $formController->getEmail() : "" ?>">
                                                </div>

                                                <div class="form-group form-group-space-between form-telephone">
                                                    <label class="required" for="telephone">Your Telephone Number</label>
                                                        <input class="<?= $formInPost && !$formController->isValid('telephone') ? "error" : "" ?>" type="text" name="telephone" id="telephone" value="<?= $formInPost ? $formController->getTelephone() : "" ?>">
                                                </div>
                                    </div>
                                    

                                    <div class="form-group form-message">
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
                                                <a href="#" class="policy">Privacy Policy</a> for more information on how
                                                we keep your data safe.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-group form-label recaptcha-terms">
                                        <span>
                                            This site is protected by reCAPTCHA and the Google
                                            <a href="#"><u>Privacy Policy</u></a>
                                            and
                                            <a href="#"><u>Terms of Service</u></a>
                                            apply.
                                        </span>
                                    </div>
                                    <div class="group">
                                        <button class="btn btn-enquiry" type="submit">Send Enquiry</button>
                                        <small class="required-notice"><span>*</span> Fields Required</small>
                                    </div>
                                </form>
                            </div>
                </div>
        </div>    
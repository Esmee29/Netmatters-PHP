<div class="container section">
    <div class="form-section">
                        <div class="netmatters-info">
                            <p><strong>Email us on:</strong></p>
                            <p><a class="h3 text-web">sales@netmatters.com</a></p> <!-- May need to use mailto:sales@netters.com attribute -->
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
            <form method="POST" id="contact-form" action="contact-us.php">
                                    <div class="hidden-all ">
                                        <button type="button" class="close">×</button>
                                    </div>

                                    <div class="form-group-flex">
                                        
                                        <div class="form-group form-group-space-between form-name">
                                            <label for="name" class="required">Your Name</label>
                                            <input class="form-control" name="name" type="text" id="form-name" value="<?php echo $_SESSION['name'] ?? ''; ?>"> <!-- checking set variable, if set, display this ?? otherwise output this instead -->
                                        </div>

                                        <div class="form-group form-group-space-between form-company">
                                            <label for="company">Company Name</label>
                                            <input class="form-control" name="company" type="text" id="form-company" value="<?php echo $_SESSION['company'] ?? ''?>">
                                        </div>

                                        <div class="form-group form-group-space-between form-email">
                                            <label for="email" class="required">Your Email</label>
                                            <input class="form-control" name="email" type="text" id="form-email" value="<?php echo $_SESSION['email'] ?? ''?>">
                                        </div>

                                        <div class="form-group form-group-space-between form-telephone">
                                            <label for="telephone" class="required">Your Telephone Number</label>
                                            <input class="form-control" name="telephone" type="text" id="form-telephone" value="<?php echo $_SESSION['telephone'] ?? ''?>">
                                        </div>
                                    </div>
                                    

                                    <div class="form-group form-message">
                                        <label for="message" class="required">Message</label>
                                        <textarea class="form-control" name="message" id="form-message"><?php echo $_SESSION['message'] ?? 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?'?></textarea>
                                            
                                        
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <input class="form-checkbox-input" type="checkbox" name="marketing" id="marketing">
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
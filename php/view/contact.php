<?php
include 'php/view/components/contact/breadcrumb.php';
?>
<div class="container page-head">
    <div class="section">
        <h1>Our Offices</h1>
    </div>
</div>
<div class="container contact-content">
    <?php include 'php/view/components/contact/offices.php'; ?>
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
                    <?php include 'php/view/components/contact/contact-form.php'; ?>
                    </div> 
            </div>
        </div>

</div>

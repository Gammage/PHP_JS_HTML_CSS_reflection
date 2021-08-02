<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'header.php';
        ?>
    </head>

<?php
    include 'contactsubmit.php';
?>

    <body>
        
        <?php
            include 'side_menu.php';
          ?>
    
            <div class="main_overlay">
            </div>
    
            <div class="main">
            
            <?php
                include 'top_menus.php';
            ?>

            <div class="contact_page_head">
                <h1>How Can We Help You?</h1>
            </div>

            <div class="contact_wrap_total">

                <div class="contact_ctn">
                    <div class="contact_ctn_info">
                        <p><b>Call us on:</b></p>
                        <p>Wymondham Office<br><a href="#">01603 70 40 20</a></p>
                        <p>Gorleston Office<br><a href="#">01493 60 32 04</a></p>
                        <p><b>Email us on:</b><br><a href="#">Sales@netmatters.com</a></p>
                        <p><b>Business Hours:</b></p>
                        <p><b>Monday - Friday 07:00 - 18:00</b></p>
                    </div>
                    <div class="contact_ctn_dropdown">
                        <div id="dropdown_btn">
                            <p><b>Out of Hours IT support</b><i class="fas fa-arrow-down"></i></p>
                        </div>
                        <div class="hidden" id="hidden_content">
                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p><b>Monday - Friday 18:00 - 22:00</br> Saturday 08:00 - 16:00</br> Sunday 10:00 - 18:00</b></p>
                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                        </div>
                    </div>
                </div>    
                <div class="contact_ctn_container">
                <form method="post" name="contact_submit_form" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()" class="contact_ctn_form">

                    <div class="success_container <?php if($successMessage) {echo 'show';}?>" id="success_container">
                        <div class="modal_title_container">
                            <h2 id="modal_header_text">Enquiry Sent</h2>
                        </div>
                        <div class="cookie_text" >
                            <p class="modal_text" id="modal_paragraph_text">
                                We will get back to you within a few days. Thankyou for your Enquiry!
                            </p>
                        </div>
                        <div class="success_button_container">
                            <a class="success_return" id="success_return">Return</a>
                        </div>
                    </div>

                    <div class="success_container <?php if($failureMessage) {echo 'show';}?>" id="failure_container">
                        <div class="modal_title_container">
                            <h2 id="modal_header_text">Failed</h2>
                        </div>
                        <div class="cookie_text" >
                            <p class="modal_text" id="modal_paragraph_text">
                                Unknown error, please try again
                            </p>
                        </div>
                        <div class="success_button_container">
                            <a class="success_return" id="failure_return">Return</a>
                        </div>
                    </div>

                    <div class="form_push_this fm_pd">
                        <b>Your Name*</b>
                        <input type="text" id="name_input" class="form-control <?php if ($nameError){echo "has-error";} ?>" name="fname" value="<?php if (empty($name)) {
                            echo '';
                        } else {
                            echo $name;
                        }?>"></br>
                    </div>
                    <div class="form_push_this">
                        <b>Your Email*</b>
                        <input type="text" id="email_input" class="form-control <?php if ($emailvalid){echo "has-error";} ?>" name="femail" value="<?php if (empty($email)) {
                            echo '';
                        } else {
                            echo $email;
                        }?>"></br>
                    </div>
                    <div class="form_push_this fm_pd">
                        <b>Your telephone number*</b>
                        <input type="text" id="telephone_input" class="form-control <?php if ($phonevalid){echo "has-error";} ?>" name="fnumber" value="<?php if (empty($telephone)) {
                            echo '';
                        } else {
                            echo $telephone;
                        }?>"></br>
                    </div>
                    <div class="form_push_this">
                        <b>Subject*</b>
                        <input type="text" id="subject_input" class="form-control <?php if ($subjectvalid){echo "has-error";} ?>" name="fsubject" value="<?php if (empty($subject)) {
                            echo '';
                        } else {
                            echo $subject;
                        }?>"></br>
                    </div>
                    <div class="form_push_this_large">
                        <b>message*</b>
                        <textarea id="message_input" class="form-control <?php if ($messagevalid){echo "has-error";} ?> form-text" name="fmessage" value="<?php if (empty($subject)) {
                            echo '';
                        } else {
                            echo $subject;
                        }?>"></textarea></br>
                    </div>
                    <div class="checkbox_ctn_outer">
                        <div class="checkbox_ctn_left">
                            <input id="checkbox_input" class="checkbox_ctn" type="checkbox" name="fmarketing">
                        </div>
                        <p><b>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>. for more information on how we use your data</b></p>
                    </div>
                    <div class="contact_ctn_btn"><input type="submit" name="fsubmit" value="Send Enquiry">
                    </div>
                </form>
                </div>
            </div> 
            
            <?php
                include 'footer.php';
            ?>
        </div>

    </body>

    <!-- <script type="text/javascript" src="assets/js/validate_form.js"></script> -->
    <script type="text/javascript" src="assets/js/contact_submit.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/modal_overlay.js"></script>
    <script src="assets/js/sticky_header.js"></script>
    <script src="assets/js/burger_menu.js"></script>
    <script src="assets/js/slideshow.js"></script>
    <script src="assets/js/dropdown_menu.js"></script>

</html>






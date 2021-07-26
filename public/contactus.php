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

    <body id="contact_body">
        
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

                    <!-- blabla <?php echo $nameError; ?> -->
                <!-- <div class="contact_ctn_form2">     -->
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="contact_ctn_form">
                    <div class="form_push_this fm_pd">
                        <b>Your Name*</b>
                        <input type="text" class="form-control <?php if ($nameError){echo "has-error";} ?>" name="fname" value="<?php if (empty($name)) {
                            echo '';
                        } else {
                            echo $name;
                        }?>"></br>
                    </div>
                    <div class="form_push_this">
                        <b>Your Email*</b>
                        <input type="text" class="form-control <?php if ($emailvalid){echo "has-error";} ?>" name="femail" value="<?php if (empty($email)) {
                            echo '';
                        } else {
                            echo $email;
                        }?>"></br>
                    </div>
                    <div class="form_push_this fm_pd">
                        <b>Your telephone number*</b>
                        <input type="text" class="form-control <?php if ($phonevalid){echo "has-error";} ?>" name="fnumber" value="<?php if (empty($telephone)) {
                            echo '';
                        } else {
                            echo $telephone;
                        }?>"></br>
                    </div>
                    <div class="form_push_this">
                        <b>Subject*</b>
                        <input type="text" class="form-control <?php if ($subjectvalid){echo "has-error";} ?>" name="fsubject" value="<?php if (empty($subject)) {
                            echo '';
                        } else {
                            echo $subject;
                        }?>"></br>
                    </div>
                    <div class="form_push_this_large">
                        <b>message*</b>
                        <textarea class="form-control <?php if ($messagevalid){echo "has-error";} ?> form-text" name="fmessage" value="<?php if (empty($subject)) {
                            echo '';
                        } else {
                            echo $subject;
                        }?>"></textarea></br>
                    </div>
                    <div class="checkbox_ctn_outer">
                        <div class="checkbox_ctn_left">
                            <input class="checkbox_ctn" type="checkbox" name="fmarketing">
                        </div>
                        <p><b>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>. for more information on how we use your data</b></p>
                    </div>
                    <div class="contact_ctn_btn"><input type="submit" name="fsubmit" value="Send Enquiry">
                    </div>
                </form>
                <!-- </div> -->
            </div> 
            
            <?php
                include 'footer.php';
            ?>
        </div>

        <div class="success_container" id="success_container">
                <div class="success_title_container">
                    <h2>Enquiry Sent</h2>
                </div>
                <div class="cookie_text" >
                    <p class="modal_text">
                        You will get back to you within a few days. Thankyou for your Enquiry!
                    </p>
                </div>
                <div class="success_button_container">
                    <a>change settings</a>
                    <a id="success_return">Return</a>
                </div>
            </div>

            <div class="modal_overlay" id="modal_overlay" ></div>

            <!-- <div class="modal_container" id="modal_container">
                <div class="modal_title_container">
                    <h2>Cookies Policy</h2>
                </div>
                <div class="cookie_text" >
                    <p class="modal_text">
                        We use cookies to obtain aggregate data regarding site traffic and interaction, in order to identify user trends and obtain insights in order to continually improve our site. These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.
                    </p>
                    <p class="modal_text">
                        You can see a list of the other companies who use cookies on this website, by visiting cookie settings at the bottom of each page. For full details of how we use your personal information, and your rights in relation to it, view our privacy policy.
                    </p>
                </div>
                <div class="modal_button_container">
                    <a>change settings</a>
                    <a id="Accept_Cookies">accept cookies</a>
                </div>
            </div>

            <div class="modal_overlay" id="modal_overlay" ></div> -->

    </body>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/modal_overlay.js"></script>
    <script src="assets/js/sticky_header.js"></script>
    <script src="assets/js/burger_menu.js"></script>
    <script src="assets/js/slideshow.js"></script>
    <script src="assets/js/dropdown_menu.js"></script>

</html>






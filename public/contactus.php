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
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <b>Your Name*</b> <input type="text" class="form-control <?php if ($nameError){echo "has-error";} ?>" name="fname"></br>
                <b>Your Email*</b> <input type="text" class="form-control <?php if ($emailvalid){echo "has-error";} ?>" name="femail"></br>
                <b>Your telephone number*</b> <input type="text" class="form-control <?php if ($phonevalid){echo "has-error";} ?>" name="fnumber"></br>
                <b>Subject*</b> <input type="text" class="form-control <?php if ($subjectvalid){echo "has-error";} ?>" name="fsubject"></br>
                <b>message*</b> <input type="text" class="form-control <?php if ($messagevalid){echo "has-error";} ?>" name="fmessage"></br>
                <input type="checkbox" name="fmarketing"> <b>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>. for more information on how we use your data</b></br>
                </br><input type="submit" value="Send Enquiry"></br>
            </form> 
            
            <?php
                include 'footer.php';
            ?>
        </div>
    </body>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script src="assets/js/modal_overlay.js"></script>
    <script src="assets/js/sticky_header.js"></script>
    <script src="assets/js/burger_menu.js"></script>
    <script src="assets/js/slideshow.js"></script>

</html>






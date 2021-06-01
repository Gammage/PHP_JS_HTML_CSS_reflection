<?php include 'contactsubmit.php';?>

<!DOCTYPE html>
<html lang="en">

<?php
        include 'header.php';
      ?>
    <body id="body">
        
        <?php
            include 'side_menu.php';
          ?>
    
            <div class="main_overlay">
            </div>
    
            <div class="main">
            
                <?php
                    include 'top_menus.php';
                ?>

                blabla <?php echo $nameError; ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name: <input type="text" class="form-control <?php if ($nameError){echo "has-error";} ?>" name="fname">
                Your Email: <input type="text" class="form-control <?php if ($emailvalid){echo "has-error";} ?>" name="femail">
                Your telephone number: <input type="text" class="form-control <?php if ($phonevalid){echo "has-error";} ?>" name="fnumber">
                Subject: <input type="text" class="form-control <?php if ($subjectvalid){echo "has-error";} ?>" name="fsubject">
                message: <input type="text" class="form-control <?php if ($messagevalid){echo "has-error";} ?>" name="fmessage">
                <input type="checkbox" name="fmarketing"> Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a>. for more information on how we use your data
            <input type="submit">
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






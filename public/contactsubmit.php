
<?php

// backend - create, check to database. verify inputs, inputs send to database. connection closed.

$nameError = false;
$emailvalid = false;
$phonevalid = false;
$subjectvalid = false;
$messagevalid = false;
$successMessage = false;
$failureMessage = false;
$showModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "bengamma_bengammage";
    $password = "C5V8EYVwgSoA";
    $dbname = "bengamma_portfolio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
 
    $name =  mysqli_real_escape_string($conn, $_POST['fname']);

    if(strlen($name) > 0 && preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameError = false;

    } else {
        $nameError = true;
    }

    $email =  mysqli_real_escape_string($conn, $_POST['femail']);
    // $emailregex = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

    // Filter_validate_email or regex?
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailvalid = false;
    } else {
        $emailvalid = true;
    }

    $telephone =  mysqli_real_escape_string($conn, $_POST['fnumber']);

    if(strlen($telephone) > 0 && preg_match("/^[0-9]*$/",$telephone)) {
        $phonevalid = false;
    } else {
        $phonevalid = true;
    }

    $subject =  mysqli_real_escape_string($conn, $_POST['fsubject']);

    if(strlen($subject) > 0) {
        $subjectvalid = false;
    } else {
        $subjectvalid = true;
    }

    $message =  mysqli_real_escape_string($conn, $_POST['fmessage']);

    if(strlen($message) > 0) {
        $messagevalid = false;
    } else {
        $messagevalid = true;
    }

    $marketing = isset($_POST['fmarketing']);

    if(!$nameError && !$emailvalid && !$phonevalid && !$subjectvalid && !$messagevalid) {
        $sql = "INSERT INTO `contactus`(`name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES ('$name','$email','$telephone','$subject','$message','$marketing')";
        
        if(mysqli_query($conn, $sql)){

            $successMessage = true;
            $showModal = true;
            
            $name = '';
            $email = '';
            $telephone = '';
            $subject = '';
            $message = '';
            $marketing = '';

        } else {
            $failureMessage = true;
            $showModal = true;
        }
    } 

    $conn->close();

  // collect value of input field
 
}
?>
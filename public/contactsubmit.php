<?php

// backend - create, check to database. verify inputs, inputs send to database. connection closed.

$nameError = false;
$emailvalid = false;
$phonevalid = false;
$subjectvalid = false;
$messagevalid = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "netmatters";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

 
    $name =  mysqli_real_escape_string($conn, $_POST['fname']);

    //TODO add regex
    if(strlen($name) > 0) {
        $nameError = false;

    } else {
        $nameError = true;
    }

    $email =  mysqli_real_escape_string($conn, $_POST['femail']);
    // $emailregex = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

    //TODO add regex
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailvalid = false;
    } else {
        $emailvalid = true;
    }

    $telephone =  mysqli_real_escape_string($conn, $_POST['fnumber']);

    //TODO add regex
    if(strlen($telephone) > 0) {
        $phonevalid = false;
    } else {
        $phonevalid = true;
    }

    $subject =  mysqli_real_escape_string($conn, $_POST['fsubject']);

    //TODO add regex
    if(strlen($subject) > 0) {
        $subjectvalid = false;
    } else {
        $subjectvalid = true;
    }

    $message =  mysqli_real_escape_string($conn, $_POST['fmessage']);

    //TODO add regex
    if(strlen($message) > 0) {
        $messagevalid = false;
    } else {
        $messagevalid = true;
    }

    $marketing = isset($_POST['fmarketing']);

    if(!$nameError && !$emailvalid && !$phonevalid && !$subjectvalid && !$messagevalid) {
        $sql = "INSERT INTO `contactus`(`name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES ('$name','$email','$telephone','$subject','$message','$marketing')";

        

        if(mysqli_query($conn, $sql)){
        // echo "Records added successfully.";

                $name = '';
                $email = '';
                $telephone = '';
                $subject = '';
                $message = '';

                echo "<script type='text/javascript'>alert('Enquiry sent!')</script>";


        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); 

        }
    } 

    $conn->close();

  // collect value of input field
 
}
?>
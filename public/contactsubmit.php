<?php

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
    $telephone =  mysqli_real_escape_string($conn, $_POST['fnumber']);
    $subject =  mysqli_real_escape_string($conn, $_POST['fsubject']);
    $message =  mysqli_real_escape_string($conn, $_POST['fmessage']);
    $marketing = isset($_POST['fmarketing']);

    if(!$nameError) {
        $sql = "INSERT INTO `contactus`(`name`, `email`, `telephone`, `subject`, `message`, `marketing`) VALUES ('$name','$email','$telephone','$subject','$message','$marketing')";
        if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }

    $conn->close();

  // collect value of input field
 
}
?>
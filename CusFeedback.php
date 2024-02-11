<?php
include_once 'connection.php';
if(isset($_POST['save']))
{     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $sql = "INSERT INTO feedback VALUES ('$name','$email','$subject','$message')";
     if (mysqli_query($con, $sql)) 
     {
        header("Location: about.php");
        exit;
     } 
     else {
        echo "Error: " . $sql . "
" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>
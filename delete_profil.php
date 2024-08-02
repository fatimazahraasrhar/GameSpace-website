<?php
include "login_form.php";
$connection = mysqli_connect('localhost','root','','registration_db');
$email=$_SESSION['email'];
$verify_request=mysqli_query($connection,"SELECT email FROM users where email='$email' ");

if (mysqli_num_rows($verify_request)== 1){
    $request = "DELETE FROM users where email='$email' ";
    mysqli_query($connection, $request);

    $query="DELETE FROM reservations where email_user='$email'";
    mysqli_query($connection, $query);
    
    header('location:logout.php');
}    
?>
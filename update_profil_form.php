<?php
include "login_form.php";
$connection = mysqli_connect('localhost','root','','registration_db');
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email_up = $_POST['email'];
    $phone = $_POST['phone'];
    $email=$_SESSION['email'];
$verify_request=mysqli_query($connection,"SELECT email FROM users where email='$email' ");
if (mysqli_num_rows($verify_request)== 1){
    $request = "UPDATE users SET name='$name',email='$email_up',phone='$phone' where email='$email' ";
    $request1 = "UPDATE reservations SET email_user='$email_up' where email_user='$email' ";

    mysqli_query($connection, $request);
    mysqli_query($connection, $request1);

    $query = "SELECT * FROM users WHERE name='$name' AND email='$email_up' AND phone='$phone'";
    $result = mysqli_query($connection, $query);
 

        $user = $result->fetch_assoc();
        $_SESSION['id']=$user['id'];
        $_SESSION['name']=$user['name'];
        $_SESSION['email']= $user['email'];
        $_SESSION['phone']=$user['phone'];
        header('location:profil.php');
}    
}else{
    echo 'something went wrong try again';
}
?>
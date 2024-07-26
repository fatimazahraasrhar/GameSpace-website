<?php
$connection = mysqli_connect('localhost','root','','registration_db');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $request = "insert into users(name, email, password, phone) values('$name','$email','$password','$phone')";

    mysqli_query($connection, $request);
    header('location:login.php');
}else{
    echo 'something went wrong try again';
}
?>
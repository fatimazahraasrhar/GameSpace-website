<?php
$connection = mysqli_connect('localhost','root','','registration_db');
$islogin = false;
if (isset($_POST[''])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($connection->connect_error){
        die("connection failed: ". $connection->connect_error);
    }
    $query = "SELECT * FROM registration_form WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    if($result->num_rows == 1){
        header("location:home.php");
        $islogin = true;
        exit();
    }else{

        exit();
    }

$connection->close();

}
?>
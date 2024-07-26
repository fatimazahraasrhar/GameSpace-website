<?php
session_start();
$connection = mysqli_connect('localhost','root','','registration_db');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $islogin=false;
    $_SESSION['islogin']=  false;
    if($connection->connect_error){
        die("connection failed: ". $connection->connect_error);
    }
    $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);


    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        $_SESSION['id']=  $user['id'];
        $_SESSION['email']= $user['email'];
        $_SESSION['name']=$user['name'];
        $_SESSION['phone']=$user['phone'];

        header("location:profil.php");
    }else{

        exit();
    }

$connection->close();

}
?>
<?php
session_start();
$connection = mysqli_connect('localhost','root','','registration_db');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
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
        $_SESSION['islogin']=true;
        header("location:profil.php");
    }else{
        echo "this user doesn't exist!!";
        exit();
    }

$connection->close();

}
?>
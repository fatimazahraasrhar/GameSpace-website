<?php
$connection = mysqli_connect('localhost','root','','registration_db');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

$verify_request=mysqli_query($connection,"SELECT email FROM users where email='$email'");
if (mysqli_num_rows($verify_request)> 0){
    echo "<div><p> This email is used try another one !!</P>";
}else{
    $request = "UPDATE users SET name='$name',password='$password',email='$email',password='$password'";

    mysqli_query($connection, $request);
    header('location:login.php');
}
}else{
    echo 'something went wrong try again';
}
?>
<?php
$connection = mysqli_connect('localhost','root','','registration_db');
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $console = $_POST['console'];
    $pc = $_POST['pc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $period = $_POST['period'];

    $request = "insert into registration_form(name, email, password, phone, console, pc, date, time, period) values('$name','$email',$password','$phone','$console','$pc','$date','$time','$period')";

    mysqli_query($connection, $request);
    header('location:register.php');
}else{
    echo 'something went wrong try again';
}
?>
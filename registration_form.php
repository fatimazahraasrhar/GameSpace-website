<?php
$connection = mysqli_connect('localhost','root','','registration_db');
if (isset($_POST['send'])) {
    $email_user = $_POST['email_user'];
    $console = $_POST['console'];
    $pc = $_POST['pc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $period = $_POST['period'];

    $request = "insert into reservations(email_user, console, pc, date, time, period) values('$email_user','$console','$pc','$date','$time','$period')";

    mysqli_query($connection, $request);
    header('location:profil.php');
    
}else{
    echo 'something went wrong try again';
}
?>
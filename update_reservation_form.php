<?php 
session_start();
$connection = mysqli_connect('localhost','root','','registration_db');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id_reservation= $_GET['id'];
$query = "SELECT * FROM reservations  where id_reservation='$id_reservation' ";

$result=mysqli_query($connection, $query);
$reservation = $result->fetch_assoc();

if (isset($_POST['send'])) {
    $email_user = $_SESSION['email'];
    $console = $_POST['console'];
    $screen = $_POST['screen'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $period = $_POST['period'];


    $request = "UPDATE reservations SET console='$console', screen='$screen', date='$date',time='$time',period='$period' where id_reservation='$id_reservation' ";
    if (mysqli_query($connection, $request)) {
        header('Location: profil.php');
        exit();
    } else {
        echo 'Error updating reservation: ';
    }
}
?>
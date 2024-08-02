<?php 
session_start();
$connection = mysqli_connect('localhost','root','','registration_db');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id_reservation= $_GET['id'];
$query = "DELETE FROM reservations where id_reservation='$id_reservation' ";


    if (mysqli_query($connection, $query)) {
        header('Location: profil.php');
        exit();
    } else {
        echo 'Error updating reservation: ';
    }

?>
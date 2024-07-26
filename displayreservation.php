<?php
$connection = mysqli_connect('localhost','root','','registration_db');

$reservations = array();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    if($connection->connect_error){
        die("connection failed: ". $connection->connect_error);
    }
    $query = "SELECT * FROM reservations WHERE id_user = '$id'";
    $result = mysqli_query($connection, $query);
    

    while ($row = mysqli_fetch_assoc($result)) {
        $reservations[] = $row;
    }

$connection->close();

}
?>

<section class="profil">
    <div class="content">
    <?php while ($reservations = mysqli_fetch_assoc($result)) {?>
    <h3>my reservation </h3>
    <p>console :<?= $reservations['console'] ?></p>
    <p>pc : <?= $reservations['pc'] ?> </p>
    <p>date : <?= $reservations['date'] ?> </p>
    <p>time : <?= $reservations['time'] ?> </p>  
    <?php } ?>
    </div>
  
</section>

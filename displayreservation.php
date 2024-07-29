<?php
$connection = mysqli_connect('localhost','root','','registration_db');

// $reservations = array();

if (isset($_SESSION['id'])) {
    $email = $_SESSION['email'];

    if($connection->connect_error){
        die("connection failed: ". $connection->connect_error);
    }
    $query = "SELECT * FROM reservations WHERE email_user = '$email'";
    $result = mysqli_query($connection, $query);
    
    // while ($row = mysqli_fetch_assoc($result)) {
    //     $reservations[] = $row;
    // }

}
?>

<section class="profil">
    <?php while ($reservation = mysqli_fetch_assoc($result)): ?>
                <div class="content">
                    <h3>My reservation</h3>
                    <p>Console: <?= $reservation['console'] ?></p>
                    <p>PC: <?= $reservation['pc'] ?></p>
                    <p>Date: <?= $reservation['date'] ?></p>
                    <p>Time: <?= $reservation['time'] ?></p>
                    <p>Period: <?= $reservation['period'] ?></p>
                </div>
            <?php endwhile; ?>
  
</section>

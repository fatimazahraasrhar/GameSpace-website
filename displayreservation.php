<?php
$connection = mysqli_connect('localhost','root','','registration_db');

// $reservations = array();

if (isset($_SESSION['email'])) {
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
<?php if($result->num_rows == 0) {?>
    <section class="reservation">
        <div class="content">
    <h3>no reservations yet </h3>
    <a href="register.php" class="btn">make a reservation?</a>
    </div>
    </section>
<?php } else { ?>
    <h3 class="reservations-title"> my reservations : </h3>
    <?php while ($reservation = mysqli_fetch_assoc($result)): ?>
        <section class="reservation">
        <div class="content">
                    <h3>reservation :</h3>
                    <p>Console: <?= $reservation['console'] ?></p>
                    <p>screen: <?= $reservation['screen'] ?></p>
                    <p>Date: <?= $reservation['date'] ?></p>
                    <p>Time: <?= $reservation['time'] ?></p>
                    <p>Period: <?= $reservation['period'] ?></p>
                    <p>id reservation: <?= $reservation['id_reservation'] ?></p>

                    <a href="update_reservation.php?id=<?= $reservation['id_reservation'] ?>" class="btn">update my reservation</a>

                    </div>
                    </section>
            <?php  endwhile; }?>

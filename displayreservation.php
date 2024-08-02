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
    <?php $i=1;?>
    <h3 class="reservations-title"> my reservations : </h3>
    <?php while ($reservation = mysqli_fetch_assoc($result)): ?>
        <section class="reservation">
        <div class="content">
                    <h3>reservation <?php echo $i; ?> :</h3>
                    <p>Console: <?= $reservation['console'] ?></p>
                    <p>screen: <?= $reservation['screen'] ?></p>
                    <p>Date: <?= $reservation['date'] ?></p>
                    <p>Time: <?= $reservation['time'] ?></p>
                    <p>Period: <?= $reservation['period'] ?></p>
                    <?php $i++; ?>
                    <?php $dateNow = Time();?> 
                 
                    <?php $reservationDate =  strtotime($reservation['date']); ?>

                    <?php if($reservationDate > $dateNow) { ?>
                    <a href="update_reservation.php?id=<?= $reservation['id_reservation'] ?>" class="btn">update my reservation</a>
                    <a href="delete_reservation.php?id=<?= $reservation['id_reservation'] ?>" class="btn"> cancel my reservation</a>
                    <?php } ?>
                    </div>
                    </section>
            <?php  endwhile; }?>

<!-- <div class="container">
<div class="popup1" id="popup1" >
    <h3>delete reservation</h3>
    <p>are you sure you want to delete reservation </p>
    <a id="deletelink" type="button" href="#"  class="btn">delete my reservation</a>
    </div>
    </div> -->
    
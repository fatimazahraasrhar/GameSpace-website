<?php 
include('login_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/gamespaceicon.png"> <!-- icon -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
    <!-- swiper css link  -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- header section starts  -->
 <section class="header">

 <a href="home.php" class="logo">GameSpace</a>
 <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <!-- <a href="events.php">events</a> -->
    <a href="register.php">book</a>
    <a href="logout.php">Logout</a><a style="color:#8C3061"><i class="fa-solid fa-user"></i><?php echo htmlspecialchars($_SESSION['name']); ?></a>
</nav>
<div id="menu-btn" class="fas fa-bars"> </div>
 </section>
<!-- header section ends  -->

<!-- display profile section starts -->
 <section class="profil">
    <div class="content">
    <h3>my profil</h3>
    <p>name : <?= $_SESSION['name'] ?> </p>
    <p>email : <?= $_SESSION['email'] ?> </p>
    <p>phone : <?= $_SESSION['phone'] ?> </p>
    <a href="update_profil.php" class="btn">update my profil</a>
    <a type="submit" href="delete_profil.php" class="btn">delete my profil</a>
    </div>
</section>
<!-- display profile section ends -->

<!-- display pop up starts  -->
 <!-- <div class="container">
    <div class="popup" id="popup" id="blur">
    <h3>delete account</h3>
    <p>are you sure you want to delete account </p>
    <a type="button" href="delete_profil.php" onclick="togglePopup()" class="btn">delete my account</a>
    </div>
    </div> -->
<!-- display pop up ends  -->

<!-- <div class="container">
<div class="popup" id="popup1" >
    <h3>delete reservation</h3>
    <p>are you sure you want to delete reservation </p>
    <a type="button" href="delete_reservation.php" onclick="togglePopup1()" class="btn">delete my reservation</a>
    </div>
    </div> -->
    
<!-- display reservation section starts -->
<?php include 'displayreservation.php'; ?>
<!-- display reservation section ends -->

<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>book</a>
        <!-- <a href="events.php"><i class="fas fa-angle-right"></i>events</a> -->
        </div>

        <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 0668950581</a>
        <a href="#"  style= "text-transform: lowercase"> <i class="fas fa-envelope"></i> gamespace001@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Casablanca, morocco</a>
        </div>

        <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> Game Space</a>
        <a href="#"> <i class="fab fa-discord"></i> GSpace</a>
        <a href="#"> <i class="fab fa-instagram"></i> gamespace001</a>
        <a href="#"> <i class="fab fa-linkedin"></i> GameSpace inc</a>
        </div>
    </div>
    <div class="credit"> created by fatima zahra asrhar </div>
</section>


<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custon js file -->
 <script src="script.js"></script>
</body>
</html>

<?php 
require_once("login_form.php");
require_once("registration_form.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>events</title>
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
    <a href="events.php">events</a>
    <a href="register.php">register</a>
    <a href="login.php">login</a>
</nav>
<div id="menu-btn" class="fas fa-bars"> </div>
 </section>
<!-- header section ends  -->

<!-- events section starts -->
<div class="heading" style="background:url(gaming-bg1.jpg) no-repeat; height: 40vh;">
<h1>profil</h1>
</div>
<!-- display profile section starts -->
 <section class="profil">
    <div class="content">
    <h3>my profile</h3>
    <p>id :<?= $_SESSION['id'] ?></p>
    <p>name : <?= $_SESSION['name'] ?> </p>
    <p>email : <?= $_SESSION['email'] ?> </p>
    <p>phone : <?= $_SESSION['phone'] ?> </p>
    </div>
</section>
<!-- display profile section ends -->

<!-- display reservation section starts -->
<?php include 'displayreservation.php'; ?>
<!-- display reservation section ends -->

<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="events.php"><i class="fas fa-angle-right"></i>events</a>
        <a href="register.php"><i class="fas fa-angle-right"></i>register</a>
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
        <a href="#"  style= "text-transform: lowercase"> <i class="fas fa-envelope"></i> gamespace@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i> Casablanca, morocco</a>
        </div>

        <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        <a href="#"> <i class="fab fa-x-twitter"></i> X</a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
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

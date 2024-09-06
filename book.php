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
    <title>make a reservation?</title>
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
    <?php if(!isset($_SESSION['email'])) echo "<a href='book.php'>book</a>";?>
    <?php if(!isset($_SESSION['email'])) echo "<a href='login.php'>login</a>";?>
    <?php if(!isset($_SESSION['email'])) echo "<a href='sign.php'>sign up</a>";?>
    <?php if(isset($_SESSION['email'])) echo "<a href='register.php'>book</a>";?>
    <?php if(isset($_SESSION['email'])) echo "<a href='logout.php'>logout</a>" ;?>
    <?php if(isset($_SESSION['email'])) echo "<a  href='profil.php' style='color:#8C3061'><i class='fa-solid fa-user'></i>".$_SESSION['name'] ."</a>" ;?> 
</nav>
<div id="menu-btn" class="fas fa-bars"> </div>
 </section>
<!-- header section ends  -->

<section class="about" >
    <div class="content">
    <h3>how to make a reservation ?</h3>
    <!-- <h4>Your Premier Gaming Destination</h4> -->
    <p style="text-align: left;">To make a reservation, you need to be a registered user.<a href="sign.php" target="_blank" style="text-decoration: underline;"> Sign up</a> for a new account or <a href="login.php" target="_blank" style="text-decoration: underline;"> login</a> if you already have one.</p>
    <p style="text-align: left;">Once you're logged in to your account, go to the reservation section of our website.</p>
    <p style="text-align: left;">Select the gaming console you'd like to use.</p>
    <p style="text-align: left;">Pick the screen you prefer for your gaming session.</p>
    <p style="text-align: left;">Choose the date for your gaming session.</p>
    <p style="text-align: left;">Select the time you want your reservation to begin.</p>
    <p style="text-align: left;">Decide how long you want to reserve the gaming station for.</p>
    <p style="text-align: left;">Your reservation will be processed, and you can enjoy your gaming session at the selected time and date.</p>
</div>
</section>
<!-- about section ends -->


<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <?php if(!isset($_SESSION['email'])) echo " <a href='book.php'><i class='fas fa-angle-right'></i>book</a>";?>
        <a href="register.php"><i class="fas fa-angle-right"></i>login</a>
        <a href="register.php"><i class="fas fa-angle-right"></i>sign up</a>
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

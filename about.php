<?php 
include('login_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
    <?php if(!isset($_SESSION['email'])) echo "<a href='login.php'>login</a>";?>
    <?php if(isset($_SESSION['email'])) echo "<a href='register.php'>Register</a>";?>
    <?php if(isset($_SESSION['email'])) echo "<a href='logout.php'>logout</a>" ;?>
    <?php if(isset($_SESSION['email'])) echo "<a  href='profil.php' style='color:#8C3061'><i class='fa-solid fa-user'></i>".$_SESSION['name'] ."</a>" ;?> 
</nav>
<div id="menu-btn" class="fas fa-bars"> </div>
 </section>
<!-- header section ends  -->

<!-- about section starts -->
<div class="heading" style="background:url(img/gaming-bg1.jpg) no-repeat; height: 40vh;">
<h1>about us</h1>
</div>

<section class="about" >
    <div class="content">
    <h3>About GameSpace</h3>
    <!-- <h4>Your Premier Gaming Destination</h4> -->
    <p>GameSpace is your ultimate hub for gaming excellence, offering a state-of-the-art lounge equipped with the latest consoles and high-definition screens. We are dedicated to delivering an unparalleled gaming experience where excitement and immersion are at the forefront.</p>
    <!-- <h4>Our Mission</h4> -->
    <p>Our mission is to create an engaging environment where gamers of all levels can enjoy their favorite titles, participate in thrilling tournaments, and connect with a passionate community. We aim to be more than just a gaming venue—our goal is to foster a space where everyone feels welcome and valued.</p>
    <!-- <h4>Facilities & Features</h4> -->
    <p>At GameSpace, you'll find a thoughtfully designed lounge with cutting-edge gaming technology. Our comfortable seating and high-speed internet ensure that every gaming session is smooth and enjoyable. Whether you're here for competitive play or casual fun, our facilities are crafted to enhance your experience.</p>
    <!-- <h4>Community & Events</h4> -->
    <p>We believe in building a vibrant gaming community. Our regular events and tournaments provide exciting opportunities for gamers to showcase their skills, compete with peers, and meet new friends. GameSpace is not just about playing games—it's about connecting with fellow enthusiasts and being part of a dynamic community.</p>
    <!-- <h4>Get In Touch</h4> -->
    <p>Ready to experience GameSpace for yourself? For more information or to book your next session, contact us at <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=fatimazahraasrhar@gmail.com" target="_blank" style="text-transform: lowercase">fatimazahraasrhar@gmail.com</a> or follow us on social media for the latest updates and event announcements. We look forward to welcoming you to GameSpace!</p>
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

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
    <title>GameSpace</title>
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

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(img/slide1.jpg) no-repeat;">
                <div class="content">
                    <h3>welcome to GameSpace!</h3>
                    <span>Step into the ultimate gaming hub.<br> Join us for top-notch consoles, thrilling games, and an epic experience.<br> Ready to play?</span>
                    <a href="about.php" class="btn">discover more</a>
                </div>

            <!-- </div> -->
            <!-- <div class="swiper-slide slide" style="background:url(img/slide2.jpg) no-repeat">
                <div class="content">
                    <h3>game of the month</h3>
                    <span>Experience the epic journey of Stellar Blade,  <br> our game of the month! Dive into an extraordinary <br>  world of futuristic combat and breathtaking  <br> visuals.</span>
                    <a href="register.php" class="btn">play now</a>
                </div>

            </div> -->
            <!-- <div class="swiper-slide slide" style="background:url(img/slide3.jpg) no-repeat">
                <div class="content">
                <h3>FIFA Tournament</h3>
                    <span><p><strong>Date:</strong> August 15th</p>
                    <p><strong>Time:</strong> 5:00 PM - 9:00 PM</p>
                    <p>Join us for an exciting FIFA tournament! Compete with the best players <br> and stand a chance to win amazing prizes.</p>
                    <p><strong>Prizes:</strong> Exclusive merchandise, free gaming hours, and more!</p></span>
                    <a href="register.php" class="btn">Register Now</a>
                </div>

            </div> -->
        <!-- </div> -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>
<!-- home section ends -->


<!-- home about section starts -->
<section class="home-about">
    <div class="content">
    <h3>about us</h3>
    <p>Welcome to GameSpace, the ultimate destination for gamers of all ages and skill levels! Founded by passionate gamers, our state-of-the-art lounge features cutting-edge gaming stations, exciting tournaments, and a vibrant community. Whether you're here to play casually or compete professionally, GameSpace offers an immersive and inclusive environment where everyone can have fun and make new friends. Join us for the latest games, exclusive events, and unbeatable experiences!</p>
    <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!-- home about section ends -->

<!-- home packages section starts -->
 
<!-- home packages section ends -->



<!-- services section start -->
 <section class="services">
    <h1 class="heading-title">Our consoles</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/playstationlogo.png" alt="">
                <h2>playstation</h2>
            </div>
            <div class="box">
                <img src="img/xboxlogo.png" alt="">
                <h2>xbox</h2>
            </div>
            <div class="box">
                <img src="img/nintendoswitchlogo.png" alt="">
                <div>
                    <h2>nintendo switch</h2>
                 </div>
            </div>
        </div>
        <h1 class="heading-title">Our screens</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/hplogo.jpg" alt="">
                <h2>HP</h2>
            </div>
            <div class="box">
                <img src="img/delllogo.jpg" alt="">
                <h2>dell</h2>
            </div>
            <div class="box">
                <img src="img/asuslogo.jpg" alt="">
                <h2>asus</h2>
            </div>
            <div class="box">
                <img src="img/samsunglogo.jpg" alt="">
                <div>
                    <h2>samsung</h2>
                </div>
            </div>
        </div>
 </section>
<!-- services section ends -->





<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <?php if(!isset($_SESSION['email'])) echo " <a href='book.php'><i class='fas fa-angle-right'></i>book</a>";?>
        <a href="login.php"><i class="fas fa-angle-right"></i>login</a>
        <a href="sign.php"><i class="fas fa-angle-right"></i>sign up</a>
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
        <a href="#" style= "text-transform: lowercase"> <i class="fas fa-envelope"></i> gamespace001@gmail.com</a>
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

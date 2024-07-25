<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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


<div class="heading" style="background:url(gaming-bg1.jpg) no-repeat; height: 40vh;">
<h1>register now</h1>
</div>
<!-- register section starts -->

<!-- register section ends -->
<section class="registration">
    <h1 class="heading-title">join the ultimate gaming experience!</h1>
    <form action="registration_form.php" method="post" class="registration-form">
        <div class="flex">
            <div class="inputbox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>password :</span>
                <input type="password" placeholder="enter your password" name="password">
            </div>
            <div class="inputbox">
                <span>phone :</span>
                <input type="phone" placeholder="enter your phone" name="phone">
            </div>
            <div class="inputbox">
                <span>console :</span>
                <input type="text" placeholder="choose your console" name="console">
            </div>
            <div class="inputbox">
                <span>pc :</span>
                <input type="text" placeholder="choose your pc" name="pc">
            </div>
            <div class="inputbox">
                <span>date :</span>
                <input type="date" name="date">
            </div>
            <div class="inputbox">
                <span>debut time :</span>
                <input type="time" name="time">
            </div>
            <div class="inputbox">
                <span>period in minutes :</span>
                <input type="number" placeholder="enter your period" name="period">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>



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

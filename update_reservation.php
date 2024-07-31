<?php include('update_reservation_form.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/gamespaceicon.png"> <!-- icon -->
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
    <?php if(!isset($_SESSION['email'])) echo "<a href='register.php'>Register</a>";?>
    <?php if(!isset($_SESSION['email'])) echo "<a href='login.php'>login</a>";?>
    <?php if(isset($_SESSION['email'])) echo "<a href='logout.php'>logout</a>" ;?>
    <?php if(isset($_SESSION['email'])) echo "<a  href='profil.php' style='color:#8C3061'><i class='fa-solid fa-user'></i>".$_SESSION['name'] ."</a>" ;?> 
</nav>
<div id="menu-btn" class="fas fa-bars"> </div>
 </section>
<!-- header section ends  -->

<!-- register section starts -->
<section class="sign">
    <h1 class="heading-title">update your reservation!</h1>
    <form action="" method="post" class="sign-form">
        <div class="flex">
            <div class="inputbox">
                <span>new console :</span>
                <input type="text" placeholder="choose your console" list="console" name="console" value="<?php echo $reservation['console']; ?>">
                <datalist id="console">
                <option value="xbox">xbox</option>
                <option value="playstation">playstation</option>
                <option value="nintendo">nintendo</option>
                </datalist>
            </div>
            <div class="inputbox">
                <span>new screen :</span>
                <input type="text" placeholder="choose your screen" list="screen" name="screen" value="<?php echo $reservation['screen'] ?>">
                <datalist id="screen">
                <option value="hp">hp</option>
                <option value="dell">dell</option>
                <option value="asus">asus</option>
                <option value="samsung">samsung</option>
                </datalist>
            </div>
            <div class="inputbox">
                <span>new date :</span>
                <input type="date" name="date" value="<?php echo $reservation['date'] ?>">
            </div>
            <div class="inputbox">
                <span>new debut time :</span>
                <input type="time" name="time" value="<?php echo $reservation['time'] ?>">
            </div>
            <div class="inputbox">
                <span>new period in minutes :</span>
                <input type="number" placeholder="enter your period" name="period" value="<?php echo $reservation['period'] ?>">
            </div>
        </div>
        <input type="submit" value="update" class="btn" name="send">
    </form>
</section>
<!-- register section ends -->


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

<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Kontakti - M&#235so Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../css/contact-style.css">
    <link rel="stylesheet" type="text/css" href="../../css/main-style.css">
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
</head>

<body>

    <header>  <div id="header-logo">
        <a href="dashboard.php" alt="dashboard">
            <img alt="logo" src="../../images/main/laptop-logo.png" />
        </a>
    </div>
    <div id="header-list">
        <a href="../courses.php">KURSET</a>
<<<<<<< HEAD
=======
        
>>>>>>> 56e3bf613b7da1ea2679b99e7ff301c15392285b
        <a href="../about-us.php">RRETH NESH</a>
        <a href="contact.php">KONTAKTI</a>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == '1'){
        ?>
        <a href="settings.php">SETTINGS</a>
        <?php }
        ?>
    </div>  
    <div id="login-register">
    <?php if (!isset($_SESSION["role"])){
        ?>
        <a href="../login.php">KY&#199U</a>
        <a href="../register.php">REGJISTROHU</a>
        <?php } if (isset($_SESSION["role"])){
        ?>
        <a href="../../Logics/logout.php">LOG OUT</a>
        <?php }?>
    </div>
    </header>
    <form id="contact" method="post" action="contactClass.php">
        <div id="contact-pic">
            <img src="../../images/contact/img-01.png" alt="IMG">
        </div>
        <div id="contact-form">
            <div id="talk">
                <h1>Trego najsen</h1>
            </div>
            <div class="write">
                <input class="input1" type="text" name="contact-name" placeholder="Emri">
            </div>
            <div class="write">
                <input class="input1" type="text" name="contact-email" placeholder="Email">
            </div>
            <div class="write">
                <input class="input1" type="text" name="subject" placeholder="Tema">
            </div>
            <div class="write">
                <textarea id="form-message" class="input1" name="message" placeholder="Mesazhi"></textarea>
            </div>
            <button id="submit" type="submit" name="contact-submit" onclick="validate(2)">D&#235rgo Email</button>
        </div>

    </form>

    <footer>
    <div id="download">
        <p>B&#235ni download app-in ton&#235 p&#235r nj&#235 eksperienc&#235 m&#235 t&#235 mir&#235</p>
        <div id="appplay">
            <a href="https://www.apple.com/app-store/"><img alt="ios-download" src="../../images/main/downloads/ios-icon.jpg" /></a>
            <a href="https://play.google.com/store/apps"><img alt="android-download" src="../../images/main/downloads/android-icon.png" /></a>
        </div>
    </div>
    <div id="info">
        <div id="location">
            <p>Nr. 70, te Shpina, mrapa Albit</p>
            <p>Prishtin&#235, 10000</p>
        </div>
        <div id="links">
            <ul>
                <li><a href="courses.php">KURSET</a></li>
                <li><a href="about-us.php">RRETH NESH</a></li>
                <li><a href="contact.php">KONTAKTI</a></li>
            </ul>
        </div>
        <div id="social-medias">
            <a href="https://www.facebook.com/"><img alt="facebook" src="../../images/main/social media/facebook-icon.png" /></a>
            <a href="https://www.instagram.com/"><img alt="instagram" src="../../images/main/social media/instagram-icon.png" /></a>
            <a href="https://www.reddit.com/r/ProgrammerHumor/"><img alt="reddit" src="../../images/main/social media/reddit-icon.png" /></a>
        </div>
    </div>
    </footer>
    <!-- <script src="../../js/login-register-contact.js"></script> -->
</body>

</html>
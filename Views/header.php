
<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main-style.css" />
</head>

<body>
    <div id="header-logo">
        <a href="index.php" alt="home">
            <img alt="logo" src="../images/main/laptop-logo.png" />
        </a>
    </div>
    <div id="header-list">
        <a href="courses.php">KURSET</a>
        <a href="about-us.php">RRETH NESH</a>
        <a href="Contact/contact.php">KONTAKTI</a>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == '1'){
        ?>
        <a href="settings.php">SETTINGS</a>
        <?php }
        ?>
        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == '0'){
        ?>
        <a href="profile.php">PROFILE</a>
        <?php }
        ?>
    </div>
    <div id="login-register">
    <?php if (!isset($_SESSION["role"])){
    ?>
        <a href="login.php">KY&#199U</a>
        <a href="register.php">REGJISTROHU</a>
    <?php }
        if (isset($_SESSION["role"])){
    ?>
        <a href="../Logics/logout.php" style="width: 95px;">LOG OUT</a>
    <?php }?>
    </div>
</body>

</html>
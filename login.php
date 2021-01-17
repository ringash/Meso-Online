<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ky&#231u - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link rel="stylesheet" href="css/main-style.css" />
    <link rel="stylesheet" href="css/dashboard-style.css" />
    <link rel="stylesheet" href="css/about-us-style.css" />
    <link rel="stylesheet" href="css/login-style.css" />
</head>

<body>
<header>
    <?php include 'header.php';
    ?>
</header>
    <div id="login-form">
        <div id="user-img">
            <img alt="user" src="images/login/user.png" />
        </div>
        <div class="u-p">
            <p>Username</p>
            <input class="input1" type="text" name="username">
        </div>
        <div class="u-p">
            <p>Password</p>
            <input class="input1" type="password" name="password">
        </div>
        <div>
            <button id="submit" type="button" onclick="validate(0)">Ky&#231u</button>
        </div>
        <div id="click-here">
            <a href="register.php">Nuk ke account?</a>
        </div>
    </div>
    <script src="js/login-register-contact.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Regjistrohu - M&#235so online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link rel="stylesheet" href="css/main-style.css" />
    <link rel="stylesheet" href="css/dashboard-style.css" />
    <link rel="stylesheet" href="css/about-us-style.css" />
    <link rel="stylesheet" href="css/register-style.css" />
</head>

<body>
    <header>
        <?php include 'header.php';
        ?>
    </header>
    <div id="register-form">
        <div id="user-img">
            <img alt="user" src="images/login/user.png" />
        </div>
        <div id="emri" class="inputs">
            <p>Username</p>
            <input class="input1" type="text" name="username">
        </div>
        <div id="email" class="inputs">
            <p>Email</p>
            <input class="input1" type="email" name="email">
        </div>
        <div id="password" class="inputs">
            <p>Password</p>
            <input class="input1" type="password" name="password">
        </div>
        <div id="confirm-password" class="inputs">
            <p>Confirm Password</p>
            <input class="input1" type="password" name="password">
        </div>
        <div>
            <button id="submit" type="button" onclick="validate(1)">Regjistrohu</button>
        </div>
        <div id="click-here">
            <a href="login.php ">Ke account?</a>
        </div>
    </div>
    <script src="js/login-register-contact.js"></script>
</body>

</html>
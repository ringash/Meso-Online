<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Regjistrohu - M&#235so online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main-style.css" />
    <link rel="stylesheet" href="../css/dashboard-style.css" />
    <link rel="stylesheet" href="../css/about-us-style.css" />
    <link rel="stylesheet" href="../css/register-style.css" />
</head>

<body>
    <header>
        <?php include 'header.php';
        ?>
    </header>

    <form class="register forma shown" id="register-form" action="loginVerify.php" method="post">
        <div id="user-img">
            <img alt="user" src="../images/login/user.png" />
        </div>
        <div id="emri" class="inputs">
            <p>Username</p>
            <input class="input1" type="text" name="register-username">
        </div>
        <div id="email" class="inputs">
            <p>Email</p>
            <input class="input1" type="email" name="email">
        </div>
        <div id="password" class="inputs">
            <p>Password</p>
            <input class="input1" type="password" name="register-password">
        </div>
        <div id="confirm-password" class="inputs">
            <p>Confirm Password</p>
            <input class="input1" type="password" name="confpassword">
        </div>      
        <div>
            <button id="submit" type="submit"  name="reg-btn" value="register">Regjistrohu</button>
        </div>
        <div id="cond-link">
            <a href="#" onclick="show(1)">Lexo kushtet e regjistrimit</a>
        </div>
        <div id="click-here">
            <a href="login.php ">Ke account?</a>
        </div>
    </form>

    <div class="terms forma hidden" id="termsNCond">
        <div id="user-img">
            <img alt="user" src="images/login/user.png" />
        </div>
        <h3>Kushtet tona t&#235 regjistrimit:</h3>
        <div id="conditions">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Mauris a diam maecenas sed enim ut. Gravida rutrum quisque non tellus orci.
                Diam quam nulla porttitor massa id. Erat pellentesque adipiscing commodo elit at imperdiet.
                Sit amet cursus sit amet. Vestibulum sed arcu non odio euismod lacinia at quis.
                Gravida cum sociis natoque penatibus et magnis dis parturient montes.
                Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque.
                Velit euismod in pellentesque massa placerat duis ultricies. Molestie ac feugiat sed lectus.
                Mattis enim ut tellus elementum sagittis. Sit amet consectetur adipiscing elit.
                Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue.
                Augue ut lectus arcu bibendum at varius. Pellentesque dignissim enim sit amet.
                Dictum non consectetur a erat nam.
                Iaculis eu non diam phasellus vestibulum lorem sed risus.
                Pretium nibh ipsum consequat nisl vel pretium lectus.</br></br>
                Enim facilisis gravida neque convallis. Sit amet nulla facilisi morbi.
                Arcu dictum varius duis at. Ornare aenean euismod elementum nisi quis eleifend.
                Lectus nulla at volutpat diam ut venenatis tellus in.
                In nulla posuere sollicitudin aliquam ultrices sagittis orci.
                Non pulvinar neque laoreet suspendisse interdum consectetur.
                Urna id volutpat lacus laoreet non curabitur gravida arcu ac.
                Non diam phasellus vestibulum lorem sed risus.
                Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc.
                Enim neque volutpat ac tincidunt vitae semper quis lectus nulla.
                Tortor posuere ac ut consequat semper viverra nam libero.
                Cras semper auctor neque vitae tempus quam pellentesque nec nam.
                Mauris ultrices eros in cursus turpis massa. Turpis tincidunt id aliquet risus feugiat in.
            </p>
        </div>
        <p id="exInfo">Kur ju regjistroheni, ju pranoni kushtet tona!</p>
        <a href="#" onclick="show(0)">Kthehu n&#235 regjistrim</a>
    </div>

    <script src="js/register.js"></script>
    <script src="js/login-register-contact.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Kontakti - M&#235so Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/contact-style.css">
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
</head>

<body>

    <header>
        <?php include 'header.php'; ?>
    </header>
    <div id="contact">
        <div id="contact-pic">
            <img src="images/contact/img-01.png" alt="IMG">
        </div>
        <div id="contact-form">
            <div id="talk">
                <h1>Trego najsen</h1>
            </div>
            <div class="write">
                <input class="input1" type="text" name="name" placeholder="Emri">
            </div>
            <div class="write">
                <input class="input1" type="text" name="email" placeholder="Email">
            </div>
            <div class="write">
                <input class="input1" type="text" name="subject" placeholder="Tema">
            </div>
            <div class="write">
                <textarea id="form-message" class="input1" name="message" placeholder="Mesazhi"></textarea>
            </div>
            <button id="submit" type="button" onclick="validate(2)">D&#235rgo Email</button>
        </div>

    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="js/login-register-contact.js"></script>
</body>

</html>
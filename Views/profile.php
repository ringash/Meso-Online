<?php
session_start();
include_once '../Logics/userData.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new userData();
    $user = $mapper->getUserByID($userId);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kurset - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;900&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main-style.css" />
    <link rel="stylesheet" href="../css/courses-style.css" />
    <link rel="stylesheet" href="../css/profile-style.css" />
   
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div id="myprofile">
        <div class="welcome">
            <h1>Welcome Back <?php echo $_SESSION['username']; ?> </h1>
        </div>
       
        
        <div id="changePass">
             <h1>Change Password</h1>
            <form method="GET" action="../Logics/passwordChange.php">
                <table>
                    <tr>
                        <td><input type="username" size="10" name="username1" class="input1" placeholder="Username..."></td>
                    </tr>
                    <tr>
                        <td><input type="password" size="10" name="password" class="input1" placeholder="Password..."></td>
                    </tr>
                    <tr>
                        <td><input type="password" size="10" name="newpassword" class="input1" placeholder="New password..."></td>
                    </tr>
                    <tr>
                        <td><input type="password" size="10" name="confirmnewpassword" class="input1" placeholder="Confirm password..."></td>
                    </tr>
                </table>
                <p><input type="submit" value="Update Password" id="submit">
            </form>
        </div>
        <div id="review">
        <form method="post" action="../Logics/insertReview.php">
        
            <div id="talk">
                <h1>Dergo nje review</h1>
            </div>
            <div class="write">
                <input class="input1" type="text" name="name" placeholder="Emri">
            </div>
           
            <div class="write">
                <textarea id="form-message" class="input1" name="review" placeholder="Mesazhi"></textarea>
            </div>
            <button id="submit" type="submit" name="review-submit">D&#235rgo Review</button>
        

    </form>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
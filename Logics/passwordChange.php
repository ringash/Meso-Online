<?php
session_start();
include_once 'userData.php';
include_once 'Staff.php';

include_once 'simpleUser.php';
if (isset($_GET['username1']) && isset($_GET['newpassword']) && isset($_GET['password'])) {
    $username = $_GET['username1'];
    $password = $_GET['password'];
    $newpassword = $_GET['newpassword'];
    $confirmnewpassword = $_GET['confirmnewpassword'];
    
    if ($newpassword != $confirmnewpassword) {
?> <script>
            alert("nuk keni shtypur password njesoj");
        </script>
    <?php
    ;} else if ($password == $newpassword) {
    ?> <script>
            alert("Ju lutem zgjedhni nje password te ri");
        </script>
<?php ;
    } else {
            $new = new SimpleUser( $username,"", $confirmnewpassword,0);
           
            $mapper = new userData();
            $mapper->changePass($new, $username);
            ?> <script>
            alert("Nderrimi i password u be me sukses!");
            window.location.href = "../Views/profile.php";
        </script>
<?php ;
           //header("Location:../Views/profile.php");
        }
    }


?>
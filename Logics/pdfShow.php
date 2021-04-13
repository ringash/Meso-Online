<?php

$dbh = new PDO("mysql:host=localhost;dbname=mesoonline", "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();
if (isset($_SESSION["role"])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $statement = $dbh->prepare("select * from courses where id=?");
        $statement->bindparam(1, $id);
        $statement->execute();

        $row = $statement->fetch();
        header('Content-Type:' . $row['courseFileType']);
        echo $row['courseFile'];
    }
} else {
?>
    <script>
        alert("ju duhet te jeni te kycur fillimisht");
        window.location.href = "../Views/login.php"
    </script>
<?php
}
?>
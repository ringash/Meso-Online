<?php
include_once '../Logics/userData.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new userData();
    $user = $mapper->getUserByID($userId);
}
?>
<header>
        <?php include 'header.php'; ?>
        <style>
        body {
        font-family: Convergence;
        background-color: rgb(228, 235, 237); 
}
.container{
    margin:10%;
}
.mainForm{
    padding:40px;
}
        </style>
    </header>
<div class='container'>
    <h1>Modifiko perdoruesin</h1>
    <form class="mainForm" action="../Logics/editUser1.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['username']; ?> />
            
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<footer>
        <?php include 'footer.php'; ?>
    </footer>
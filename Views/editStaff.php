<?php
include_once '../Logics/userData.php';
if (isset($_GET['id'])) {
    $staffId = $_GET['id'];
    $mapper = new userData();
    $staff = $mapper->getStaffByID($staffId);
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
    <h1>Modifiko Stafin:</h1>
    <form class="mainForm" action="../Logics/editStaffLogic.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $staffId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='fullname' class="input" placeholder="fullname..." value="<?php echo $staff['fullname']; ?> "/>
            <label for="">Pozita:</label>
            <input type="text" name='pozita' class="input" placeholder="pozita..." value="<?php echo $staff['pozita']; ?> "/>   
            
            <input id="submit" type="submit" name='edit-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<footer>
        <?php include 'footer.php'; ?>
    </footer>
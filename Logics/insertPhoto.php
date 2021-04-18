<?php 

require_once 'userData.php';
session_start();
if (isset($_POST['addPic-btn'])) {
    $profilePic = file_get_contents($_FILES['profilePic']['tmp_name']);
    $id=$_POST['userId'];
   
    $mapper = new userData();
    $mapper->insertPic($profilePic,$id);

    header("Location:../Views/profile.php");
   
}
if (isset($_POST['updatePic-btn'])) {
    $profilePic = file_get_contents($_FILES['profilePic']['tmp_name']);
    $id=$_POST['userId'];
   
    $mapper = new userData();
    $mapper->insertPic($profilePic,$id);

    header("Location:../Views/profile.php");
   
}

?>

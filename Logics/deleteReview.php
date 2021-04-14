<?php
include_once 'userData.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new userData();
    $mapper->deleteReview($id);
    header("Location:../Views/settings.php");
}

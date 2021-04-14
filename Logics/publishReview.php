<?php
include_once 'userData.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new userData();
    $mapper->publishReview($userId);
    header("Location:../Views/settings.php");
}

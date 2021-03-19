<?php
include_once 'userData.php';
if (isset($_GET['id'])) {
    $staffId = $_GET['id'];
    $mapper = new userData();
    $mapper->deleteStaff($staffId);
    header("Location:../Views/settings.php");
}

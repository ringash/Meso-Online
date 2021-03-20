<?php

include_once 'userData.php';
include_once 'Staff.php';
if (isset($_GET['fullname']) && isset($_GET['pozita'])) {
    $staffId = $_GET['id'];
    $fullname = $_GET['fullname'];
    $pozita=$_GET['pozita'];
    $staff = new Staff("",$fullname,$pozita);
    $mapper = new userData();
    $mapper->editStaffName($staff, $staffId);
    $mapper->editStaffPozita($staff, $staffId);
    header("Location:../Views/settings.php");
}

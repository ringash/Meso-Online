<?php
include_once 'userData.php';
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];
    $mapper = new userData();
    $mapper->deleteCourse($courseId);
    header("Location:../Views/settings.php");
}

<?php
include_once 'userData.php';
if (isset($_POST['addCourse-btn'])) {
    $name = $_POST['name'];
    $img = file_get_contents($_FILES['image']['tmp_name']);
    $pdf = file_get_contents($_FILES['pdf']['tmp_name']);
    $pdfType = $_FILES['pdf']['type'];
    $pdfName = $_FILES['pdf']['name'];
    $video = file_get_contents($_FILES['video']['tmp_name']);
    $videoType = $_FILES['video']['type'];

    $mapper = new userData();
    $mapper->insertCourse($name, $img, $pdf, $pdfType, $pdfName);
    header("Location:../Views/settings.php");
}

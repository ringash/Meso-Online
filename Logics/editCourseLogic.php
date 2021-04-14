<?php
  echo "herew";
 session_start();
include_once 'userData.php';
include_once 'Course.php';
if (isset($_POST['editCourse-btn'])) {
    echo "here4f";
    $courseId = $_POST['id'];

    $name = $_POST['name'];
    $img = file_get_contents($_FILES['imageEdit']['tmp_name']);
    $pdf = file_get_contents($_FILES['pdfEdit']['tmp_name']);
    $pdfType = $_FILES['pdfEdit']['type'];
    $pdfName = $_FILES['pdfEdit']['name'];
    $creator = $_SESSION['username'];

    $course = new Course($name, $img, $pdf, $pdfType, $pdfName, $creator);
    $mapper = new userData();
    $mapper->editCourse($course, $courseId);
  
    //var_dump($course);
    header("Location:../Views/settings.php");
   
} ?>

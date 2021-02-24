<?php
include_once 'userData.php';
session_start();
if (isset($_SESSION["role"])) {  
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];
    $mapper = new userData();
    $course = $mapper->getCourseByID($courseId);
    $file='pdfs/'.$course['coursefile'];
    $filename='pdfs/'.$course['coursefile'];
    header('Content-type:application/pdf');
    header('Content-disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($file);

}}else{
?>
 <script>alert ("ju duhet te jeni te kycur fillimisht");</script>
 <?php 
 header('Location:../Views/login.php');}
 ?>
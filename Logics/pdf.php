<?php
include_once 'userData.php';
session_start();
if (isset($_SESSION["role"])) {  
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];
    $mapper = new userData();
    $course = $mapper->getCourseByID($courseId);
    $file=$course['courseFile'];
    $filename='pdfs/'.$course['courseFile'];
    header('Content-type:application/pdf');
    header('Content-disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($file);

}}else{
?>
 <script>alert ("ju duhet te jeni te kycur fillimisht");
 window.location.href = "../Views/login.php"</script>
 <?php 
}
 ?>
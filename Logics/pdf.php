<?php
include_once 'userData.php';
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

}
?>
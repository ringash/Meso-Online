<?php
include_once 'userData.php';

$id = isset($_GET['id'])? $_GET['id'] : "";

$mapper = new userData();
$mapper->showCoursePDF($id);
?>
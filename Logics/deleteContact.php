<?php
include_once 'userData.php';
if (isset($_GET['id'])) {
    $contactId = $_GET['id'];
    $mapper = new userData();
    $mapper->deleteContact($contactId);
    header("Location:../Views/settings.php");
}

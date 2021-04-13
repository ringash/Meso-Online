<?php
include_once 'userData.php';
include_once 'simpleUser.php';



if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $simpleUser = new SimpleUser($username, "","",0 );
    $mapper = new userData();
    $mapper->editUsers($simpleUser, $userId);
   //
      header("Location:../Views/settings.php");
}

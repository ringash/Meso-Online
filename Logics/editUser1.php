<?php

include_once 'userData.php';
include_once 'simpleUser.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $simpleUser = new SimpleUser($username, "","",1 );
    $mapper = new userData();
    $mapper->edit($simpleUser, $userId);
    header("Location:../settings.php");
}

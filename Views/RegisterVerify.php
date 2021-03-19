<?php
include_once '../Logics/adminUser.php';
include_once '../Logics/simpleUser.php';
require_once '../Logics/userData.php';
session_start();

 if (isset($_POST['reg-btn'])) {
    $register = new Register($_POST);
    $register->insertData();
    
}
else {
    header("Location:index.php");
}


class Register
{
    private $username = "";
    private $email = "";
    private $password = "";
    

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->email= $formData['email'];
        $this->password = $formData['register-password'];
       
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username,$this->email , $this->password, 0);
        $mapper = new UserData();
        $mapper->insertUser($user);
        header("Location:../Views/index.php");
    }
}
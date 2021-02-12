<?php
include_once 'adminUser.php';
include_once 'simpleUser.php';
require_once 'userData.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new Login($_POST);
    $login->verifyData();
}else {
    header("Location:../dashboard.php");
}

class Login
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo 'username ose password nuk jane te sakte';
            header("Location:../dashboard.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo 'Mire se erdhet';
            header('Location:../courses.php');
        } else {
            echo 'Provo perseri';
            header("Location:../dashboard.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new userData();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['userPassword'])) {
            if ($user['role'] == 1) {
                $obj = new AdminUser($user['username'],$user['email'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['username'],$user['email'], $user['password'], $user['role']);
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}

class Register
{
    private $username = "";
    private $email = "";
    private $password = "";
    

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->email= $formData['email'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username, $this->password,$this->email , 0);
        $mapper = new UserData();
        $mapper->insertUser($user);
        header("Location:../dashboard.php");
    }
}
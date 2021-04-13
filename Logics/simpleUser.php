<?php
include_once 'User.php';

class SimpleUser extends User
{
    public function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, $role);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
        $_SESSION['username'] = $this->username;
    }


    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }
}

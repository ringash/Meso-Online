<?php
require_once 'User.php';


class AdminUser extends User
{
    public function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, $role);
    }


    public function setSession()
    {
        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
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

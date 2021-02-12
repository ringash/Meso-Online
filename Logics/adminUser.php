<?php
require_once 'User.php';


class AdminUser extends User
{
    public function __construct($username, $password, $role)
    {
        parent::__construct($username, $password, $role); 
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
    public function getPassword()
    {
        return $this->password;
    }
   
    public function getRole()
    {
        return $this->role;
    }
}

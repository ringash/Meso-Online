<?php

abstract class User
{
    protected $username;
    protected $email;
    protected $password;
    protected $role;

    function __construct($username,$email, $password,  $role)
    {
        $this->username = $username;
        $this->email=$email;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();
    
}
?>
<?php

abstract class User
{
    protected $username;
    protected $password;
    protected $role;

    function __construct($username, $password,  $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();
    
}
?>
<?php
class Staff
{
    protected $staffPhoto;
    protected $fullname;
    protected $pozita;

    public function __construct($staffPhoto, $fullname, $pozita)
    {
        $this->staffPhoto = $staffPhoto;
        $this->fullname = $fullname;
        $this->pozita = $pozita;
    }

    public function getPhoto()
    {
        return $this->staffPhoto;
    }
    public function getName()
    {
        return $this->fullname;
    }
    public function getPozita()
    {
        return $this->pozita;
    }
}

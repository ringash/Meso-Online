

<?php

echo "here";
require_once 'userData.php';
include_once 'Staff.php';
session_start();
if (isset($_POST['addStaff-btn'])) {
   
    $staff = new insertStaff($_POST);
    $staff->insert();
}
class insertStaff
{
    private $staffPhoto;
    private $fullname;
    private $pozita;


    public function __construct($formsData)
    {
        $this->staffPhoto = file_get_contents($_FILES['staffPhoto']['tmp_name']);
        $this->fullname= $formsData['fullname'];
        $this->pozita = $formsData['pozita'];
    }


    public function insert()
    {
        echo"bravo";
        $staff1 = new Staff($this->staffPhoto,$this->fullname , $this->pozita);
        var_dump($staff1);
        $mapper = new UserData();
        $mapper->insertStaff($staff1);

        echo"fund";
        //header("Location:../index.php");
    }
}
?>

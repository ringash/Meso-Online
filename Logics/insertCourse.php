<?php

require_once 'userData.php';
include_once 'Course.php';
session_start();
if (isset($_POST['addCourse-btn'])) {

    $course = new insertCourse($_POST);
    $course->insert();
}
class insertCourse
{
    private $coursename;
    private $courseimg;
    private $courseFile;
    private $courseFileType;
    private $courseFileName;
    private $creator;

    public function __construct($formsData)
    {

        $this->coursename = $formsData['name'];
        $this->courseimg = file_get_contents($_FILES['image']['tmp_name']);
        $this->courseFile = file_get_contents($_FILES['pdf']['tmp_name']);
        $this->courseFileType = $_FILES['pdf']['type'];
        $this->courseFileName = $_FILES['pdf']['name'];
        $this->creator = $_SESSION['username'];
    }


    public function insert()
    {


        $course1 = new Course($this->coursename, $this->courseimg, $this->courseFile, $this->courseFileType, $this->courseFileName, $this->creator);
        //var_dump($course1);
        $mapper = new userData();
        $mapper->insertCourse($course1);

        header("Location:../Views/settings.php");
    }
}

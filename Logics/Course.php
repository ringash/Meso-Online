<?php
class Course
{
    protected $coursename;
    protected $courseimg;
    protected $courseFile;
    protected $courseFileType;
    protected $courseFileName;
    protected $creator;

    public function __construct(
        $coursename,
        $courseimg,
        $courseFile,
        $courseFileType,
        $courseFileName,
        $creator
    ) {
        $this->coursename = $coursename;
        $this->courseimg = $courseimg;
        $this->courseFile = $courseFile;
        $this->courseFileType = $courseFileType;
        $this->courseFileName = $courseFileName;
        $this->creator = $creator;
    }

    public function getName()
    {
        return $this->coursename;
    }
    public function getImg()
    {
        return $this->courseimg;
    }
    public function getFile()
    {
        return $this->courseFile;
    }

    public function getFileType()
    {
        return $this->courseFileType;
    }
    public function getFileName()
    {
        return $this->courseFileName;
    }
    public function getCreator()
    {
        return $this->creator;
    }
}

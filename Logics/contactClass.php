<?php
require_once 'userData.php';
session_start();
if (isset($_POST['contact-submit'])) {
    $contact = new Contact($_POST);
    $contact->insertContact();
    echo 'sukses!!!';
}
class Contact
{
    private $contactname = "";
    private $contactemail = "";
    private $subject = "";
    private $message= "";
    

    public function __construct($formData)
    {
        $this->contactname = $formData['contact-name'];
        $this->contactemail= $formData['contact-email'];
        $this->subject = $formData['subject'];
        $this->message=$formData['message'];
    }

    public function getname()
    {
        return $this->contactname;
    }
    public function getcontactEmail()
    {
        return $this->contactemail;
    }
    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function insertContact()
    {
        $contact1 = new Contact($this->contactname,$this->contactemail , $this->subject,  $this->message);
        $mapper = new UserData();
        $mapper->insertContact($contact1);
       echo 'ka mbrri deri te insert';
    }
}
?>
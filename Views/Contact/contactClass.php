

<?php
require_once '../../Logics/userData.php';
include_once 'ContactClass2.php';
session_start();
if (isset($_POST['contact-submit'])) {
    $contact = new Contact($_POST);
    $contact->insertContact();
    echo 'sukses!!!';
}
class Contact
{
    private $contactname;
    private $contactemail;
    private $subject;
    private $message;
    

    public function __construct($formsData)
    {
        $this->contactname = $formsData['contact-name'];
        $this->contactemail= $formsData['contact-email'];
        $this->subject = $formsData['subject'];
        $this->message=$formsData['message'];
    }
   

    public function insertContact()
    {
        $contact1 = new Contact1($this->contactname,$this->contactemail , $this->subject,  $this->message);
        $mapper = new UserData();
        $mapper->insertContact($contact1);
       echo 'ka mbrri deri te insert';
    }
}
?>

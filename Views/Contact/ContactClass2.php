<?php
class Contact1 
{
    protected $contactname;
    protected $contactemail;
    protected $subject;
    protected $message;

    public function __construct($contactname, $contactemail, $subject, $message)
    {
        $this->contactname = $contactname;
        $this->contactemail= $contactemail;
        $this->subject = $subject;
        $this->message=$message;    }

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
}
?>
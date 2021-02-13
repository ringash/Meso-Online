<?php
require_once "databaseConfig.php";

class userData extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    
    public function getUserByUsername($username)
    {
        $this->query = "select * from usersinfo where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from usersinfo";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into usersinfo (username,email, pass, role) values (:username,:email,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $email=$user->getEmail();
        $pass = $user->getPassword();
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($username)
    {
        $this->query = "delete from usersinfo where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
    }
    public function getAllContacts()
    {
        $this->query = "select * from contacts";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertContact(\Contact $contact1)

{
    $this->query = "insert into contacts (Emri,contactEmail, subject, mesazhi) values (:contactname,:contactemail,:subject,:message)";
    $statement = $this->conn->prepare($this->query);
    $username = $contact1->getname();
    $email=$contact1->getcontactEmail();
    $subject = $contact1->getSubject();
    $message = $contact1->getMessage();
    $statement->bindParam(":username", $username);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":pass", $subject);
    $statement->bindParam(":role", $message);
    $statement->execute();
}
public function getAllCourses()
{
    $this->query = "select * from courses";
    $statement = $this->conn->prepare($this->query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
}


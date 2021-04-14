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
    public function getUserByID($userId)
    {
        $this->query = "select * from usersinfo where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function editUsers(\SimpleUser $user, $id)
    {
        $this->query = "update usersinfo set username=:username where id=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into usersinfo (username,email, pass, role) values (:username,:email,:pass,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $email = $user->getEmail();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }
    public function changePass(\SimpleUser $user, $username)
    {
        $this->query = "update usersinfo set pass=:pass where username=:username";

        $statement = $this->conn->prepare($this->query);
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $statement->bindParam(":pass", $pass);
        $statement->bindParam(":username", $username);
        $statement->execute();
    }

    public function deleteUser($id)
    {
        $this->query = "delete from usersinfo where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
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

    public function insertContact(\Contact1 $contact1)
    {
        $this->query = "insert into contacts (Emri,contactEmail, subject, mesazhi) values (:Emri,:contactEmail,:subject,:mesazhi)";
        $statement = $this->conn->prepare($this->query);
        $username = $contact1->getname();
        $email = $contact1->getcontactEmail();
        $subject = $contact1->getSubject();
        $message = $contact1->getMessage();
        $statement->bindParam(":Emri", $username);
        $statement->bindParam(":contactEmail", $email);
        $statement->bindParam(":subject", $subject);
        $statement->bindParam(":mesazhi", $message);
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

    public function getCourseByID($courseId)
    {
        $this->query = "select * from courses where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $courseId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllStaff()
    {
        $this->query = "select * from staff";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteCourse($id)
    {
        $this->query = "delete from courses where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function insertCourse($name, $img, $pdf, $pdfType, $pdfName, $creator)
    {
        $this->query = "insert into courses values('',?,?,?,?,?,?)";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $img);
        $statement->bindParam(3, $pdf);
        $statement->bindParam(4, $pdfType);
        $statement->bindParam(5, $pdfName);
        $statement->bindParam(6, $creator);
        $statement->execute();
    }

    public function deleteContact($id)
    {
        $this->query = "delete from contacts where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function deleteStaff($id)
    {
        $this->query = "delete from staff where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function deleteReview($id)
    {
        $this->query = "delete from reviews where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function getStaffByID($staffId)
    {
        $this->query = "select * from staff where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $staffId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function editStaffName(\Staff $staff, $id)
    {
        $this->query = "update staff set fullname=:fullname where id=:id";
        $statement = $this->conn->prepare($this->query);
        $fullname = $staff->getName();
        $statement->bindParam(":fullname", $fullname);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function editStaffPozita(\Staff $staff, $id)
    {
        $this->query = "update staff set pozita=:pozita where id=:id";
        $statement = $this->conn->prepare($this->query);
        $pozita = $staff->getPozita();
        $statement->bindParam(":pozita", $pozita);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }


    public function insertStaff(\Staff $staff)
    {
        $this->query = "insert into staff values ('',?,?,?)";
        $statement = $this->conn->prepare($this->query);
        $staffPhoto = $staff->getPhoto();
        $fullname = $staff->getName();
        $pozita = $staff->getPozita();
        $statement->bindParam(1, $staffPhoto);
        $statement->bindParam(2, $fullname);
        $statement->bindParam(3, $pozita);
        $statement->execute();
    }
    public function makeAdmin($id)
    {
        $this->query = "update usersinfo set role=1 where id=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    public function getUsername($username)
    {
        $this->query = "select username from usersinfo where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertReview(\Review $review)
    {
        $this->query = "insert into reviews values ('',?,?)";
        $statement = $this->conn->prepare($this->query);
        $name = $review->getName();
        $reviewMessage = $review->getReview();
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $reviewMessage);
        $statement->execute();
    }
    public function getAllReviews()
    {
        $this->query = "select * from reviews";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function publishReview($id)
    {
        $this->query = "update reviews set active=1 where id=?";
        $statement = $this->conn->prepare($this->query);
        $statement->bindparam(1, $id);
        $statement->execute();
    }

    public function getReviewsForIndex(){
        $this->query = "select * from reviews where active=1";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

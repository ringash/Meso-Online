

<?php
require_once 'userData.php';
include_once 'review.php';
session_start();
if (isset($_POST['review-submit'])) {
    $review = new insertReview($_POST);
    $review->insertReview();
}
class insertReview
{
    private $name;
    private $review;
    

    public function __construct($formsData)
    {
        $this->name = $formsData['name'];
        $this->review=$formsData['review'];
    }
   

    public function insertReview()
    {
        $newReview = new Review($this->name,$this->review );
        $mapper = new UserData();
        $mapper->insertReview($newReview);
        //var_dump($newReview);
        header("Location:../Views/profile.php");
    }
}
?>

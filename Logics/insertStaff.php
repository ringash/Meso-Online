

<?php

echo "here";
require_once 'userData.php';
include_once 'Staff.php';
session_start();
if (isset($_POST['addStaff-btn']) && isset($_FILES['staffPhoto'])) {
    include "db_conn.php";
    // $staff = new insertStaff($_POST);
    // $staff->insert();
    echo "<pre>";
    print_r($_FILES['staffPhoto']);
    echo "</pre>";

    $img_name = $_FILES['staffPhoto']['name'];
    $tmp_name = $_FILES['staffPhoto']['tmp_name'];

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $allowed_exs = array("jpg", "jpeg", "png");

    if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = '../images/uploads/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        $sql ="INSERT INTO staff(staff-photo) VALUES ('$new_img_name')";
        mysqli_query($conn, $sql);
        
    } else {
        echo "error";
    }

    echo ($img_ex);
}
// class insertStaff
// {
//     private $staffPhoto;
//     private $fullname;
//     private $pozita;


//     public function __construct($formsData)
//     {
//         $this->staffPhoto = $_FILES['staffPhoto'];
//         $this->fullname= $formsData['fullname'];
//         $this->pozita = $formsData['pozita'];
//     }


//     public function insert()
//     {
//         echo"bravo";
//         $staff1 = new Staff($this->staffPhoto,$this->fullname , $this->pozita);
//         $mapper = new UserData();
//         $mapper->insertStaff($staff1);
//         echo"bravo";//header("Location:../index.php");
//     }
// }
?>

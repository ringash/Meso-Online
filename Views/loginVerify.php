<?php
include_once '../Logics/adminUser.php';
include_once '../Logics/simpleUser.php';
require_once '../Logics/userData.php';
session_start();
if (isset($_POST['lgn-btn'])) {
    $login = new Login($_POST);
    $login->verifyData();
}
class Login
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['pass'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            header("Location:courses.php");
        } else {
?>
            <script>
                alert("Nuk keni shkruar mire username ose password");
                window.location.href = "../Views/login.php";
            </script>
<?php
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new userData();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['pass'])) {
            if ($user['role'] == 1) {
                $obj = new AdminUser($user['username'], $user['email'], $user['pass'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['username'], $user['email'], $user['pass'], $user['role']);
                $obj->setSession();
            }
            return true;
        } else {
            return false;
        }
    }
}
?>
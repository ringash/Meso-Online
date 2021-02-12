<?php
include_once 'Logics/userData.php';
 $mapper =  new userData();
 $userList = $mapper->getAllUsers();

?>


<div>
    <h1>Admin Settings</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




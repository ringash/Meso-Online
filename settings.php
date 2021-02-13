
<?php
include_once 'Logics/userData.php';
 $mapper =  new userData();
 $userList = $mapper->getAllUsers();
 $mapper1 =  new userData();
 $contactList = $mapper1->getAllContacts();
 
?>
<head>
<link rel="stylesheet" type="text/css" href="css/settings-style.css">
</head>
<body>
    
<header>
        <?php include 'header.php'; ?>
    </header>

<div id="adminsettings">
    <h1>Admin Settings</h1>
    <div id="userlist">
        <h2>User list:</h2>
        <table>
            <thead>
                <tr class="titles">
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
                        <td><a href=<?php echo "edit.php?id=" . $user['id']; ?>>Modifiko</td>
                        <td><a href=<?php echo "Logics/deleteUser.php?id=" . $user['id']; ?>>Fshij</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <h2>contact list:</h2>
        <table>
            <thead>
                <tr class="titles">
                    <td>name</td>
                    <td>Email</td>
                    <td>subject</td>
                    <td>mesazhi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($contactList as $contacts) {
                ?>
                    <tr>
                        <td><?php echo $contacts['Emri']; ?></td>
                        <td><?php echo $contacts['contactEmail']; ?></td>
                        <td><?php echo $contacts['subject']; ?></td>
                        <td><?php echo $contacts['mesazhi']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>


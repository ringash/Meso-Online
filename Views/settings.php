<?php
include_once '../Logics/userData.php';
include_once '../Logics/adminUser.php';
session_start();

$mapper2 =  new userData();
$courseList = $mapper2->getAllCourses();

$mapper =  new userData();
$userList = $mapper->getAllUsers();
$mapper1 =  new userData();
$contactList = $mapper1->getAllContacts();

include_once '../Logics/userData.php';
$mapper3 =  new userData();
$staffList = $mapper3->getAllStaff();

?>

<head>
    <link rel="stylesheet" type="text/css" href="../css/settings-style.css">
</head>

<body>

    <header>
        <?php include 'header.php'; ?>
    </header>
    <main>
        <div id="leftList">
            <ul>
                <li><a href="#" onclick="show(0)">- Kurset</a></li>
                <li><a href="#" onclick="show(1)">- Users</a></li>
                <li><a href="#" onclick="show(2)">- Kontaktet</a></li>
                <li><a href="#" onclick="show(3)">- Reviews</a></li>
                <li><a href="#" onclick="show(4)">- Stafi</a></li>
            </ul>
        </div>
        <!-- KURSET -->
        <div class="table shown">
            <h2>Lista e Kurseve:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Emri i Kursit</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($courseList as $course) {
                    ?>
                        <tr>
                            <td><?php echo $course['coursename']; ?></td>
                            <td><a href=<?php echo "edit.php?id=" . $course['id']; ?>>Modifiko</td>
                            <td><a href=<?php echo "../Logics/deleteCourse.php?id=" . $course['id']; ?>>Fshij</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- USERS -->
        <div class="table hidden" id="userlist">
            <h2>User list:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Username</td>
                        <td>Email</td>
                        <td>Edit</td>
                        <td>Delete</td>
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
                            <td><a href=<?php echo "../Logics/deleteUser.php?id=" . $user['id']; ?>>Fshij</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- KONTAKTET -->
        <div class="table hidden">
            <h2>Kontaktet:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>name</td>
                        <td>Email</td>
                        <td>subject</td>
                        <td>mesazhi</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contactList as $contact) {
                    ?>
                        <tr>
                            <td><?php echo $contact['Emri']; ?></td>
                            <td><?php echo $contact['contactEmail']; ?></td>
                            <td><?php echo $contact['subject']; ?></td>
                            <td><?php echo $contact['mesazhi']; ?></td>
                            <td><a href=<?php echo "../Logics/deleteContact.php?id=" . $contact['id']; ?>>Fshij</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- REVIEWS -->
        <div class="table hidden">
            <h2>Reviews:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Username</td>
                        <td>Komenti</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php
                    foreach ($staffList as $staff) {
                    ?>
                        <tr>
                            <td><?php echo $staff['fullname']; ?></td>
                            <td><?php echo $staff['pozita']; ?></td>
                            <td><a href=<?php echo "edit.php?id=" . $user['id']; ?>>Modifiko</td>
                            <td><a href=<?php echo "../Logics/deleteStaff.php?id=" . $user['id']; ?>>Fshij</td>
                        </tr>
                    <?php
                    }
                    ?> -->
                </tbody>
            </table>
        </div>
        <!-- STAFI -->
        <div class="table hidden">
            <h2>Stafi:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Emri dhe Mbiemri</td>
                        <td>Pozita e punes</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($staffList as $staff) {
                    ?>
                        <tr>
                            <td><?php echo $staff['fullname']; ?></td>
                            <td><?php echo $staff['pozita']; ?></td>
                            <td><a href=<?php echo "edit.php?id=" . $staff['id']; ?>>Modifiko</td>
                            <td><a href=<?php echo "../Logics/deleteStaff.php?id=" . $staff['id']; ?>>Fshij</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="../js/settingsDivs.js"></script>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
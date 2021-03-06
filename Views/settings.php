<?php
include_once '../Logics/userData.php';
include_once '../Logics/adminUser.php';
include '../Logics/editUser1.php';
session_start();

$mapper2 =  new userData();
$courseList = $mapper2->getAllCourses();

$mapper =  new userData();
$userList = $mapper->getAllUsers();

$mapper1 =  new userData();
$contactList = $mapper1->getAllContacts();

$mapper3 =  new userData();
$staffList = $mapper3->getAllStaff();
//include_once '../Logics/userData.php';
$mapper3 =  new userData();
$reviewList = $mapper3->getAllReviews();

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
            <div class="boxWithAddOpt">
                <table>
                    <thead>
                        <tr class="titles">
                            <td>Emri i Kursit</td>
                            <td>Shtuar nga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($courseList as $course) {
                        ?>
                            <tr>
                                <td><?php echo $course['coursename']; ?></td>
                                <td><?php echo $course['creator']; ?></td>
                                <td><a href=<?php echo "editCourse.php?id=" . $course['id']; ?>>Modifiko</td>
                                <td><a href=<?php echo "../Logics/deleteCourse.php?id=" . $course['id']; ?>>Fshij</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                <form method="post" enctype="multipart/form-data" class="addForms" action="../Logics/insertCourse.php">
                    <div>
                        <p>Emri i kursit:</p>
                        <input type="text" name="name" class="inpText" />
                    </div>
                    <div>
                        <p>Shto foto:</p>
                        <input type="file" name="image" />
                    </div>
                    <div>
                        <p>Shto pdf:</p>
                        <input type="file" name="pdf" />
                    </div>
                    <button type="submit" name="addCourse-btn" class="addButtons">Shto</button>
                </form>

            </div>
        </div>


        <!-- USERS -->
        <div class="table hidden" id="userlist">
            <h2>Users:</h2>
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
                            <td><a href=<?php echo "editUser.php?id=" . $user['id']; ?>>Modifiko</a></td>
                            </td>
                            <td><a href=<?php echo "../Logics/deleteUser.php?id=" . $user['id']; ?>>Fshij</td>
                            <td><a href=<?php echo "../Logics/makeAdmin.php?id=" . $user['id']; ?>>Beje Admin</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>


        <!-- KONTAKTET -->
        <div class="table hidden" id="contactList">
            <h2>Kontaktet:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Emri</td>
                        <td>Email</td>
                        <td>Titulli</td>
                        <td>Mesazhi</td>
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
        <div class="table hidden" id="reviewList">
            <h2>Reviews:</h2>
            <table>
                <thead>
                    <tr class="titles">
                        <td>Username</td>
                        <td>Komenti</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($reviewList as $review) {
                    ?>
                        <tr>
                            <td><?php echo $review['name']; ?></td>
                            <td><?php echo $review['review']; ?></td>
                            <td><a href=<?php echo "../Logics/deleteReview.php?id=" . $review['id']; ?>>Fshij</td>

                            <?php
                            if ($review['active'] == 1) {
                            ?>
                                <td><a href=<?php echo "../Logics/depublishReview.php?id=" . $review['id']; ?>>Hjeke</td>
                            <?php
                            } else if ($review['active'] == 0) {
                            ?>
                                <td><a href=<?php echo "../Logics/publishReview.php?id=" . $review['id']; ?>>Publiko</td>
                            <?php
                            }
                            ?>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <!-- STAFI -->
        <div class="table hidden" id="staffList">
            <h2>Stafi:</h2>
            <div class="boxWithAddOpt">
                <table>
                    <thead>
                        <tr class="titles">
                            <td>Emri dhe Mbiemri</td>
                            <td>Pozita e punes</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($staffList as $staff) {
                        ?>
                            <tr>
                                <td><?php echo $staff['fullname']; ?></td>
                                <td><?php echo $staff['pozita']; ?></td>
                                <td><a href=<?php echo "editStaff.php?id=" . $staff['id']; ?>>Modifiko</td>
                                <td><a href=<?php echo "../Logics/deleteStaff.php?id=" . $staff['id']; ?>>Fshij</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <form method="post" action="../Logics/insertStaff.php" enctype="multipart/form-data" class="addForms">
                    <div>
                        <p>Emri i pun&#235torit:</p>
                        <input type="text" name="fullname" class="inpText" />
                    </div>
                    <div>
                        <p>Pozita:</p>
                        <input type="text" name="pozita" class="inpText" />
                    </div>
                    <div>
                        <p>Shto foto:</p>
                        <input type="file" name="staffPhoto" />
                    </div>
                    <button type="submit" name="addStaff-btn" class="addButtons">Shto</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/settingsDivs.js"></script>
    <footer id="settingsFooter">
        <?php include 'footer.php'; ?>
    </footer>
</body>
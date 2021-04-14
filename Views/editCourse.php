<?php
include_once '../Logics/userData.php';
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];
    $mapper = new userData();
    $course = $mapper->getCourseByID($courseId);
}
?>
<header>
    <?php include 'header.php'; ?>
    <style>
        body {
            font-family: Convergence;
            background-color: rgb(228, 235, 237);
        }

        .container {
            margin: 10%;
        }

        .mainForm {
            padding: 40px;
        }
        .mainform{
            display: flex;
            flex-direction: row;
        }
    </style>
</header>
<div class='container'>
    <h1>Modifiko Kursin:</h1>
    <form class="mainForm" action="../Logics/editCourseLogic.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" style="display:none;" value=<?php echo $courseId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='name' class="input" placeholder="name..." value="<?php echo $course['coursename']; ?> " />
            <label for="">Foto:</label>
            <input type="file" name='imageEdit'/>
            <label for="">File:</label>
            <input type="file" name="pdfEdit" />

            <input id="submit" type="submit" name='editCourse-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<footer>
    <?php include 'footer.php'; ?>
</footer>
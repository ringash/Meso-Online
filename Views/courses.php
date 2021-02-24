<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kurset - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;900&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main-style.css" />
    <link rel="stylesheet" href="../css/courses-style.css" />
</head>
<?php
include_once '../Logics/userData.php';
 $mapper2 =  new userData();
 $courseList = $mapper2->getAllCourses();
 ?>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div id="gen-courses">
        <div id="title">
            <p>&#199far&#235 do t&#235 m&#235sosh?</p>
        </div>
        
        <div id="types-of-courses">
        <?php
                foreach ($courseList as $course) {
                ?>
            <a href="#">
                <div class="course-box">    
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $course['courseimg'] ).'"/>'; ?>
                    <p> <?php echo $course['coursename']; ?></p>
                    <p><?php echo $course['couseinfo']; ?></p>
                    <p><a href=<?php echo "../Logics/pdf.php?id=" . $course['id']; ?>>kliko</p>
                </div>
            </a><?php
                }
                ?>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>


</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kurset - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;900&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css" />
    <link rel="stylesheet" href="css/courses-style.css" />
</head>
<?php
include_once 'Logics/userData.php';
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
        <?php
                foreach ($courseList as $course) {
                ?>
        <div id="types-of-courses">
            <a href="#">
                <div class="course-box">    
               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $course['courseimg'] ).'"/>'; ?>
                    <p> <?php echo $course['coursename']; ?></p>
                    <p><?php echo $course['couseinfo']; ?></p>
                </div>
            </a><?php
                }
                ?>
            <a href="#">
                <div class="course-box">
                    <img alt="c#" src="images/courses/csharp.jpg" />
                    <p>C#</p>
                    <p>2.2M Studenta</p>
                </div>
            </a>
            <a href="#">
                <div class="course-box">
                    <img alt="MySQL" src="images/courses/sql.png" />
                    <p>SQL</p>
                    <p>2M Studenta</p>
                </div>
            </a>
            
            <a href="#">
                <div class="course-box">
                    <img alt="java" src="images/courses/blank.png" />
                    <p>Kurs</p>
                    <p>Nr. Studenta</p>
                </div>
            </a>
            <a href="#">
                <div class="course-box">
                    <img alt="java" src="images/courses/blank.png" />
                    <p>Kurs</p>
                    <p>Nr. Studenta</p>
                </div>
            </a>
            <a href="#">
                <div class="course-box">
                    <img alt="java" src="images/courses/blank.png" />
                    <p>Kurs</p>
                    <p>Nr. Studenta</p>
                </div>
            </a>
            <a href="#">
                <div class="course-box">
                    <img alt="java" src="images/courses/blank.png" />
                    <p>Kurs</p>
                    <p>Nr. Studenta</p>
                </div>
            </a>
            <a href="#">
                <div class="course-box">
                    <img alt="java" src="images/courses/blank.png" />
                    <p>Kurs</p>
                    <p>Nr. Studenta</p>
                </div>
            </a>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
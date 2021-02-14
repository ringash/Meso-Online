<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rreth nesh - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link rel="stylesheet" href="../css/main-style.css" />
    <link rel="stylesheet" href="../css/dashboard-style.css" />
    <link rel="stylesheet" href="../css/about-us-style.css" />
</head>
<?php
include_once '../Logics/userData.php';
 $mapper3 =  new userData();
 $staffList = $mapper3->getAllStaff();
 ?>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <div id="about-us">
        <div class="slider">
            <div class="slider-content active">
                <img src="../images/about-us/staff-photo.png" alt="">
                <h1>Stafi yne</h1>
            </div>
            <div class="slider-content not-active">
                <img src="../images/about-us/about-us-slider2.jpg" alt="" />
                <h1>Hapesira jone e punes</h1>
            </div>
            <div class="slider-content not-active">
                <img src="../images/about-us/about-us-slider3.jpg" alt="" />
                <h1>Meso Online HQ</h1>
            </div>
        </div>
        <div id="about-intro">
            <p class="p1"> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae laborum vel quibusdam hic ipsa explicabo quos a ducimus similique perferendis cumque quidem, dolorem rerum, nam eaque eum nobis pariatur autem."</p>
            <h6>Emri Mbiemri/CEO</h6>

            <h3>Cili &#235sht&#235 misioni jon&#235?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga vel earum debitis, dolores laudantium a cupiditate vitae nihil. Impedit porro architecto quos corrupti totam facilis ut ad facere provident dignissimos!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dicta rem harum dolorum nihil ipsum? Veniam explicabo officiis quis excepturi beatae quam expedita dolore, exercitationem praesentium, quae in voluptatum quos?</p>
        </div>

        <div id="team">
            <h2 id='title-stafi'>Stafi:</h2>
            <div>
                <ul>
                <?php
                foreach ($staffList as $staff) {
                ?>
                    <li class="person">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $staff['staff-photo'] ).'"/>'; ?>
                        <p class="team_name"><?php echo $staff['fullname']; ?></p>
                        <p class="team_title"><?php echo $staff['pozita']; ?></p>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
    <script src="../js/slider.js"></script>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
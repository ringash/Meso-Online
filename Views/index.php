<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ballina - M&#235so Online</title>
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Convergence' rel='stylesheet'>
    <link rel="stylesheet" href="../css/index-style.css" />
</head>

<body>
<header>
    <?php include 'header.php';
    ?>
</header>
    <div id="bck-img">
    </div>
    <div id="welcome">
        <p>M&#235so kodim pa pages&#235!</p>
        <a href="courses.php">Grahi pun&#235s!</a>
    </div>

    <div id="reviews-content">
        <div id="rev-title">
            <p>&#199far&#235 thon&#235 t&#235 tjer&#235t p&#235r ne?</p>
        </div>
        <div id="reviews">
            <div class="review">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem numquam tempore doloribus dolorum accusamus placeat, maxime voluptatem officia rerum eum saepe sint dignissimos sed sunt voluptatibus cupiditate hic ut mollitia.</p>
                </div>
                <div id="person">
                    <div class="review-img">
                        <img alt="profile" src="../images/index/no-profile.png" />
                    </div>
                    <div id="name">
                        <p>Emri Mbiemri</p>
                    </div>
                </div>
            </div>
            <div class="review">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem numquam tempore doloribus dolorum accusamus placeat, maxime voluptatem officia rerum eum saepe sint dignissimos sed sunt voluptatibus cupiditate hic ut mollitia.</p>
                </div>
                <div id="person">
                    <div class="review-img">
                        <img alt="profile" src="../images/index/no-profile.png" />
                    </div>
                    <div id="name">
                        <p>Emri Mbiemri</p>
                    </div>
                </div>
            </div>
            <div class="review">
                <div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem numquam tempore doloribus dolorum accusamus placeat, maxime voluptatem officia rerum eum saepe sint dignissimos sed sunt voluptatibus cupiditate hic ut mollitia.</p>
                </div>
                <div id="person">
                    <div class="review-img">
                        <img alt="profile" src="../images/index/no-profile.png" />
                    </div>
                    <div id="name">
                        <p>Emri Mbiemri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
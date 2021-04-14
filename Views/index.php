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
<?php
include '../Logics/userData.php';
$mapper = new userData();
$reviews = $mapper->getReviewsForIndex();
?>

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
            <?php
            foreach ($reviews as $review) {
            ?><div class="review">
                    <div>
                        <p><?php echo $review['review'] ?></p>
                    </div>
                    <div id="person">
                        <div id="name">
                            <p><?php echo $review['name'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
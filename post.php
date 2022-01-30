<?php
require 'includes/r_db.php';

?>

<!doctype html>
<html lang="hy-AM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href='https://css.gg/css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>living like surbs</title>
</head>

<body>
<?php include 'header.php'?>
<section>
    <div class="container">
        <?php $tpost = R::load('posts', $_GET['id']) ?>

        <div class="title"><?php echo $tpost->title ?></div>
        <div class="floatright">
        <img src="images/<?php echo $tpost->general_img ?>" alt="">
        </div>
        <p class="desc"><?php echo $tpost->description ?></p>

    </div>
</section>
<?php
include 'footer.php';
?>
<script src="js/jquery3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
<?php
require 'includes/r_db.php';
$tpost = $date->prepare("SELECT * FROM posts WHERE id = :id");
$tpost->execute(['id' => $_GET['id']]);
$row = $tpost->fetch();
?>

<!doctype html>
<html lang="hy-AM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $row['description'] ?>">
    <link rel = "icon" href ="images/logo.svg" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href='https://css.gg/css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $row['title']?></title>
</head>

<body>
<?php include '_header.php' ?>
<section>
    <div class="container">
        <div class="title"><?php echo $row['title']?></div>
        <p class="desc"><?php echo $row['description'] ?></p>
    </div>
</section>
<?php
include '_footer.php';
?>
<script src="js/jquery3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
<?php
require 'includes/r_db.php';

$search = $date->prepare("SELECT * FROM posts WHERE title LIKE :title");
$search->execute(['title' => '%' . $_GET['q'] . '%']);

?>

<!doctype html>
<html lang="hy-AM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href ="images/logo.svg" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href='https://css.gg/css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Search live like saints</title>
</head>

<body>
<?php include '_header.php' ?>
<section>
    <?php while ($row = $search->fetch(PDO::FETCH_OBJ)){ ?>
        <div class="post">
            <a href="post.php?id=<?php echo $row->id ?>"><?php echo $row->title ?></a>
            <img src="images/<?php echo $row->general_img ?>" alt="">
        </div>
    <?php } ?>
</section>
<?php
include '_footer.php';
?>
<script src="js/jquery3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
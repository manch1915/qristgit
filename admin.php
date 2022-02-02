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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>living like Admin</title>

</head>

<body>

<div class="container">
    <?php if (@$_SESSION['main'] == 'admin') : ?>
        <form action="file_upload.php" method="post" class="form" enctype='multipart/form-data'>
           <button type="button" class="btn btn-secondary" style="display: block;margin: 0 auto;" id="mejtex">Մեջտեղ</button>
            <div class="row justify-content-center mt-4">
                <div class="col flex"><button type="button" class="btn btn-secondary" id="dzax">Ձախ</button></div>
                <div class="col flex"><button type="button" class="btn btn-success" id="paragraf">Պարագրաֆ</button></div>
                <div class="col flex"><button type="button" class="btn btn-secondary" id="aj">Աջ</button></div>
            </div>
            <div class="input-group mb-3 m-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input type="text" class="form-control" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" name="title">
            </div>
            <button type="submit" class="btn btn-warning mt-2" id="complete" style="display: block;margin: 0 auto;">Վերջացնել</button>
        <button type="button" class="btn btn-warning mt-2" id="hashvarkel" style="display: block;margin: 0 auto;">Հաշվարկել</button>
        </form>
    <p id="imgfilename" style="display: none;"></p>
    <?php else: ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" aria-describedby="emailHelp" name="login">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button class="btn btn-primary" id="submit_admin">Submit</button>
        <div id="error"></div>
    <?php endif; ?>
</div>


<script src="js/jquery3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
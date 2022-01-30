<?php
require 'includes/r_db.php';
$errors = array();

$login = R::findOne('admins', 'login = ?', array($_POST['login']));
if ($login) {
    if (password_verify($_POST['password'], $login->password)) {
        $_SESSION['main'] = 'admin';
    } else {
        echo 'password enocen';
        die();
    }
    } else {
        echo ' user with this login doesn`t find or select your option';
        die();
    }
?>
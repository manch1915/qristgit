<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];
$my = 'mysql:host=localhost;dbname=livelikesurbs;charset=utf8';
$date = new PDO($my,'root','',$options);

?>
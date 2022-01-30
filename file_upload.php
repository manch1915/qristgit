<?php
require 'includes/r_db.php';
$arr = array();

//foreach ($_POST as $key => $value) {
//    $arr[] = $key;
//}
//foreach ($_FILES as $key => $value) {
//    $arr[] = $key;
//}
$countOfPosted = count($_POST) + count($_FILES) - 2;
$hashv = str_split($_POST['hashv']);
print_r($hashv);

function addFileToUpload($arr , $class, $i){
    global $arr;
    $filename = pathinfo($_FILES['put' . $i]["name"]);
    $rand = rand(1, 1000);
    $filename = str_replace(" ","",$filename['filename']) . $rand;
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['put' . $i]["name"]);
    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $nFileName = $target_dir . $filename . "." . $filetype;
    move_uploaded_file($_FILES['put' . $i]["tmp_name"], $nFileName);
    $arr[] = '<img class="' . $class . '" src="' . $nFileName . '">';
}

for ($i = 0; $i <= $countOfPosted - 1; $i++) {
    switch ($hashv[$i]) {
        case 'p':
            global $arr;
            $arr[] = '<p>' . $_POST['textarea' . $i] . '</p>';
            break;
        case 'a':
            addFileToUpload($arr,'floatright',$i);
            break;
        case 'm':
            addFileToUpload($arr,'mejtex',$i);
            break;
        case 'd':
            addFileToUpload($arr,'floatleft',$i);
            break;
        default:
            echo 'error';
            die();
    }
}



$desc = implode('',$arr);
preg_match('~<img.+>~',$desc, $firstImg);
$firstImg =  implode('',$firstImg);
$getted = preg_replace('~<img class=".+" src="images/(.+\.[a-zA-Z]+)">~','$1',$firstImg);
$posts = R::dispense('posts');
$posts->title = $_POST['title'];
$posts->description = $desc;
$posts->general_img = $getted;
R::store($posts);
header('Location: admin.php');
die();
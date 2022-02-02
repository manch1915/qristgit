<?php
require 'includes/r_db.php';

?>

<!doctype html>
<html lang="hy-AM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="livelikesaints, poqrik srber, Սուրբ մանուկներ, Սրբեր, մանուկ Սրբեր">
    <meta name="description" content="Կայք մանուկ Սրբերի մասին">
    <link rel = "icon" href ="images/logo.svg" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link href='https://css.gg/css' rel='stylesheet'>
    <link rel="stylesheet" href="css/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Living Like Saints</title>
</head>

<body>
<?php include '_header.php' ?>
    <main>
        <div class="container">
            <div class="zakrep" data-aos="zoom-out-right">
                <p class="zakrep_titile">Երկու խոսք հայ մանուկներին</p>
                <p class="zakrep_desc"><span style="font-size: 125%;">Հայր Վահան Հովհաննիսյան</span><br>Հիշում եք, անշուշտ, Ավետարանի այն դեպքը, ուր պատմվում է, թե մի օր, երբ մանուկները, Հիսուսի անհուն բարությունից հրապուրված, մոտենում են Նրան, առաքյալները սաստում են, որ հեռանան։ Սակայն Հիսուս նեղանում է Առաքյալների վրա և ասում նրանց .<< Թույլ տվեք, որ մանուկներն ինձ մոտ գան, որովհետև նրանցն է երկնքի արքայությունը>>։
                    Այս դեպքը ցույց է տալիս, թե Հիսուս որքա՜ն է սիրում մանուկներին և որքա՜ն է <span id="erekket">...</span></p>
            </div>
        </div>
        <div class="container">
                <div class="index_header_slider">
                    <?php
                    $last_posts = $date->prepare('SELECT * FROM `posts`');
                    $last_posts->execute();
                    while ($row = $last_posts->fetch(PDO::FETCH_OBJ)){
                    ?>
                    <div class="slider_item">
                        <div class="post">
                            <a href="post.php?id=<?php echo $row->id ?>"><?php echo $row->title ?></a>
                            <img src="images/<?php echo $row->general_img ?>" alt="">
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
    </main>

    <?php
        include '_footer.php';
    ?>

    <script src="js/jquery3.6.0.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
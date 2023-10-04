<?php
    include './services/conn.php';
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Closet</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./css/animate-logo.css">
    <link rel="stylesheet" href="./css/product-cards.css">
</head>
<body>
    <?php include './partials/logo-animation.php'?>
    <section
            data-aos="fade-in"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="true"
            data-aos-anchor-placement="center-bottom"
            class="first-section-animation">
        <?php require './partials/nav.php'?>

        <?php require './partials/main-section.php'?>
    </section>

    <?php require './partials/second-section.php'?>


    <?php require './partials/page-1-section-3.php'?>



    <div id="goToTop" class="hide-goto-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </div>

</body>
<script src="js/main.js"></script>
<script src="./js/import-product.js"></script>
<script src="./js/navcontrol.js"></script>
</html>

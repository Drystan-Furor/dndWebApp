<?php $title = 'Home' ?>
<?php require 'components/header.php'; ?>


<body>

    <?php include 'components/menulist.php'; ?>

    <?php require 'components/home.php'; ?>

    <?php require 'components/pagescontent.php'; ?>

    <?php require 'components/pagesblogscontent.php'; ?>


        <!-----------------infinite loading-->
        <?php $generating_this = "MORE CHARACTER DETAILS" ?>
        <?php include 'components/loadingbar.php'; ?>


    <img src="/images/Dungeons-Dragons-Logo.png" alt="logo" width="400" />
    <?php require 'components/footer.php'; ?>

    
<?php $title = 'Home' ?>
<?php require 'components/header.php'; ?>


<body>

    <?php include 'components/menulist.php'; ?>

    <?php require 'components/home.php'; ?>

    <?php require 'components/commonraceform.php' ?>

    <?php require 'components/summarize.php' ?>

    <?php require 'components/pagescontent.php'; ?>

    <?php require 'components/pagesblogscontent.php'; ?>

    <!-----------------infinite loading-->
    <?php $generating_this = "MORE CHARACTER DETAILS" ?>
    <?php include 'components/loadingbar.php'; ?>

    <?php require 'components/footer.php'; ?>
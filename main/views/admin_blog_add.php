<?php $title = 'Admin Blog Add' ?>
  <?php require 'components/header.php'; ?>

  <body>
      <?php include 'components/menulist.php'; ?>


      <h1>Blog Add View</h1>
      <?php
        $formaction = "/admin/blog/add";
        $valueId = "";
        $valueTitle = "";
        $valueContent = "";
        $valueSlug = "";
        require 'components/actionform.php'; ?>

      <?php require 'components/footer.php'; ?>
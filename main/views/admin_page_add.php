<?php $title = 'Admin Page Add' ?>
  <?php require 'components/header.php'; ?>

  <body>
      <?php include 'components/menulist.php'; ?>

      <h1>Page Add View</h1>
      <?php
        $formaction = "/admin/page/add";
        $valueId = "";
        $valueTitle = "";
        $valueContent = "";
        $valueSlug = "";
        require 'components/actionform.php'; ?>

      <?php require 'components/footer.php'; ?>
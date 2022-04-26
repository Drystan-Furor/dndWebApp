<?php $title = 'Admin Page Edit' ?>
  <?php require 'components/header.php'; ?>

  <body>
    <?php include 'components/menulist.php'; ?>

      <h1 class="centertext">Page Edit View</h1>
      <?php
        $formaction = "/admin/page/edit";
        $valueId = $params[0]->id;
        $valueTitle = $params[0]->title;
        $valueContent = $params[0]->content;
        $valueSlug = $params[0]->slug;
        require 'components/actionform.php'; ?>
        <?php require 'components/footer.php'; ?>
<?php $title = 'Admin Page Add' ?>
<?php require 'components/header.php'; ?>

<body>
    <?php include 'components/menulist.php'; ?>
    <div class="adminpages-container">
        <h1 class="centertext">Page Add View</h1>
        <div class="adminpages">

            <?php
            $formaction = "/admin/page/add";
            $valueId = "";
            $valueTitle = "";
            $valueContent = "";
            $valueSlug = "";
            require 'components/actionform.php'; ?>
        </div>
    </div>

    <?php require 'components/footer.php'; ?>
<?php $title = 'Page Viewer' ?>
<?php require 'components/header.php'; ?>

<body>

    <?php include 'components/menulist.php'; ?>

    <?php if ($params[0]->status === 'published') : ?>

        <h1><?php echo $params[0]->title; ?></h1>

        <p class="centeredpar"><?php echo $params[0]->content; ?></p>

    <?php else : ?>

        <h1>This page is not yet published</h1>

    <?php endif; ?>

    <img src="/images/Dungeons-Dragons-Logo.png" alt="logo" width="400" />
    <?php require 'components/footer.php'; ?>
<?php $title = 'Page Viewer' ?>
<?php require 'components/header.php'; ?>

<body>
        <?php include 'components/menulist.php'; ?>
        <div class="centeredpar-container">

        <?php if ($params[0]->status === 'published') : ?>

            <h1 class="centertext"><?php echo $params[0]->title; ?></h1>

            <p class="centeredpar"><?php echo $params[0]->content; ?></p>

        <?php else : ?>

            <h1>This page is not yet published</h1>

        <?php endif; ?>
    </div>

    <?php require 'components/footer.php'; ?>
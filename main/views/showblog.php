<?php $title = 'Blogpost' ?>
<?php require 'components/header.php'; ?>

<body>
        <?php include 'components/menulist.php'; ?>
        <div class="centeredpar-container">
        <?php if ($params[0]->status === 'published') : ?>

            <h1 class="centertext"><?php echo $params[0]->title; ?></h1>

            <div>
            <p class="centeredpar"><?php echo $params[0]->content; ?></p>
            </div>
        <?php else : ?>

            <h1>Deze pagina is nog niet gepubliceerd..</h1>

        <?php endif; ?>
    </div>
    <?php require 'components/footer.php'; ?>
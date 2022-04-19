<h1 class="centertext">Blogs:</h1>

<?php foreach ($params[1] as $blog) : ?>

    <?php if ($blog['status'] === 'published') : ?>
        <h2 class="centertext"><?php echo $blog['title']; ?></h2>
        <p class="centeredblog"><?php echo $blog['content']; ?></p>

    <?php else : ?>

        <h2 class="centertext">This section is under development</h2>

    <?php endif; ?>
<?php endforeach; ?>
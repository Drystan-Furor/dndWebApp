<?php
$menulist = Database::raw('select * from pages')->asArray();
$bloglist = Database::raw('select * from blogs')->asArray();
$i = 1;
$j = 1;
?>
<div class="navmenucontainer">
    <div class="navmenu">

        <a href="/"><span class="redtext">DnD </span> <span class="whitespan">RNG</span></a> |
        <a href="/login"><span class="redtext">Log</span> <span class="whitespan">in</span></a> |
        <span class="redtext">Pages </span> <span class="whitespan">:</span></a>
        <?php
        foreach ($menulist as $page) : ?>
            <a href="<?php echo "/newpage/?id=" . $page['id'] ?>">
                <span class="redtext">
                    [<?php echo " " . $i . " ] " ?></span>
                <span class="whitespan">
                    <?php echo $page['title'];
                    $i++; ?></span></a>
        <?php endforeach; ?>

        <span class="redtext">Blogs </span> <span class="whitespan">:</span></a>
        <?php
        foreach ($bloglist as $blogpost) : ?>
            <a href="<?php echo "/showblog/?id=" . $blogpost['id'] ?>">
                <!-- ?id=" . $blogpost['id'] -->
                <span class="redtext">
                    [<?php echo " " . $j . " ] " ?></span>
                <span class="whitespan">
                    <?php echo $blogpost['title'];
                    $j++; ?>
            </a>
        <?php endforeach; ?>


    </div>
</div>
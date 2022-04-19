<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible<?php echo $i;?>" class="toggle" type="checkbox">
    <label for="collapsible<?php echo $i;?>" class="lbl-toggle"><?php echo $label;?></label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <?php echo $collapsibleContent; ?>
            </div>
        </div>
    </div>
</div>
<!--collapsible ---------------------------------------------------------------------------------->

<script>
    let myLabels = document.querySelectorAll('.lbl-toggle');

    Array.from(myLabels).forEach(label => {
        label.addEventListener('keydown', e => {
            // 32 === spacebar
            // 13 === enter
            if (e.which === 32 || e.which === 13) {
                e.preventDefault();
                label.click();
            };
        });
    });
</script>
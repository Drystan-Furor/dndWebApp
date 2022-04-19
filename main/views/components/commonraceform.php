<!-- ----------------------------------------------------------------------FORM------------>

<?php
//$new_rng_npc = new DndNpcRng();
$dndrace = "Aarakocra";//$new_rng_npc->dndrace;
$string = "Birdy";//$new_rng_npc->string;
$homebrew = Homebrew::echoHomebrew($dndrace);
?>



<div class="centertext">
    <form method="POST">
        <!--action="..src/includes/Homebrew.php"-->
        <label for="commonrace"><b>Enter the specific race name you want to generate or enter a homebrew race, and press ENTER</b><br></label>
        <input type="text" name="commonrace" id="commonrace" placeholder="Example: Orc"> <br>
        <p>Or click the button below to randomly generate a character.</p>
        <button type="submit" class="setcommonrace" name="setcommonrace" id="setcommonrace">RNG<br> <span class="whitetext">an NPC</span></button>
        <!--------------------------------------------------------------------------------------------GENERATED CODE PARAGRAPH-->
        <p class="generatedcode">
            <?php if (isset($_POST['commonrace']) || isset($_POST['setcommonrace'])) {
                $new_rng_npc = new DndNpcRng();
                $dndrace = $new_rng_npc->dndrace;
                $string = $new_rng_npc->string;
                $homebrew = Homebrew::echoHomebrew($dndrace);
            } ?>
            <?php echo $homebrew ?><br>
            <b><?php echo $string; ?></b>
        </p>
    </form>
</div>


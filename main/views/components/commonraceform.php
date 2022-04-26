<!-- ----------------------------------------------------------------------FORM------------>

<?php
/**
 * Call DndNpcRng class script to generate
 */
if (!isset($_POST['commonrace']) || !isset($_POST['setcommonrace'])) {
    $new_rng_npc = new DndNpcRng();
    $dndrace = $new_rng_npc->dndrace;
    $string = $new_rng_npc->string;
    $homebrew = Homebrew::echoHomebrew($dndrace, $new_rng_npc->raceArray);
}
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
                $homebrew = Homebrew::echoHomebrew($dndrace, $new_rng_npc->raceArray);
            } ?>
            <?php echo $homebrew ?><br>
            <b><?php echo $string; ?></b>
        </p>
    </form>
</div>

<!-- here we create foreach of array of races -->
<?php
$i = $i + 1; //the ID makes Javascript correspond to the correct collapsible
$label = "All DnD Races";
$collapsibleContent = '<div class="dndraces">'; //empty the string



foreach ($new_rng_npc->raceArray as $key => $dndrace) {
    $collapsibleContent .= '<a href="https://www.dndbeyond.com/races">
                        <b> ' . $dndrace . '</a>, </b>
                        ';
}
$collapsibleContent .= '</div>';
?>

<?php require 'collapsible.php' ?>
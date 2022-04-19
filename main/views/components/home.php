
<?php $i = 0; // number of collapsibles on page
$label = "More Information";
$collapsibleContent = '<p id="thisisit" class="centertext">
                    If you ever played D&D you might have experience with social encounters.<br>
                    Being a <a href="https://en.wikipedia.org/wiki/Dungeon_Master">Dungeon Master (DM)</a> is a challenge.<br>
                    We have to prepare a game session, but we cannot prepare everything so sometimes we improvise. <br>
                    However, with great improvisation comes great responsibility: <b>details.</b></p>
                <p>
                    I made lists and used dice to randomly decide what <em>details</em> I would use.<br>
                    So I wrote one page after another with random unimportant details that do not impact the story of a DM, like a <a href="https://www.reddit.com/r/d100/comments/l2oo00/d100_familiar_behavior/">D100 List: Familiar Behavior</a><br>
                    This led me to <a href="https://www.dndspeak.com/">a marvellous website with more D100 lists</a>.</p>
                <p>
                    After learning to write code, I realized I could develop an app to make more "D100" lists beyond the scope of 100, and if I would write the code I would no longer need books, notes, notepads or dices to
                    prepare details.<br>
                    Imagine, with one click of the mouse, a script would roll all dices and combine all results into a small text block, reading it out loud would give a detailed, unique yet fully randomized NPC. So next time my party walks into a tavern
                    and ask the DM what people are inside, we do not have to come up on the spot with a memorable or less memorable character. Click the button and see who they meet!</p>
                <p class="centertext">    
                    <a href="https://drystan-furor.github.io/Portfolio/"> About Me </a>
                </p>'; ?>

<h1 class="rngcenter">D&D <br><span class="whitetext">Random NPC Generator</span></h1>

<?php require 'collapsible.php' ?>


<h2 class="rngh2">A Tool to create a detailed npc as fast as possible.</h2>
<div class="greeting">
    <h3></h3>
</div>

<p class="centertext">
    To facilitate homebrew you have the option to enter your custom race name, or choose to enter a race name from the <a href="https://www.dndbeyond.com/races">DnD Beyond races</a>. <br>
    If nothing is entered the generator randomly chooses 
    one of the <a href="https://www.dndbeyond.com/races">DnD Beyond races</a>.
</p>

<?php require 'commonraceform.php' ?>


<?php require 'summarize.php' ?>
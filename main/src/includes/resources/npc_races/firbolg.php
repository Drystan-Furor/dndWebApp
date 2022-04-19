<?php

/**
 THIS USES ELF
 */
// Firblog
$isFirbolg = true;

//-----------------------------------------------------------------LARGE
//larger then average humans
$bodysizes = [
    "sort of typical giant-sized", "common giant sized",
    "characteristically large sized", "naturally large sized", "typical",
    "more or less standard sized", "moderately large sized", 'sizable',

    "large", "quite large", "very large", "really large",
    "slightly larger", "reasonably large", 'immense', 'enormous',
    "massive", "tall", 'big', 'hulking', 'towering', 'giant',
];
$bodysize = array_rand(array_flip($bodysizes), 1);

/*
Firbolg
Firbolgs don't really use names, the concept of it is peculiar to them. 
They will take elven names when dealing with outsiders however, 
and they'll also use nicknames they might be given by others. 
Everything else in their lives is usually referred to by their actions.
*/

$nicknames = [
    'Bearkiller', 'Dawncaller', 'Fearless', 'Flintfinder', 'Horncarver',
    'Keeneye', 'Lonehunter', 'Longleaper', 'Rootsmasher', 'Skywatcher',
    'Steadyhand', 'Threadtwister', 'Twice-Orphaned', 'Twistedlimb',
    'Wordpainter',
];
$nickname = array_rand(array_flip($nicknames), 1);
$divergence = "The Firbolg is nicknamed " . $nickname . ". ";

// has an Elvish name
include_once 'includes/dndraces/elf.php'; // call script Elf
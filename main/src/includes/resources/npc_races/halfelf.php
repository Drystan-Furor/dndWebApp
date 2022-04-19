<?php

    // Half-Elf
$isHalfElf = true;

//---------------not as old as elves------------------AGE RESET
$age = rand(14, 180);

//---------------------------------------------------name
/*
Half-elves use either human or elven naming conventions. 
As if to emphasize that they don’t really fit in to either society, 
half-elves raised among humans are often given elven names, 
and those raised among elves often take human names.
*/

$divergence = "Walking in two worlds but truly belonging to neither, 
    a $race combines what some say are the best qualities of their elf and human 
    parents: human curiosity, inventiveness, and ambition tempered by the 
    refined senses, love of nature, and artistic tastes of the elves.";

$namingConvention = rand(1, 2);
if ($namingConvention == 1) {
    // has an Elvish name
    include_once 'includes/dndraces/elf.php'; // call script Elf
} else {
    // has a human name
    include_once 'includes/dndraces/human.php'; // call script Human
}


<?php
//Genasi

$genasiraces = [
    "Fire Genasi", "Air Genasi", "Earth Genasi", "Water Genasi",
];
$race = array_rand(array_flip($genasiraces), 1);
$raceorigin = $randomorigin;

/*
Genasi Names
if ($raceorigin == 'Genasi')
Genasi use the naming conventions of the people among whom they were raised. 
They might later assume distinctive names to capture their heritage, 
*/
//$randomorigin = array_rand(array_flip($dndraces), 1);    
if ($race == "Fire Genasi") {
    $surnames = [
        'Flame', 'Ember', 'Blaze', 'Flare', 'Flash', 'Wildfire',
        'Inferno', 'Bonfire', 'Tinder', 'Scorching', 'Burn',
    ];
    $nickname = array_rand(array_flip($surnames), 1);
}
if ($race == "Air Genasi") {
    $surnames = [
        'Breath', 'Breeze', 'Draft', 'Sky', 'Empyrean', 'Azure',
        'Whiff', 'Zephyr', 'Waft', 'Heavens', 'Ozone', 'Welkin',
    ];
    $nickname = array_rand(array_flip($surnames), 1);
}
if ($race == "Earth Genasi") {
    $surnames = [
        'Onyx', 'Dust', 'Terra', 'Terrane', 'Mold', 'Clay', 'Raven',
        'Obsidian', 'Sable', 'Slate', 'Coal', 'Stygian', 'Melanoid',
    ];
    $nickname = array_rand(array_flip($surnames), 1);
}
if ($race == "Water Genasi") {
    $surnames = [
        'Wave', 'Crest', 'Flood', 'Stream', 'Surge', 'Tide', 'Deluge',
        'Niagara', 'Torrent', 'Downpour', 'Drencher', 'Flow', 'Aqua-pura',
    ];
    $nickname = array_rand(array_flip($surnames), 1);
}
$firstname = "the " . $race . " " . $firstname;
$divergence = "However " . $heshe . " assumed the distinctive name "
    . $nickname . " " . $lastname . ", to capture $hisher Genasi heritage
                as " . $nickname . " is born and raised in a " .
    $randomorigin . " society.";
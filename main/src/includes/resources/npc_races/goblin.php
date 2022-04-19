<?php

//---------------------------------------------------------------SMALL

$bodysizes = [
    "very small", "quite small", "small", "small sized",
    "rather tiny", "below middle sized", "really small",
    "slightly smaller", "rather small", "reasonably small",
    "tiny", "characteristically tiny sized", "naturally small sized",
];
$bodysize = array_rand(array_flip($bodysizes), 1);
$thisGender = $bodysize . " " . $thisGender;


/*
    Goblin
    Using their tribe’s name and having nicknames, 
    is a normal occurrence for any of them.
    */

$surnames = [
    'of Crazy Arrow Tribe', 'of Salty Foot Clan', 'Mintybreath', 'Trinketmake',
    'of Smelly Hill Tribe', 'Horseride', 'Bignose', 'of Giant Crow tribe',
    'Dungrake', 'Manychild', 'Onebrow', 'Whitetooth', 'Woodleg', 'Highprofit',
    'Smalleye',
];
$lastname = array_rand(array_flip($surnames), 1);

if ($gender == 'male') {
    $malenames = [
        'Driekol', 'Greerkilx', 'Brabtygz', 'Glevzaagz', 'Lognerk', 'Xasb',
        'Jykeegs', 'Craang', 'Krart', 'Xat', 'Oz', 'Creld', 'Sriogz', 'Fiolx',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Kuqi', 'Enxa', 'Flihisz', 'Depolm', 'Nunoilee', 'Noxea', 'Frez',
        'Qeassa', 'Olk', 'Eagansa', 'Srokkaax', 'Gralbianq', 'Hoq',
        'Gnaalsia', 'Pryhxa',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
// Goblin Nicknames

$prefixes = [
    'Snail', 'Weak', 'Flat', 'Wide', 'Ugly', 'Oaf', 'Frog', 'Grub', 'Brain', 'Bite',
    'Mud', 'Meek', 'Snot', 'Pig', 'Worm', 'Dull', 'Limp', 'Owl', 'Numb', 'Murk', 
    'Lump',
];
$prefix = array_rand(array_flip($prefixes), 1);

$altfixes = [
    'brain', 'flab', 'ear', 'gut', 'head', 'face', 'arm', 'mush', 'size', 'feet',
    'teeth', 'mud', 'mouth', 'cheek', 'knuckle', 'ball', 'finger',
];
$altfix = array_rand(array_flip($altfixes), 1);
$nickname = $prefix . $altfix;
$divergence = "The fat faced " . $firstname . " is known as " . $nickname . ". 
    Pointy ears, a broad nose, a sloped back forehead and small sharp fangs,
    along with a crouched posture, " . $nickname . " is a " . $race . " for sure.";
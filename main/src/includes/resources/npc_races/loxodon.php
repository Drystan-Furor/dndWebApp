<?php
// Loxodon 
$loxodonRaces = [
    'Ravnica Loxodon', 'Mirrodin Loxodon', 'Tarkir Loxodon',
];
$race = array_rand(array_flip($loxodonRaces), 1);

//-----------------------------------------------------------------LARGE

$bodysizes = [
    "sort of typical giant-sized", "common giant sized",
    "characteristically large sized", "naturally large sized", "typical",
    "more or less standard sized", "moderately large sized", 'sizable',

    "large", "quite large", "very large", "really large",
    "slightly giant-sized", "reasonably large", 'immense', 'enormous',
    "massive", "tall", 'big', 'hulking', 'towering', 'giant',
];

$bodysize = array_rand(array_flip($bodysizes), 1);


/*
    //Loxodon

        */


if ($gender == 'male') {
    $surnames1 = [
        'Ag', 'Ghano', 'Ganon', 'Ga', 'Ili', 'Kava', 'Lathi', 'Mau', 'Phu',
        'Thava', 'Tvorti', 'Vega',
    ];
    $lastname1 = array_rand(array_flip($surnames1), 1);

    $surnames2 = [
        'vith', 'noth', 'dorf', 'non', 'loxth', 'vipth', 'linth',
        'thouk', 'ghuin', 'glath', 'lipth', 'khagn',
    ];
    $lastname2 = array_rand(array_flip($surnames2), 1);
    $lastname =  $lastname1 . $lastname2;
    $firstname = "";
}

if ($gender == 'female') {
    $surnames1 = [
        'Ameris', 'Gaupa', 'Imim', 'Kau', 'Laulu', 'Maump', 'Oneg',
        'Ori', 'Phaa', 'Veria',
    ];
    $lastname1 = array_rand(array_flip($surnames1), 1);

    $surnames2 = [
        'thea', 'elia', 'phea', 'thila', 'nea', 'thorea',
        'hea', 'rea', 'ghia', 'phia',
    ];
    $lastname2 = array_rand(array_flip($surnames2), 1);
    $lastname =  $lastname1 . $lastname2;
    $firstname = "";
}

//-------------------------------------------------nickname
$prefixes = [
    'Broad', 'Cracked', 'Dark', 'High', 'Long', 'Moon', 'Scarred',
    'Severed', 'Strong', 'Twin',
];
$prefix = array_rand(array_flip($prefixes), 1);

$altfixes = [
    'Tusk', 'Tusks', 'Wool', 'Ear', 'Eye', 'Hide', 'Trunks', 'Trunk',
];
$altfix = array_rand(array_flip($altfixes), 1);

$nickname = $prefix . "-" . $altfix;
//----------------------------------------------------------------

$divergence = "A $race looks like a perfect blend of elephant and man, 
    with the thick, leathery skin of an elephant and the bipedal
    stance of the more civilized races.";
<?php
/*
    Minotaur

        */
//------------------------------------------------------------2 parts last name
$surnames1 = [
    'Fearless', 'Steady', 'Silent', 'Brave', 'Orc', 'Sharp', 'Steel', 'Wolf', 
    'Truth', 'Keen', 'Valiant', 'Thick', 'Vigil', 'Swift', 'Steady', 'Jagged', 
    'Thunder','Boulder','Nimble',
];
$lastname1 = array_rand(array_flip($surnames1), 1);

$surnames2 = [
    'bane', 'pelt', 'heart', 'body', 'hide', 'leader', 'slash', 'mind', 'horn',
    'hoof', 'runner', 'warrior', 'walker', 'fist', 'fury',
];
$lastname2 = array_rand(array_flip($surnames2), 1);

$lastname =  $lastname1 . $lastname2;
//------------------------------------------------------------------------
if ($gender == 'male') {
    $prefixes = [
        'Oes', 'Nan', 'Tee', 'Mou', 'Drin', 'Da', 'Gar', 'Har',
        'Em', 'Vi', 'Djar', 'Kur', 'Noo',
    ];
    $prefix = array_rand(array_flip($prefixes), 1);

    $altfixes = [
        'fin', 'nore', 'las', 'min', 'diar', 'gur', 'fajar', 'daran',
        'vin', 'me', 'rapak', 'kar', 'gajan',
    ];
    $altfix = array_rand(array_flip($altfixes), 1);
    $firstname = $prefix . $altfix;
}

if ($gender == 'female') {
    $prefixes = [
        'Fen', 'Neo', 'Hi', 'Kuo', 'Raa', 'Via', 'Nuo', 'Tes', 'Uo', 'Tia',
        'Loo', 'Vi', 'Hila', 'Ras', 'Si', 'Laa',
    ];
    $prefix = array_rand(array_flip($prefixes), 1);

    $altfixes = [
        'ren', 'tin', 'nefa', 'ris', 'sfa', 'zara', 'rin', 'trin', 'varis',
        'nore', 'vin', 'tri', 'naru',
    ];
    $altfix = array_rand(array_flip($altfixes), 1);
    $firstname = $prefix . $altfix;
}
$nickname = $firstname;

$divergence = $nickname . " is a barrel-chested humanoid with 
             a head resembling that of a bull.";

//------------------------------------------------------------HOOVES
$hooves = [
    'one-toed',
    'two-toed',
    'deer',
    'moose',
    'elk',
    'horse',
    'cow',
    'cloven',
];

$shapes = [
    'club','aligned','long toe low heel','migrated',
    'negative palmar','laminitic','founder',
];

$hiLows = [
    'high','low',
];


$hoof = array_rand(array_flip($hooves), 1);
$shape =  array_rand(array_flip($shapes), 1);
$hiLow = array_rand(array_flip($hiLows), 1);


$shoe = "$hiLow, $shape $hoof hooves";
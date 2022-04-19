<?php

/**
 Rabbitfolk
 */

//---------------------------------------------------------------SMALL

$bodysizes = [
    "very small", "quite small", "small", "small sized",
    "rather tiny", "below middle sized", "really small",
    "slightly smaller", "rather small", "reasonably small",
    "tiny", "characteristically tiny sized", "naturally small sized",
];
$bodysize = array_rand(array_flip($bodysizes), 1);
$thisGender = $bodysize . " " . $thisGender;


if ($gender == 'male') {
    $RabbitMaleNames1 = [
        'Al', 'An', 'Ca', 'Cor', 'El',
        'Er', 'Fin', 'Gar', 'Lin', 'Ly', 'Mer',
        'Mi', 'Os', 'Per', 'Re', 'Ro', 'Wel',
    ];
    $firstname1 = array_rand(array_flip($RabbitMaleNames1), 1);

    $RabbitMaleNames2 = [
        'ton', 'der', 'de', 'rin', 'don',
        'rich', 'nan', 'ret', 'dal', 'le', 'ric',
        'lo', 'born', 'rin', 'ed', 'scoe', 'lby',
    ];
    $firstname2 = array_rand(array_flip($RabbitMaleNames2), 1);

    $firstname = $firstname1 . $firstname2;
}



if ($gender == 'female') {
    $halflingFemaleNames1 = [
        'An', 'Ca', 'Co', 'Euphe',
        'Ji', 'Ki', 'La', 'Li', 'Mer',
        'Ne', 'Pae', 'Por', 'Sera', 'Shae',
        'Va', 'Ver', 'Re',
    ];
    $firstname1 = array_rand(array_flip($halflingFemaleNames1), 1);

    $halflingFemaleNames2 = [
        'dry', 'llie', 'ra', 'mia',
        'llian', 'thri', 'vinia', 'dda', 'la',
        'dda', 'la', 'tia', 'phina', 'na',
        'ni', 'na',
    ];
    $firstname2 = array_rand(array_flip($halflingFemaleNames2), 1);

    $firstname = $firstname1 . $firstname2;
}


$RabbitFamilyNames1 = [
    'Brush', 'Good', 'Green', 'High-', 'Hill',
    'Lea', 'Tea', 'Thorn', 'Toss', 'Under',
];
$lastname1 = array_rand(array_flip($RabbitFamilyNames1), 1);

$RabbitFamilyNames2 = [
    'gather', 'barrel', 'bottle', 'hill', 'topple',
    'gallow', 'leaf', 'gage', 'cobble', 'bough',
];
$lastname2 = array_rand(array_flip($RabbitFamilyNames2), 1);

while ($lastname1 == 'Hill' && $lastname2 == 'hill') {
    $lastname2 = array_rand(array_flip($RabbitFamilyNames2), 1);
} //------------------------prevent Hillhill

$lastname = $lastname1 . $lastname2;


$nickname = $lastname;
$divergence = "$race are naturally drawn to people.";

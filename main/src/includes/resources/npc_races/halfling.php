<?php
// Halfling 
$halflingraces = [
    "Lightfoot Halfling", "Stout Halfling",
];
$race = array_rand(array_flip($halflingraces), 1);

//---------------------------------------------------------------SMALL
$bodysizes = [
    "very small", "quite small", "small", "small sized",
    "rather tiny", "below middle sized", "really small",
    "slightly smaller", "rather small", "reasonably small",
    "tiny", "characteristically tiny sized", "naturally small sized",
];
$bodysize = array_rand(array_flip($bodysizes), 1);
$thisGender = $bodysize . " " . $thisGender;


//-------------------------------------------------------------NAMES
if ($gender == 'male') {
    $halflingMaleNames = [
        'Alton', 'Ander', 'Cade', 'Corrin', 'Eldon',
        'Errich', 'Finnan', 'Garret', 'Lindal', 'Lyle', 'Merric',
        'Milo', 'Osborn', 'Perrin', 'Reed', 'Roscoe', 'Wellby',
    ];
    $firstname = array_rand(array_flip($halflingMaleNames), 1);
}
if ($gender == 'female') {
    $halflingFemaleNames = [
        'Andry', 'Bree', 'Callie', 'Cora', 'Euphemia',
        'Jillian', 'Kithri', 'Lavinia', 'Lidda', 'Merla',
        'Nedda', 'Paela', 'Portia', 'Seraphina', 'Shaena',
        'Trym', 'Vani', 'Verna', 'Reed',
    ];
    $firstname = array_rand(array_flip($halflingFemaleNames), 1);
}
$halflingFamilyNames = [
    'Brushgather', 'Goodbarrel', 'Greenbottle', 'High-hill', 'Hilltopple',
    'Leagallow', 'Tealeaf', 'Thorngage', 'Tosscobble', 'Underbough',
];
$lastname = array_rand(array_flip($halflingFamilyNames), 1);
$nickname = $lastname;

$divergence = $race . "s are an affable and cheerful people. 
    They cherish the bonds of family and friendship as well as the 
    comforts of hearth and home, harboring few dreams of gold or glory.";

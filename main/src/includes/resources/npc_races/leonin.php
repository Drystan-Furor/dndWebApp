<?php


//-----------------------------------------------------------------LARGE
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
    Each Leonin has a personal name followed by the name of their pride 
    and usually includes the preposition “of the”. 
    For example, a member of the Ironmane pride named Doxia 
    would introduce herself as “Doxia of the Ironmane”.
    */
//-------------------------------------------------------------------Leonin

$preposition = ' of the ';
$surnames = [
    'Embereye', 'Flintclaw', 'Goldenfield', 'Ironmane',
    'Starfeller', 'Sunguides',
];
$lastname = array_rand(array_flip($surnames), 1);
$preposnamed = rand(1, 20);
if ($preposnamed  > 2) {
    $lastname = $preposition . $lastname;
}


if ($gender == 'male') {
    $malenames = [
        'Apto', 'Athoz', 'Baragon', 'Bryguz', 'Eremoz', 'Gorioz',
        'Grexes', 'Oriz', 'Pyxathor', 'Teoz', 'Xemnon', 'Xior',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}
if ($gender == 'female') {
    $femalenames = [
        'Aletha', 'Atagone', 'Demne', 'Doxia', 'Ecate', 'Eriz',
        'Gragonde', 'Iadma', 'Koila', 'Oramne', 'Seza', 'Ziore',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}


$nickname = $firstname;
$divergence = $race . " are muscular, covered in fur, have feline tails, 
    and their heads look identical to those of lions. " . $race . ", proud humanoid 
    creatures that share many traits with their lesser cousins, lions, 
    are a race native to the moors of eastern Anterra.";
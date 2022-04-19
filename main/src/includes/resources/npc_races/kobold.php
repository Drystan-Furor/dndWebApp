<?php
// Kobolds $ancestry." ".$color
$ancestries = [
    'Chromatic', 'Gem', 'Metallic',
];
$ancestry = array_rand(array_flip($ancestries), 1);

if ($ancestry == 'Chromatic') {
    $chromatics = [
        'Black', 'Blue', 'Green', 'Red', 'White',
    ];
    $color = array_rand(array_flip($chromatics), 1);
}
if ($ancestry == 'Gem') {
    $gems = [
        'Amethyst', 'Crystal', 'Esmerald', 'Sapphire', 'Topaz',
    ];
    $color = array_rand(array_flip($gems), 1);
}
if ($ancestry == 'Metallic') {
    $metals = [
        'Brass', 'Bronze', 'Copper', 'Gold', 'Silver',
    ];
    $color = array_rand(array_flip($metals), 1);
}



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
    Kobold

    Kobold names are short and sweet. Most of the tones in their names are harsher, 
    but some more melodic and softer tones are found here and there as well.
    Kobold names are supposed to have meanings based on the individual's 
    appearance or behavior, but these meanings are only known 
    to those who speak their language.
    */

$surnames = [
    'Tass', 'Varn', 'Snuks', 'Gox', 'Guvne', 'Keplu', 'Mahro', 'Hovni',
    'Kirpo', 'Merbi', 'Dorn', 'Sig', 'Ver', 'Sax', 'Siklu', 'Ilti', 'Utro',
    'Snege', 'Zepi', 'Hirto', 'Suks', 'Rugs', 'Hik', 'Ratt', 'Atre', 'Gedri',
    'Deklo', 'Ahso', 'Hoga', 'Saru', 'Kin', 'Mak', 'Tix', 'Dis', 'Snolto',
    'Olta', 'Zorpu', 'Ogo', 'Kara', 'Gobli',
];
$lastname = array_rand(array_flip($surnames), 1);

$firstname = "";
$nickname = $lastname;
$divergence = "It's ancestry gives this $race a "
    . $ancestry . " " . $color . " scale color.";

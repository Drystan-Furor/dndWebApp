<?php
/*
    Triton names are melodic, but do have some harsher tones as well. 
    Female names always end in -yn, and male names always end in -s. 
    Their surnames always end in -ath, and tend to be much longer and 
    complex than their personal names. Male names also seem to always be 
    2 syllables long, while female names can be 2 to 3 syllables long.

    */
//--------------------------------------------------LASTNAME 1 + 2 + 3
$surnames1 = [//----------------------------1
    'Dah', 'Ul', 'A', 'Lu', 'Noh',
    'Muh', 'Veh', 'Ju', 'Dheh', 'Le',
    'Nu', 'Ra', 'Rah', 'Zu', 'Bhu',
    'Bha', 'An', 'Ra', 'Sah', 'Ve',
    'Sa', 'Gah',
    'Za', 'Jo', 'Uh', 'Ma', 'Po',
    'Zu', 'Lo', 'Ah', 'Na', 'Jah',
    'So', 'Mah', 'Nah', 'Sag', 'Juh',
    'U', 'Juh', 'E',
    'Bo', 'Zeg',
    'Ga', 'Rag', 'Gug', 'Ru',
    'Reg', 'Dha', 'Nah', 'Bu',
    'Guh', 'Ruh', 'Gu', 'Ja',
    'Bu', 'Ah', 'Zag', 'Luh',
    'Bhag', 'No', 'Bu', 'Ho',
];
$lastname1 = array_rand(array_flip($surnames1), 1);

$surnames2 = [//---------------------------2
    'ra', 'ell', 'lor', 'mans', 'loln',
    'lam', 'rag', 'nelm', 'meg', 'duz',
    'gax', 'bod', 'nalv', 'dalm', 'bell',
    'vall', 'nall', 'gar', 'ran', 'nemn',
    'gos', 'nud', 'lans', 'monz', 'nun',
    'boz', 'ban', 'nasn', 'vars', 'nur',
    'daln', 'nux', 'ron', 'vux', 'rad',
    'luz', 'nam', 'rez', 'hal', 'lor',
    'lolv', 'nag', 'maln', 'rog', 'goz',
    'ban', 'manz', 'rex', 'holm',
    'nalm', 'val', 'hud', 'hasn', 'dur',
    'hog', 'gax', 'dor', 'ras', 'lons',
    'lol', 'rasn', 'len', 'nall',
    'lul', 'nug', 'hom', 'bulm', 'melm',
    'husn', 'ronh', 'ramn', 'mor', 'morh',
];
$lastname2 = array_rand(array_flip($surnames2), 1);

$lastnames3 = "ath";//-------------------------3
$lastname = $lastname1 . $lastname2 . $lastnames3;

//----------------------------------------------------FIRSTNAMES
if ($gender == 'male') {
    $malenames = [
        'Vuhnus', 'Nozos', 'Dalgas', 'Danas', 'Numnus', 'Khalgas',
        'Dimis', 'Vamnas', 'Dhaldas', 'Dirzis', 'Vilis', 'Cenres',
        'Cohlos', 'Dhorvos', 'Jurlus', 'Khaldas', 'Jhuhlus', 'Molos',
        'Dholmos', 'Relges', 'Jovos', 'Jhigis', 'Jhaddas', 'Khahras',
        'Jomros', 'Dulgus', 'Molzos',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Vlaltyn', 'Elryn', 'Edryn', 'Mosahyn', 'Horyn', 'Lonreren', 'Uhlen',
        'Nahlyn', 'Iryn', 'Itomyn', 'Neslulyn', 'Altulyn', 'Ethlehyn', 'Wemlyn',
        'Anthyn', 'Hodryn', 'Flirlyn', 'Dahnunyn', 'Wetrahyn', 'Doglilyn',
        'Urludyn', 'Omlyn', 'Whonthyn', 'Misyn', 'Yotlyn', 'Bhadranyn', 'Natohen',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}

//-----------------------------------------------------Divergence
$haircolors = [
    'blue', 'green', 'orange', 'yellow', 'pink',
    'red', 'violet', 'turqoise', 'purple',
];
$colorful = array_rand(array_flip($haircolors), 1);

$divergence = "This aquatic humanoid has webbed feet, webbed hands, 
                blue skin and colorful " . $colorful . " hair.";
$nickname = $lastname;
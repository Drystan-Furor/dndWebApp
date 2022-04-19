<?php
// Elves
if ($raceorigin == 'Elf') {
    $isFirbolg = false;
    $isHalfElf = false;

    $elfraces = [
        "High Elf", "Wood Elf", "Eladrin Elf", "Drow",
    ];
    $race = array_rand(array_flip($elfraces), 1);
}



//-----------------------------------------------------------------Elf names
//Half Elf take human names or Elf names

$elfChildNames = [
    'Ara', 'Bryn', 'Del', 'Eryn', 'Faen', 'Innil', 'Lael',
    'Mella', 'Naill', 'Naeris', 'Phann', 'Rael',
    'Rinn', 'Sai', 'Syllin', 'Thia', 'Vall',
];

$elfMaleAdultNames = [
    'Adran', 'Aelar', 'Aramil', 'Arannis', 'Aust', 'Beiro',
    'Berrian', 'Carric', 'Enialis', 'Erdan', 'Erevan', 'Galinndan',
    'Hadarai', 'Heian', 'Himo', 'Immeral', 'Ivellios', 'Laucian',
    'Mindartis', 'Paelias', 'Peren', 'Quarion', 'Riardon',
    'Rolen', 'Soveliss', 'Thamior', 'Tharivol', 'Theren', 'Varis',
];

$elfFemaleAdultNames = [
    'Adrie', 'Althaea', 'Anastrianna', 'Andraste', 'Antinua',
    'Bethrynna', 'Birel', 'Caelynn', 'Drusilia', 'Enna', 'Felosial',
    'Ielenia', 'Jelenneth', 'Keyleth', 'Leshanna', 'Lia', 'Meriele',
    'Mialee', 'Naivara', 'Quelenna', 'Quillathe', 'Sariel',
    'Shanairra', 'Shava', 'Silaqui', 'Theirastra', 'Thia',
    'Vadania', 'Valanthe', 'Xanaphia',
];

$elfFamilyNames =  [ // (English == Common Translations)
    'Amakiir', 'Gemflower', 'Amastacia', 'Starflower', 'Galanodel',
    'Moonwhisper',
    'Holimion', 'Diamonddew', 'Ilphelkiir', 'Gemblossom', 'Liadon',
    'Silverfrond',
    'Meliamne', 'Oakenheel', 'Naïlo', 'Nightbreeze', 'Siannodel', 'Moonbrook',
    'Xiloscient', 'Goldpetal',
];

if ($gender == 'male') {
    $firstname = array_rand(array_flip($elfMaleAdultNames), 1);
    $lastname = array_rand(array_flip($elfFamilyNames), 1);

    $legend = rand(1, 1000000);
    if ($legend == 1) {
        $firstname = 'Celaralindë';
        $lastname = 'Tarnir';
        $nickname = 'Cel';
    }
}

if ($gender == 'female') {
    $firstname = array_rand(array_flip($elfFemaleAdultNames), 1);
    $lastname = array_rand(array_flip($elfFamilyNames), 1);
}

//--------------------------------------------------if Elf is a child
if ($age < 101 && $raceorigin == 'Elf') {
    $firstname = array_rand(array_flip($elfChildNames), 1);
}
$nickname = $firstname;

//----------------------------------------------IF----ELF
if ($raceorigin == 'Elf') {
    $divergence = "Any $race comes from a magical people of otherworldly
        grace, living in the world but not entirely part of it.";
}

//-----------------------------------------------DROW REDIRECT
if ($race == 'Drow') {
    //$raceorigin = 'Drow';
    include_once 'includes/dndraces/drow.php'; // call script
}

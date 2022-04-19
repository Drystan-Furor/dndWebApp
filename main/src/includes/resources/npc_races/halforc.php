<?php
// Half-Orc
$halforcMaleNames = [
    'Dench', 'Feng', 'Gell', 'Henk', 'Holg', 'Imsh', 'Keth',
    'Krusk', 'Mhurren', 'Ront', 'Shump', 'Thokk',
];
$halforcFemaleNames = [
    'Baggi', 'Emen', 'Engong', 'Kansif', 'Myev', 'Neega',
    'Ovak', 'Ownka', 'Shautha', 'Sutha', 'Vola', 'Volen', 'Yevelda',
];
if ($gender == 'male') {
    $lastname = array_rand(array_flip($halforcMaleNames), 1);
    $firstname = "";
}
if ($gender == 'female') {
    $lastname = array_rand(array_flip($halforcFemaleNames), 1);
    $firstname = "";
}
$nickname = $lastname;
$divergence = $race . "s’ grayish pigmentation, sloping foreheads, 
        jutting jaws, prominent teeth, and towering builds makes $hisher orcish 
        heritage plain for all to see.";

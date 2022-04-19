<?php  // Dwarf



//---------------------------------------------------------------SMALL
//these races are shorter then average humans

$bodysizes = [
    "very small", "quite small", "small", "small sized",
    "rather tiny", "below middle sized", "really small",
    "slightly smaller", "rather small", "reasonably small",
    "tiny", "characteristically tiny sized", "naturally small sized",
];
$bodysize = array_rand(array_flip($bodysizes), 1);
$thisGender = $bodysize . " " . $thisGender;



$dwarfMaleNames = [
    'Adrik', 'Alberich', 'Baern', 'Barendd', 'Brottor', 'Bruenor', 'Dain', 'Darrak', 
    'Eberk', 'Einkill', 'Fargrim', 'Flint', 'Gardain', 'Harbek', 'Kildrak', 
    'Oskar', 'Rangrim', 'Rurik', 'Taklinn', 'Thoradin', 'Thorin', 'Tordek', 
    'Travok', 'Ulfgar', 'Veit', 'Vondal', 'Orsik','Delg','Morgran','Traubon',
];
$dwarfFemaleNames = [
    'Amber', 'Artin', 'Audhild', 'Bardryn', 'Dagnal', 'Diesa', 'Eldeth', 'Falkrunn',
    'Finellen', 'Gunnloda', 'Gurdis', 'Helja', 'Hlin', 'Kathra', 'Krystrid', 'Ilde',
    'Liftrasa', 'Mardred', 'Riswynn', 'Sannl', 'Torbera',
    'Torgga', 'Vistra',
];
$dwarfClanNames = [
    'Balderk', 'Battlehammer', 'Brawnanvil', 'Dankil', 'Fireforge', 'Frostbeard',
    'Gorunn', 'Holderhek', 'Ironfist', 'Loderr',
    'Lutgehr', 'Rumnaheim', 'Strakeln', 'Torunn', 'Ungart',
];

if ($gender == 'male') {
    $firstname = array_rand(array_flip($dwarfMaleNames), 1);
    $lastname = array_rand(array_flip($dwarfClanNames), 1);
} else if ($gender == 'female') {
    $firstname = array_rand(array_flip($dwarfFemaleNames), 1);
    $lastname = array_rand(array_flip($dwarfClanNames), 1);
}
$nickname = $firstname;
$knownAsX = [
    "a skilled warrior",
    "a miner",
    "a stone worker",
    "a worker of metal",
];
$knownAs = (array_rand(array_flip($knownAsX), 1));
$divergence = "Bold and hardy, $nickname is known as " . $knownAs . ".";

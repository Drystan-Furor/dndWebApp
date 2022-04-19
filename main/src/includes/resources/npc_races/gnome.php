<?php
//Gnome
$gnomeraces = [
    "Forest Gnome", "Rock Gnome", "Deep Gnome",
];
$race = array_rand(array_flip($gnomeraces), 1);
if ($race == "Deep Gnome") {
    $age = rand(14, 250);
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


//gnome 6 names 1 clan name 1 nickname
$gnomeMaleNames = [
    'Alston', 'Alvyn', 'Boddynock', 'Brocc', 'Burgell',
    'Dimble', 'Eldon', 'Erky', 'Fonkin', 'Frug', 'Gerbo', 'Gimble', 'Glim',
    'Jebeddo', 'Kellen', 'Namfoodle', 'Orryn', 'Roondar', 'Seebo', 'Sindri',
    'Warryn', 'Wrenn', 'Zook',
];
$gnomeFemaleNames = [
    'Bimpnottin', 'Breena', 'Caramip', 'Carlin', 'Donella',
    'Duvamil', 'Ella', 'Ellyjobell', 'Ellywick', 'Lilli', 'Loopmottin',
    'Lorilla', 'Mardnab', 'Nissa', 'Nyx', 'Oda', 'Orla', 'Roywyn', 'Shamil',
    'Tana', 'Waywocket', 'Zanna',
];
$gnomeClanNames = [
    'Beren', 'Daergel', 'Folkor', 'Garrick', 'Nackle', 'Murnig',
    'Ningel', 'Raulnor', 'Scheppen', 'Timbers', 'Turen',
];
$gnomeNicknames = [
    'Aleslosh', 'Ashhearth', 'Badger', 'Cloak', 'Doublelock',
    'Filchbatter', 'Fnipper', 'Ku', 'Nim', 'Oneshoe', 'Pock',
    'Sparklegem', 'Stumbleduck',
];

if ($gender == 'male') {
    $firstnames = array_rand($gnomeMaleNames, 6);
    $firstname = $gnomeMaleNames[$firstnames[0]] . " " .
        $gnomeMaleNames[$firstnames[1]] . " " .
        $gnomeMaleNames[$firstnames[2]] . " " .
        $gnomeMaleNames[$firstnames[3]] . " " .
        $gnomeMaleNames[$firstnames[4]] . " " .
        $gnomeMaleNames[$firstnames[5]] . " ";

    $lastname = array_rand(array_flip($gnomeClanNames), 1);
    $nickname = array_rand(array_flip($gnomeNicknames), 1);
}
if ($gender == 'female') {
    $firstnames = array_rand($gnomeFemaleNames, 6);
    $firstname = $gnomeFemaleNames[$firstnames[0]] . " " .
        $gnomeFemaleNames[$firstnames[1]] . " " .
        $gnomeFemaleNames[$firstnames[2]] . " " .
        $gnomeFemaleNames[$firstnames[3]] . " " .
        $gnomeFemaleNames[$firstnames[4]] . " " .
        $gnomeFemaleNames[$firstnames[5]] . " ";

    $lastname = array_rand(array_flip($gnomeClanNames), 1);
    $nickname = array_rand(array_flip($gnomeNicknames), 1);
    $lastname = $lastname . " but " . $heshe . " is called " . $nickname;
    $divergence = "The " . $race . "’s energy and enthusiasm for living shines 
            through every inch of $hisher tiny body.";
}

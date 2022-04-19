<?php
/**
 GITH = [
     Gythyanki  [names A]
     Githzerai  [names B]
     Githvyrik  [names A or B]
 ]
 */
// Gith
$randomGithName = 0;
$isNeitherGith = false;

$githraces = [ //-----------------------2 common types of Gith
    'Githyanki', 'Githzerai',
];
$race = array_rand(array_flip($githraces), 1);

$isGithvyrik = rand(1, 20); //-----------1 rare type of Gith [5%]
if ($isGithvyrik == 20) {
    $race = 'Githvyrik';
    $isNeitherGith = true;
    $randomGithName = rand(1, 2);
}

/*
    Githyanki and githzerai have different naming conventions, 
    and both split their names by gender. 
    */
if ($race == 'Githyanki' || $randomGithName == 1) {
    if ($gender == 'male') {
        $surnames1 = [
            'Ma', 'Va', 'Na', 'U', 'Ze',
            'Eli', 'Ga', 'Ja', 'Kar', 'Ly',
            'Quo', 'Ris', 'Tro', 'Xa', 'Qu', 'As',
        ];
        $surnames1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'du', 'za', 'ra', 'nai', 'nu', 'a', 'i', 'k',
            'mo', 'mo',
        ];
        $surnames2 = array_rand(array_flip($surnames2), 1);

        $surnames3 = [
            'rai', 'rin', 'mon', 'ru', 'rik', 'th', 'doc', 'us',
            'dain', 'nas', 'an', 'os', 'das', 'dan',
        ];
        $surnames3 = array_rand(array_flip($surnames3), 1);
        $syllables = rand(1, 8);
        switch ($syllables) {
        case 1:
            $firstname = $surnames1 . $surnames2 . $surnames3;
            break;
        case 2:
            $firstname = $surnames1 . "'" . $surnames2 . $surnames3;
            break;
        case 3:
            $firstname = $surnames1 . $surnames2 . "'" . $surnames3;
            break;
        case 4:
            $firstname = $surnames1 . "'" . $surnames2 . "'" . $surnames3;
            break;
        case 5:
            $firstname = $surnames1 . "'" . $surnames3;
            break;
        case 6:
            $firstname = $surnames1 . $surnames3;
            break;
        case 7:
            $firstname = $surnames1 . $surnames2;
            break;
        case 8:
            $firstname = $surnames1 . "'" . $surnames2;
            break;
        }
    }
    if ($gender == 'female') {
        $surnames1 = [
            'Ma', 'Va', 'Na', 'U', 'Ze',
            'A', 'Fe', 'Je', 'Pa', 'Quo', 'Va', 'Yes', 'Za',
        ];
        $surnames1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'du', 'za', 'ra', 'nai', 'nu', 'a', 'i', 'k',
            'mo', 'noo', 'nelzi', 'n', 'h', 'r', 'su',
        ];
        $surnames2 = array_rand(array_flip($surnames2), 1);

        $surnames3 = [
            'rai', 'rin', 'mon', 'ru', 'rik',
            'ryl', 'r', 'ir', 'lig', 'zel', 'styl', 'ra', 'ne', 'ryth',
        ];
        $surnames3 = array_rand(array_flip($surnames3), 1);
        $syllables = rand(1, 8);
        switch ($syllables) {
        case 1:
            $firstname = $surnames1 . $surnames2 . $surnames3;
            break;
        case 2:
            $firstname = $surnames1 . "'" . $surnames2 . $surnames3;
            break;
        case 3:
            $firstname = $surnames1 . $surnames2 . "'" . $surnames3;
            break;
        case 4:
            $firstname = $surnames1 . "'" . $surnames2 . "'" . $surnames3;
            break;
        case 5:
            $firstname = $surnames1 . "'" . $surnames3;
            break;
        case 6:
            $firstname = $surnames1 . $surnames3;
            break;
        case 7:
            $firstname = $surnames1 . $surnames2;
            break;
        case 8:
            $firstname = $surnames1 . "'" . $surnames2;
            break;
        }
    }

    $nickname = $firstname;
    $firstname = "a $race,  they use history and metaphors pertaining to war
         as well as battle and are named after grand warriors, in this case:";
    $lastname = $nickname;
    $divergence = "The $race are motivated by revenge and are convinced 
        that they deserve to take whatever they want from the worlds they travel.";
}
/*
        Githzerai names include:
    
        Female Names: 
        */

if ($race == 'Githzerai' || $randomGithName == 2) {
    if ($gender == 'male') {
        $surnames1 = [
            'Ma', 'Va', 'Na', 'U', 'Ze', 'Sheo',
            'D', 'Duu', 'Fe', 'Hu', 'Ka', 'Muu', 'Nu', 'Xo',
            'Sh',
        ];
        $surnames1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'du', 'za', 'ra', 'nai', 'nu', 'go',
            'a', 'r', 'rz', 'l', 'ra',
        ];
        $surnames2 = array_rand(array_flip($surnames2), 1);

        $surnames3 = [
            'rai', 'rin', 'mon', 'ru', 'rik', 'rath',
            'k', 'th', 'm', 'la', 'g', 'kk',
        ];
        $surnames3 = array_rand(array_flip($surnames3), 1);
        $syllables = rand(1, 3);
        switch ($syllables) {
        case 1:
            $firstname = $surnames1 . $surnames2 . $surnames3;
            break;
        case 2:
            $firstname = $surnames1 . $surnames3;
            break;
        case 3:
            $firstname = $surnames1 . $surnames2;
            break;
        }
    }
    if ($gender == 'female') {
        $surnames1 = [
            'Ma', 'Va', 'Na', 'U', 'Ze',
            'Ad', 'A', 'El', 'Ez', 'Im', 'I', 'Ja', 'Lo',
            'Uw', 'Vi',
        ];
        $surnames1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'du', 'za', 'ra', 'nai', 'nu',
            'a', 'de', 'l', 'hel', 'il', 'ze', 'na', 'e', 'th',
        ];
        $surnames2 = array_rand(array_flip($surnames2), 1);

        $surnames3 = [
            'rai', 'rin', 'mon', 'ru', 'rik',
            'ka', 'ya', 'a', 'zin', 'ra',
        ];
        $surnames3 = array_rand(array_flip($surnames3), 1);
        $syllables = rand(1, 3);
        switch ($syllables) {
        case 1:
            $firstname = $surnames1 . $surnames2 . $surnames3;
            break;
        case 2:
            $firstname = $surnames1 . $surnames3;
            break;
        case 3:
            $firstname = $surnames1 . $surnames2;
            break;
        }
    }
    $nickname = $firstname;
    $firstname = "a $race,  they use history and metaphors pertaining to lore
         as well as learning and are named after spiritual leaders and philosophers,
          in this case:";
    $lastname = $nickname;
    $divergence = "The $race believe that the path to an enlightened civilization
         lays in seclusion, not conflict. ";
}

if ($race == 'Githvyrik') {
    $firstname = "a $race,  they do not identify as either githyanki or githzerai
         but are named based on mathematics and chaos just like the arcance and psionic 
         powers from Vhostym, also known as Sojourner, in this case:";
    $lastname = $nickname;
    $divergence = "The $race believe the gods are nothing compared to the utter 
        randomness and enormity of the universe. The only order and predictability 
        that the universe has to offer the $race are its perfect mathematics. ";
}

$skintones = [
    'greenish','brownish',
];
$skintone = array_rand(array_flip($skintones), 1);


$divergence = $divergence." ".$nickname." 
looks emaciated, has a pale yellow skin with ".
$skintone." tones, and a long, angular skull with pointed ears.";
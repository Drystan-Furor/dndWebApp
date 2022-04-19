<?php
/*
    Hobgoblin
    Hobgoblin Tribe Names
    nickname as well, pointing to the nature of that specific Hobgoblin
    */
$surnames = [
    'Skin Flayers', 'Flesh Renders', 'Leg Choppers', 'Marrow Suckers', 'Eye Rippers',
    'Skull Smashers', 'Slow Killers', 'Gnawers', 'Cheek Reapers', 'Gut Jabbers',
    'Tribe Kaknec', 'Tribe Raknorz', 'Tribe Gagruc', 'Tribe Klulzek',
    'Tribe Nokorz', 'Tribe Rharz', 'Tribe Glorbal', 'Tribe Gavlan',
];
$lastname = array_rand(array_flip($surnames), 1);
$lastname = " of the " . $lastname;

$firstnames = [
    'Nar', 'Lorz Crash', 'Mog', 'Kundod', 'Dognerz', 'Lor Stalk', 'Khozrug',
    'Klaruk Bark', 'Avon Rend', 'Rhalzen ', 'Klalvarg', 'Ekkek ', 'Lokvovod ',
    'Vrurkozol ', 'Lerz ', 'Druzol', 'Zondud', 'Nokag', 'Grodral', 'Drorag',
    'Drolvrak',
];
$firstname = array_rand(array_flip($firstnames), 1);

$nicknames = [
    'The Dagger', 'Whack', 'Crash', 'Stunt', 'Revel', 'The Rotten',
    'Retch', 'The Bold', 'Rush', 'Jolt', 'Grin', 'The Brute', 'The Red',
    'The Corrupt', 'Glare', 'The Monster', 'Lash', 'Lurch',
    'The Skeleton', 'The Loud',
];
$nickname = array_rand(array_flip($nicknames), 1);

if ($homebrew == false) {
    $divergence = "The large goblinoid " . $firstname . " 
            is known as " . $nickname . ".";
} else {
    $divergence = "The $race " . $firstname . " 
            is known as " . $nickname . ".";
}

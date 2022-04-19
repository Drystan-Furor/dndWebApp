<?php
/*
    As proficient voice mimics, Kenku can impersonate other creatures, 
    animals, and even nature sounds. It is a common thing to name them 
    after the sounds they do, 
    often resulting in fairly interesting names. When asked who they are, 
    a Kenku may introduce himself with clicking sounds and thus be known as Clicker, 
    while the enemies might mock him by calling him “Dolphin Noise”.

    */

$surnames = [
    'Rabbit Scream' => "screaming rabbit",
    'Hammer Clank' => "clanking hammer",
    'Dog Wiggle' => "wiggeling dogtail",
    'Steel Clank' => "clanking of steel",
    'Lute String' => "strumming lute",
    'Book Slam' => "slamming of a book",
    'Leather Flick'  => "leather flicking",
    'Grain Trash'  => "hay bail",
    'Hide Smack' => "smacking of hides",
    'Snake Slither' => "slithering snake",
    'Chisel Carve' => "stonecutting",
    'Hoe Scrape' => "ground scraping",
    'Parrot Squawk' => "squaking parrot",
    'Jackal Call' => "howling Jackal",
    'Owl Call' => "owl coo",
    'Falcon Swoop' => "swooping bird",
    'Grain Mill' => "flour milling",
    'Chimer' => "chiming",
    'Duck Rustle' => "rustling duck",
    'Paint Stroke' => "painting paintbrush",
    'Kettle Bubble' => "water cooking",
    'Plunger' => "clogging",
    'Mouse Rustle' => "scurrying mouse",
    'Bell Drop' => "dropping town-bell",
    'Carver' => "wood carving",
    'Cobbler' => "sewing",
    'Dog Yelp' => "barking dog",
    'Crate Smash' => "crate being smashed",
    'Hatchet Drop' => "lumber chopping",
    'Stomper' => "thumping",
    'Fryer' => "flesh sizzling",
    'Parrot Call' => "squaking parrot",
    'Badger Run' => "rustling of a small animal",
    'Sheep Baa' => "bleating sheep",
    'Alligator Roar' => "roaring Lizardfolk",
    'Fox Yelp' => "howling fox",
    'Bee Buzzing' => "beehive",
    'Stampede' => "stampeding horses",
    'Coyote Yelp' => "crying coyote",
    'Horse Snort' => "snorting horse",
    'Tree Fall' => "falling tree",
    'Mallet Smash' => "slamming wooden hammer",
    'Potion Crash' => "bottle breaking",
];
//$lastname = array_rand(array_flip($surnames), 1);
$lastname  = array_rand($surnames);
$sounding = $surnames[$lastname];


$firstname = "a $race, when asked for it's name the $race makes a *" .
    $sounding . "* sound, hence $heshe is known as ";


//-----------------------------------------------NICKNAMES
$nicknames = [
    'Prodder', 'Clanger', 'Rustler', 'Knocker',
    'Tweeter', 'Snaker', 'Mimer', 'Piercer',
    'Drummer', 'Exploder', 'Smasher', 'Pigeoner',
    'Braker', 'Sifter', 'Roarer', 'Spitter', 'Giggler',
    'Clicker', 'Puffer', 'Roaster', 'Lugger', 'Burner',
    'Buzzer', 'Clogger', 'Howler', 'Sizzler', 'Mimicry',
];
$nickname = array_rand(array_flip($nicknames), 1);

//----------------------------------------------------------divergence
$divergence = $lastname . " is called " . $nickname .
    " around here, because of the sounds $heshe mimics. ";



/*
ARRAY = [
    1 => 2
];
$randomVAR = array_rand(ARRAY);
1 = $randomVAR
2 = ARRAY[$randomVAR]
*/

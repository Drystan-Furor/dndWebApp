<?php
/*
    Shifter
    There are 2 types of shifters, the Longtooth and the Razorclaw. 

    Shifter names tend to be closely related to nature, just as they are themselves. 
    Names such as 'Claw', 'Ash', 'Summer', and 'Rain' are the norm, which somewhat 
    resemble the names often used for fairies. However, 
    shifter names tend to sound more somber than fairy names.
    */

$surnames = [
    'Longtooth', 'Razorclaw',
];
$lastname = array_rand(array_flip($surnames), 1); //------lastname

if ($lastname == 'Longtooth') { //------------why LASTNAME
    $definition = 'The Longtooth shifters are more like wolves, 
                they work well in packs, are drawn to hierarchies, 
                and will come to the aid of friends and companions. ';
} else {
    $definition = "Razorclaw shifters are more like tigers, 
                they're independent, they assume their companions are 
                capable and able to take care of themselves just as they can,
                 and they will do their best to carry their own weight. ";
}


//-----------------------------------------------------names
if ($gender == 'male') {
    $malenames = [
        'Bramble', 'Badger', 'Cobble', 'Bluff', 'Vine', 'Spark', 'Acor',
        'Astro', 'Ravine', 'Pyro', 'Vermin', 'Pyre', 'Torrent', 'Flint',
        'Scar', 'Light', 'Nebula', 'Coal', 'Gulch', 'Crater', 'Breach',
        'Vermin', 'Gulch', 'Bog', 'Drift', 'Talon', 'Pyre', 'Crag',
        'Grit', 'Flare', 'Glare', 'Silver', 'Timber', 'Spark',
        'Flood', 'Ash', 'Stone', 'Fury', 'Wolf', 'Stripe',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Magenta', 'Amethyst', 'Elm', 'Harley', 'Karma', 'Ocean', 'Bloom',
        'Sage', 'Thistle', 'Diamond', 'Rill', 'Olive', 'Elm', 'Quill', 'Rose',
        'Sugar', 'Snowflake', 'Pyro', 'Violet', 'Canyon', 'Willow', 'Rosemary',
        'Poison', 'Olive', 'Poison', 'Isle', 'Spring', 'Emerald', 'Stardust',
        'Dewdrop', 'Rill', 'Ruby', 'Whirl', 'Harley', 'River', 'Twilight',
        'Sunrise', 'Silver', 'Sapphire',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}

//--------------------------------------------------------cause of shift
$prefixes = [ // x is a Shifter due to
    'being born from lycanthropy',
    'mysterious Fey causes',
    'barbarian rituals',
];
$prefix = array_rand(array_flip($prefixes), 1);

//--------------------------------------------------------class of shifter
$altfixes = [
    'Loreguards', 'Moonspeakers', 'Ragewild Shifters',
];
$altfix = array_rand(array_flip($altfixes), 1);

//---------------------------------------------------------nickname
$nickname = $firstname;

$divergence = $race . "s are the weretouched of Eberron, in some ways. 
As a child, the " . $race . " formed a close bond with the beast within. 
These totemic forces are explosive forces in " . $firstname . "’s personality, 
and all " . $race . "s have a unique inner beast that guides them in some way. " .
$firstname . " is a shifter due to " . $prefix . ", $heshe developed as a "
. $lastname . " Shifter and joined the " . $altfix . ". " . $definition;
<?php

/*
    Lizardfolk
    Lizardfolk Tribe Names
    Tribe names are made of basic words, usually names and adjectives of 
    the things from Lizardfolk’s daily lives and something that can 
    define them as a group.
    Names can be both male and female.
    */

$surnames = [
    'Bogstalker', 'Bogshadow', 'Deadmarsh', 'Birdhunter', 'Beastkiller',
    'Hardscale', 'Deadswamp', 'Poisondusk', 'Shadowscale', 'Longspear',
    'Swordfang', 'Spearmouth', 'Daggermaw', 'Swamprunner', 'Marshtrekker',
    'Redmountain', 'Graypond', 'Redfang', 'Ironflank', 'Stoneflesh',
];
$lastname = array_rand(array_flip($surnames), 1);

$malenames = [
    'Daecheraess', 'Buthratriass', 'Ark', 'Baok', 'Trechuss', 'Vegyk',
    'Maarkitho', 'Baax', 'Iskia', 'Usli', 'Muty', 'Trurgyv', 'Naskuch',
    'Mertarrark', 'Morassuch', 'Vithotrysk', 'Taart', 'Edresk', 'Mellurt',
    'Lopy', 'Nathre', 'Erhten', 'Vithretrasj', 'Oltugnos', 'Osk', 'The',
    'Jhortaa', 'Den', 'Traocheth', 'Nepisj', 'Sitru', 'Kiguard', 'Uthragat',
    'Nudhokra', 'Dechustysj', 'Sark', 'Vir', 'Merdis', 'Eslant', 'Throtird',
    'Berdex', 'Volakrard', 'Redassirk', 'Moshitrua', 'Toxh',
];
$firstname = array_rand(array_flip($malenames), 1);


$nickname = $lastname;
$divergence = $race . " are primitive reptilian humanoids that usually
    lurk in swamps and jungles.";
<?php

//-----------------------------------------------------------------LARGE
$bodysizes = [
    "sort of typical giant-sized", "common giant sized",
    "characteristically large sized", "naturally large sized", "typical",
    "more or less standard sized", "moderately large sized", 'sizable',

    "large", "quite large", "very large", "really large",
    "slightly larger", "reasonably large", 'immense', 'enormous',
    "massive", "tall", 'big', 'hulking', 'towering', 'giant',
];
$bodysize = array_rand(array_flip($bodysizes), 1);

/*
Every goliath has three names: a birth name assigned by 
the newborn’s mother and father, 
a nickname assigned by the tribal chief, 
and a family or clan name. 

A goliath’s nickname is a description that can change 
on the whim of a chieftain or tribal elder. 
It refers to a notable deed, either a success or failure, committed by the goliath. 

Goliaths present all three names when identifying themselves, 
in the order of birth name, nickname, and clan name. 
In casual conversation, they use their nickname.
*/

$surnames = [
    'Anakalathai', 'Elanithino', 'Gathakanathi', 'Kalagiano',
    'Katho-Olavi', 'Kolae-Gileana', 'Ogolakanu',
    'Thuliaga', 'Thunukalathi', 'Vaimei-Laga',
];
$lastname = array_rand(array_flip($surnames), 1);

$birthnames = [
    'Aukan', 'Eglath', 'Gae-Al', 'Gauthak', 'Ilikan', 'Keothi',
    'Kuori', 'Lo-Kag', 'Manneo', 'Maveith', 'Nalla', 'Orilo',
    'Paavu', 'Pethani', 'Thalai', 'Thotham', 'Uthal', 'Vaunea', 'Vimak',
];
$firstname = array_rand(array_flip($birthnames), 1);

$nicknames = [
    'Bearkiller', 'Dawncaller', 'Fearless', 'Flintfinder', 'Horncarver',
    'Keeneye', 'Lonehunter', 'Longleaper', 'Rootsmasher', 'Skywatcher',
    'Steadyhand', 'Threadtwister', 'Twice-Orphaned', 'Twistedlimb',
    'Wordpainter',
];
$nickname = array_rand(array_flip($nicknames), 1);
$divergence = "In casual conversation " .
    $heshe . " is called " . $nickname . ".";

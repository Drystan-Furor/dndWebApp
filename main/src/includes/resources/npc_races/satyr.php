<?php

/*
    Satyr Names
    Satyrs have names that they draw from legends and 
    myths-and from the powers that rule over the realm of the fey.
    */
$firstname = "";
if ($gender == 'male') {
    $malenames = [
        'Adrastos', 'Aeolus', 'Brontes', 'Castor', 'Cephalus', 'Glaucus',
        'Helios', 'Iacchus', 'Kreios', 'Lycus', 'Melanthios', 'Okeanos',
        'Proteus',
    ];
    $lastname = array_rand(array_flip($malenames), 1);
}
if ($gender == 'female') {
    $femalenames = [
        'Acantha', 'Astraea', 'Briseis', 'Clio', 'Erato', 'Harmonia',
        'Ianthe', 'Jocasta', 'Melete', 'Phaedra', 'Phoebe', 'Selene',
        'Tethys',
    ];
    $lastname = array_rand(array_flip($femalenames), 1);
}
$nickname = $lastname;
$divergence = "Satyrs resemble stout men and woman with fur covered lower bodies 
        and cloven hooves similar to that of a goat. Horns grow from " . $nickname . "'s head, 
        akin to a ram.";

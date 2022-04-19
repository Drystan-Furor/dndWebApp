<?php

// Simic Hybrid
$randomorigins = [
    "Human", "Elf", "Vedalkan",
];
$raceorigin = array_rand(array_flip($randomorigins), 1);


if ($age > 30) {
    $age /= 2;
}
if ($age < 15) {
    $age += 3;
}
$age = ceil($age);



$divergence = "As a hyper-develloped $race, $heshe is designed by the 
Guardian Project to serve a specific purpose 
that involves protecting the Simic Combine in some way as a “guardian”.";


//-----------------------------------------------------SCRIPT CALLER

if ($raceorigin == "Human") {
    $divergenceIsSet = true;
    include_once 'includes/dndraces/human.php'; // call script
}

if ($raceorigin == "Elf") {
    include_once 'includes/dndraces/elf.php'; // call script
}

if ($raceorigin == "Vedalkan") {
    include_once 'includes/dndraces/vedalkan.php'; // call script
}
<?php

// Owlfolk

if ($gender == 'male') {
    $malenames = [
        'Beak', 'Head', 'Iris', 'Pupil', 'Mantle', 'Scapulars', 'Tertials',
        'Rump', 'Thigh', 'Tibio', 'Tarsus', 'Tibia', 'Eyestripe', 'Wattle',
        'Gizzard', 'Oblique', 'Plume', 'Talon', 'Tuft', 'Plumage',
        'Claws', 'Wings', 'Ruffage', 'Wingspan', 'Mandible', 'Quill',
        'Scutes', 'Cancella', 'Scutella', 'Vision', 'Syrinx',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}

if ($gender == 'female') {
    $femalenames = [
        'Glide', 'Soar', 'Avian', 'Bewilder', 'Dive', 'Endeavor', 'Gust', 'Screech',
        'Sing', 'Soar', 'Whet', 'Descend', 'Drift', 'Tilt', 'Float', 'Fly', 'Glissade',
        'Baffle', 'Daze', 'Fluster', 'Mystify', 'Aspire', 'Assay', 'Venture', 'Squall',
        'Paroxysm', 'Chant', 'Hum', 'Serenade', 'Hymn', 'Cantillate',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}
$lastname = $firstname;
$firstname = "";
$nickname = $lastname;
$divergence = "Distant kin of giant owls, this " . $race . " is quite humanoid.";

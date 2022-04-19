<?php
/*
    Yuan-ti Pureblood

    */

$surnames1 = [
    'Ih', 'Szeh', 'As', 'Sziz', 'Izt', 'Ma',
    'Nezhas', 'Ezti', 'Zsez', 'Thito', 'Yu',
    'Oak', 'Shih', 'Aht', 'Sshuh', 'Thelt', 'Hu',
    'Tuhe', 'Ina', 'Us', 'Melt', 'Sshe', 'Ssho',
    'So', 'Uh', 'Sset', 'Estle', 'Sshih',
    'Iske', 'Zha', 'Thi', 'Yoz', 'Zal', 'O',
    'Zhoal', 'Zset', 'Estih', 'Eztlu', 'Suztol',
    'Thoksoa',
];
$lastname1 = array_rand(array_flip($surnames1), 1);

$surnames2 = [
    'shu', 'lah', 'kiss', 'tiu', 'liu', 'kuss',
    'siesh', 'thi', 'sheshluh', 'shlu', 'lui',
    'la', 'Shih', 'luh', 'tla', 'siall', 'tola',
    'til', 'tu', 'ziti', 'suh', 'shul', 'ma',
    'kall', 'sieh', 'stlil', 'zhal', 'sehiul',
    'liess', 'hisu', 'skul', 'tlu', 'sheel', 'su',
    'kiull', 'zei', 'sih', 'shas', 'lie',
    'theeh', 'sei', 'shos', 'zhash', 'liesh', 'sheesh',
    'koss', 'kass', 'kess', 'shes', 'zhosh', 'shi', 'sho', 'sohiul',
];
$lastname2 = array_rand(array_flip($surnames2), 1);

$lastname = $lastname1 . $lastname2;

$firstname = " a very serpent looking " . $randomorigin . " named ";

$nickname = $lastname;

$divergence = "The serpentine " . $randomorigin . " " . $race .
    " talks with many hissing sounds.";

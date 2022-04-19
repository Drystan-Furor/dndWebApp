<?php
/*
    vedalken
    Vedalken Names. Vedalken are given names at birth, but usually choose new names for 
    themselves as part of their transition into adulthood. 
    They rarely use family names.
        */

if ($gender == 'male') {
    $prefixes = [
        'Ag', 'Bel', 'Dal', 'Firel', 'Ka', 'Kop', 'Lo', 'Math', 'Mo',
        'Ne', 'Nhil', 'Ni', 'Otro', 'Ov', 'Pele', 'Ri', 'Tri',
        'Ul', 'Yo', 'Za',
    ];
    $prefix = array_rand(array_flip($prefixes), 1);

    $altfixes = [
        'lar', 'lin', 'lid', 'lan', 'vin', 'lony', 'mar', 'van', 'dar',
        'bun', 'losh', 'tt', 'vac', 'ner', 'll', 'vaz', 'din',
        'lov', 'taz',
    ];
    $altfix = array_rand(array_flip($altfixes), 1);
}

if ($gender == 'female') {
    $prefixes = [
        'A', 'Bar', 'Bra', 'Di', 'Fa', 'Gri', 'Hal', 'Kat', 'Ko', 'Lil',
        'Mi', 'Mo', 'Ne', 'Os', 'Pie', 'Ro', 'Se',
        'Tri', 'Uza', 'Yara', 'Zlo',
    ];
    $prefix = array_rand(array_flip($prefixes), 1);

    $altfixes = [
        'zi', 'visa', 'zia', 'rell', 'inn', 'ya', 'lia', 'rille', 'vel',
        'la', 'rela', 'rai', 'dress', 'sya', 'renn', 'ya', 'stri',
        'el', 'na', 'ghiya', 'vol',
    ];
    $altfix = array_rand(array_flip($altfixes), 1);
}
$firstname = "";
$lastname = $prefix . $altfix;
$nickname = $lastname;

if ($race == "Vedalkan") {
    $divergence = $race . "s are largely humanoid, besides $hisher blue skin 
        the most notable outward feature of $nickname is $hisher lack of 
        external ears.";
}

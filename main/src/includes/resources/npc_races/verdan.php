<?php
/*
    Verdan

        */

$prefixes = [
    'A', 'Illu', 'Bry', 'Kor', 'Zo', 'Ell', 'Crea', 'Drer', 'O', 'Ve', 'Veri', 'Voi',
    'Yes', 'N', 'Toi', 'Sly', 'Fae', 'Demo', 'Gry', 'Hu', 'Stu', 'Pa', 'Prae', 'Mo',
    'To', 'Kle', 'Quya', 'Graer', 'Stea', 'Cri', 'Mer', 'Yee', 'Paleac', 'El', 
    'Xwee',
];
$prefix = array_rand(array_flip($prefixes), 1);

$altfixes = [
    'rt', 'mie', 'ls', 'm', 'v', 'bert', 'valm', 'ke', 'mi', 'riga', 'ga', 'sat', 
    'g', 't', 'ra', 'ry', 'nic', 'rm', 'lm', 'ssa', 'q', 'sh', 'lli', 'xi', 'bena', 
    'rin', 'ma', 'ci', 'vis', 'lk', 'then', 'vlelk','znag','sup',
];
$altfix = array_rand(array_flip($altfixes), 1);

$lastname = $prefix . $altfix;
$firstname = " the traveller ";
$nickname = $lastname;

$divergence = "$race are golbinoids with a strangely mutating body.";
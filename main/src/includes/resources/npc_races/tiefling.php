<?php
// Tiefling Names
$surnames = [
    'Art', 'Carrion', 'Chant', 'Creed', 'Despair', 'Excellence', 'Fear',
    'Glory', 'Hope', 'Ideal', 'Music', 'Nowhere', 'Open', 'Poetry',
    'Quest', 'Random', 'Reverence', 'Sorrow', 'Temerity', 'Torment', 'Weary',
];
$lastname = array_rand(array_flip($surnames), 1);


if ($gender == 'male') {
    $malenames = [
        'Akmenos', 'Amnon', 'Barakas', 'Damakos', 'Ekemon', 'Iados',
        'Kairon', 'Leucis', 'Melech', 'Mordai', 'Morthos', 'Pelaios',
        'Skamos', 'Therai',
    ];
    $firstname = array_rand(array_flip($malenames), 1);
}


if ($gender == 'female') {
    $femalenames = [
        'Akta', 'Anakis', 'Bryseis', 'Criella', 'Damaia', 'Ea', 'Kallista',
        'Lerissa', 'Makaria', 'Nemeia', 'Orianna', 'Phelaia', 'Rieta',
    ];
    $firstname = array_rand(array_flip($femalenames), 1);
}


$nickname = $firstname;


$divergence = "To be greeted with stares and whispers, to suffer violence 
        and insult on the street, to see mistrust and fear in every eye: 
        this is the lot of the " . $race . ".";
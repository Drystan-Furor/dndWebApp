<?php

//--------------------------------------------------------------------- Damaran
if ($humantype == "Damaran" && $divergenceIsSet == false) {
    $divergence = "Found primarily in the northwest of Faerûn, Damarans
        are of moderate height and build, with skin hues ranging from tawny 
        to fair. Their hair is usually brown or black, and their eye color 
        varies widely, though brown is most common.";
}
if ($humantype == "Damaran") {
    $surnames = [
    'Bersk', 'Chernin', 'Dotsk', 'Kulenov', 'Marsk', 'Nemetsk', 
    'Shemov', 'Starag',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Bor', 'Fodel', 'Glar', 'Grigor', 'Igan', 'Ivor', 
        'Kosef', 'Mival', 'Orel', 'Pavel', 'Sergor', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Alethra', 'Kara', 'Katernin', 'Mara', 
        'Natali', 'Olma', 'Tana', 'Zora', 
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
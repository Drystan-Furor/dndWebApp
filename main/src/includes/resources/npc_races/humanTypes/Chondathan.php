<?php
//------------------------------------------------------------Chondathan Names:
if ($humantype == "Chondathan" && $divergenceIsSet == false) {
    $divergence = "Chondatans are slender, tawny-skinned folk with brown hair 
    that ranges from almost blond to almost black. Most are tall and have green 
    or brown eyes, but these traits are hardly universal. Humans of Chondathan 
    descent dominate the central lands of Faerûn, around the Inner Sea.";
}

if ($humantype == "Chondathan" || $humantype == "Tethyrian" ) {
    $surnames = [
     'Amblecrown', 'Buckman', 'Dundragon', 'Evenwood', 'Greycastle', 'Tallstag',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Darvin', 'Dorn', 'Evendur', 'Gorstag', 'Grim', 
        'Helm', 'Malark', 'Morn', 'Randal', 'Stedd', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }     

    if ($gender == 'female') {
        $femalenames = [
        'Arveene', 'Esvele', 'Jhessail', 'Kerri', 
        'Lureene', 'Miri', 'Rowan', 'Shandri', 'Tessele',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
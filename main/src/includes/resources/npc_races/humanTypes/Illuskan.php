<?php

//----------------------------------------------------------------Illuskan Names: 
if ($humantype == "Illuskan" && $divergenceIsSet == false) {
    $divergence = "Illuskans are tall, fair-skinned folk with blue or 
    steely gray eyes. Most have raven-black hair, but those who inhabit 
    the extreme northwest have blond, red, or light brown hair.";
}
if ($humantype == "Illuskan") {
    $surnames = [
    'Brightwood', 'Helder', 'Hornraven', 'Lackman', 
    'Stormwind', 'Windrivver',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Ander', 'Blath', 'Bran', 'Frath', 'Geth', 'Lander', 
        'Luth', 'Malcer', 'Stor', 'Taman', 'Urth',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Amafrey', 'Betha', 'Cefrey', 'Kethra', 'Mara', 
        'Olga', 'Silifrey', 'Westra',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
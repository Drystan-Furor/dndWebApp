<?php

//------------------------------------------------------------------Mulan Names: 
if ($humantype == "Mulan" && $divergenceIsSet == false) {
    $divergence = "Dominant in the eastern and southeastern shores of 
    the Inner Sea, the Mulan are generally tall, slim, and amber-skinned, 
    with eyes of hazel or brown. Their hair ranges from black to dark brown, 
    but in the lands where the Mulan are most prominent, nobles and many 
    other Mulan shave off all their hair.";
}
if ($humantype == "Mulan") {
    $surnames = [
    'Ankhalab', 'Anskuld', 'Fezim', 'Hahpet', 'Nathandem', 
    'Sepret', 'Uuthrakt',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Aoth', 'Bareris', 'Ehput-Ki', 'Kethoth', 'Mumed', 
        'Ramas', 'So-Kehur', 'Thazar-De', 'Urhur', 
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Arizima', 'Chathi', 'Nephis', 'Nulara', 'Murithi', 
        'Sefris', 'Thola', 'Umara', 'Zolis',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
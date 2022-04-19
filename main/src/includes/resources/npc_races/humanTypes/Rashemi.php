<?php


//--------------------------------------------------------------------Rashemi Names: 
if ($humantype == "Rashemi" && $divergenceIsSet == false) {
    $divergence = "Most often found east of the Inner Sea and often 
    intermingled with the Mulan, Rashemis tend to be short, stout, and muscular. 
    They usually have dusky skin, dark eyes, and thick black hair.";
}
if ($humantype == "Rashemi") {
    $surnames = [
    'Chergoba', 'Dyernina', 'Iltazyara', 'Murnyethara', 
    'Stayanoga', 'Ulmokina',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Borivik', 'Faurgar', 'Jandar', 'Kanithar', 'Madislak', 
        'Ralmevik', 'Shaumar', 'Vladislak',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Fyevarra', 'Hulmarra', 'Immith', 'Imzel', 'Navarra', 
        'Shevarra', 'Tammith', 'Yuldra',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
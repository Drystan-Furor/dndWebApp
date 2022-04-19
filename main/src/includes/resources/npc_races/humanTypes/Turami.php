<?php

//--------------------------------------------------------------------Turami Names: 
if ($humantype =="Turami" && $divergenceIsSet == false) {
    $divergence = "Native to the southern shore of the Inner Sea, 
        the Turami people are generally tall and muscular,
        with dark mahogany skin, curly black hair, and dark eyes.";
}
if ($humantype =="Turami") {
    $surnames = [
    'Agosto', 'Astorio', 'Calabra', 'Domine', 'Falone', 
    'Marivaldi', 'Pisacar', 'Ramondo',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'Anton', 'Diero', 'Marcon', 'Pieron', 'Rimardo', 
        'Romero', 'Salazar', 'Umbero',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Balama', 'Dona', 'Faila', 'Jalana', 'Luisa', 
        'Marta', 'Quara', 'Selise', 'Vonda',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
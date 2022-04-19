<?php
//----------------------------------------------------------------------------Shou
if ($humantype == "Shou" && $divergenceIsSet == false) {
    $divergence = "The Shou are the most numerous and powerful ethnic 
        group in Kara-Tur, far to the east of Faerûn. They are yellowish-bronze in 
        hue, with black hair and dark eyes. Shou surnames are usually presented 
        before the given name.";
}
if ($humantype == "Shou") {
    $surnames = [
    'Chien', 'Huang', 'Kao', 'Kung', 'Lao', 'Ling', 'Mei', 'Pin', 
    'Shin', 'Sum', 'Tan', 'Wan',
    ];
    $lastname = array_rand(array_flip($surnames), 1);

    if ($gender == 'male') {
        $malenames = [
        'An', 'Chen', 'Chi', 'Fai', 'Jiang', 'Jun', 'Lian', 
        'Long', 'Meng', 'On', 'Shan', 'Shui', 'Wen',
        ];
        $firstname = array_rand(array_flip($malenames), 1);    
    }
        
    if ($gender == 'female') {
        $femalenames = [
        'Bai', 'Chao', 'Jia', 'Lei', 'Mei', 'Qiao', 'Shui', 'Tai',
        ];
        $firstname = array_rand(array_flip($femalenames), 1);            
    } 
}
<?php
/*

    Khalashtar names are three to five syllables long 
    and feature hard and hissing consonants. 
    */

if ($gender == 'male') {
    $malenames = [
        'harath', 'khad', 'melk', 'tash', 'kosh', 'tosh',
    ];
    $suffixname = array_rand(array_flip($malenames), 1);
    $prefixes = [
        'Hal', 'Havra', 'Kana', 'Lana', 'Lan', 'Mal', 'Min',
        'Nevi', 'Par', 'Nol', 'Mo', 'Bo', 'Bal', 'Bul-ka',
        'Do', 'Re', 'Kes',
        'Mi', 'Fa', 'Sol', 'Si', 'Do', 'He',

    ];
    $prefix = array_rand(array_flip($prefixes), 1);
    $lastname = $prefix . $suffixname;
}

if ($gender == 'female') {
    $femalenames = [
        'kashtai', 'shana', 'tari', 'vakri', 'raulad', 'reth', 'shara', 'nari',
    ];
    $suffixname = array_rand(array_flip($femalenames), 1);
    $prefixes = [
        'Gani', 'Kha', 'La', 'Me', 'No', 'Pani', 'Sora',
        'Sho', 'Tha', 'Lo', 'Deha', 'Cozo', 'Do', 'Re',
        'Mi', 'Fa', 'Sol', 'Si', 'Do',
    ];
    $prefix = array_rand(array_flip($prefixes), 1);
    $lastname = $prefix . $suffixname;
}
$firstname = '';
$nickname = $lastname;
$divergence = "The " . $race . " are a compound race created from the union of 
humanity and renegade spirits from the plane of dreams – spirits called quori. 
" . $race . " are often seen as wise, spiritual people with great compassion for 
others. But there is an unmistakable alien quality to " . $nickname . ", 
as they are haunted by the conflicts of their otherworldly spirits.";

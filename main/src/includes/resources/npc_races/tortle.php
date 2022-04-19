<?php
/*
    Tortle names are quite short and simple, but there are exceptions.
    There is no distinction between male and female names.
    Tortle names can change a lot throughout their lives. 
    They pick and choose names as they see fit, 
    so encountering a tortle years later can look different and pick a new name.

    */

$surnames = [
    'Lim', 'Ini', 'Gar', 'Damu', 'Quott', 'Xelbuk', 'Ploqwat', 'Kinlek',
    'Orly', 'El', 'Em', 'Elad', 'Irtig', 'Wolka', 'Lurtill', 'Nurtlen',
    'Krin', 'Natt', 'Juoror', 'Artli', 'Oppog', 'Plog', 'Iat', 'Pluzu',
    'Lorog', 'Nadyd', 'Uoppe', 'Plug', 'Kuret', 'Artli', 'Oppog', 'Plog',
    'Iat', 'Pluzu', 'Lorog', 'Nadyd', 'Uoppe', 'Plug', 'Kuret', 'Loper',
    'Uazlul', 'Xak', 'Nuall', 'Dinqom', 'Alatt', 'Wenquc', 'Nonnik',
    'Plurtar', 'Emod', 'Lerdla', 'Xikal', 'Erot', 'Wam', 'Kruk', 'Qo',
    'Buzeg', 'Plupen', 'Kriac', 'Gunqe', 'Yizlu', 'Wug', 'Pluc', 'Azloc',
    'Ul', 'Bur', 'Jize', 'Budat', 'Tueg', 'Dualkyr', 'Xirdlyl', 'Tua',
    'Wig', 'Gurtoll', 'Dat', 'Wuldull', 'Oza', 'Wozluc', 'Nemu', 'Duzla',
];
$surname = array_rand($surnames, 2);
$nickname = $surnames[$surname[0]];
$firstname = $surnames[$surname[1]];
$lastname = $nickname;

//----------------------------------------------- tortle $age = rand(12, 50);
if ($age < 20) {
    $y = rand(2, 6);
} else if ($age > 30) {
    $y = rand(2, 18);
} else {
    $y = rand(2, 5);
}


$yearsAgo = $age - $y;
$divergence = 'A bipedal tortoise who ' . $y .
    ' years ago choose the name ' .$nickname.
    ", as Tortles pick and choose names as they see fit.";
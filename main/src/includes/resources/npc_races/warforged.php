<?php
// Warforged

//----------------------NO WEALTH---------------------------Warforged
$beggar = false;
$prosperous = false;
$rich = false;
$loaded = false;
$poor = false;

/**
---------------------------------------------------------------ARRAY'S
 */
$spareparts = [ //-----------------------------inorganic---spare-parts
    'cylinders', 'pistons', 'clockwork parts', 'cogs', 'gears', 'pinions',
    'shafts', 'valves', 'bearings', 'springs', 'cogwheels', 'pneumatics',
    'connecting rods', 'poppet valves', 'sleeve valves', 'rotary valves',
    'axles', 'manifolds', 'servosystems', 'actuators', 'telemetrical instruments',
    'tactile sensors', 'locomotion systems', 'animatronics', 'cybernetics',
    'orthotics', 'prosthetics', 'proprioceptive sensors', 'ultrasonic actuators',
    'pneumatic actuators', 'bolts', 'screws', 'nails', 'metal wires',
];

$eyestones = [ //----------------------------------------------GEMSTONES
    'black Onyx',
    'green Emerald',
    'black Sapphire',
    'blue Sapphire',
    'white Diamond',
    'red Ruby',
    'yellow Opal',
    'blue Spinel',
    'green-blue Turqoise',
    'gold Amber',
    'crimson Coral',
    'brass-yellow Pyrite',
    'rose Quartz',
    'blue Quartz',
    'gray-black Hermatite',
    'dark green Malachite',
    'flamed red-black Sardonyx',
    'orange Zircon',
    'speckled red Jasper',
    'purple Amethyst',
    'transparent fiery orange Jacinth',
];

//-------------------------------------------------------colored lights
$glowingcolors = [
    'red', 'blue', 'green', 'white', 'yellow', 'purple',
];

//---------------------------------------------------------bodyparts
$bodyparts = [
    'arms', 'legs', 'back', 'neck', 'shoulders', 'belly', 'hands', 'feet',
    'upper arms', 'upper legs', 'chest', 'torso', 'throat', 'head', 'face',
    'wrists', 'knees', 'elbows', 'ribcage',
];


//----------------------------------------------------------------connections      
$connections = [ //it's all connected and held together with
    'interwoven thorny vines', 'roots of flowering plants', 'tendrills',
    'copper pipes', 'leather belts', 'metal pipes', 'woven rope', 'chains',
    'nails', 'tangling roots', 'tubes', 'roots', 'leather straps',
    'braided roots', 'braided vines', 'braided thorny vines', 'rags',
    'cloth wraps',
];




















// Warforged 
/**
 -------------------------------------------------------------------NAME
 */
//------------------------------------------------------------------nickname

if ($gender == 'male') {
    $malenames = [
        'Ash', 'Atlas', 'Chroma', 'Excalibur', 'Frost', 'Hydroid', 'Inaros',
        'Limbo', 'Loki', 'Nekros', 'Nezha', 'Revenant', 'Sevagoth', 'Xaku',
        'Oberon', 'Rhino', 'Vauban', 'Volt', 'Wukong', 'Nidus', 'Baruuk', 'Gauss',
        'Grendel', 'Harrow', 'Lavos',
    ];
    $firstnamed = array_rand(array_flip($malenames), 1);
}
if ($gender == 'female') {
    $femalenames = [
        'Banshee', 'Ember', 'Equinox', 'Ivara', 'Mag', 'Mesa', 'Mirage', 'Nova',
        'Nyx', 'Saryn', 'Trinity', 'Titania', 'Wisp', 'Xaku', 'Yareli', 'Protea',
        'Valkyr', 'Zephyr', 'Gara', 'Garuda', 'Hildryn', 'Khora', 'Octavia',
        'Vyommitra',
    ];
    $firstnamed = array_rand(array_flip($femalenames), 1);
}
/**
 ---------------------------------------------------------RENAME GENDER VARS
 */
$gender = 'constructed';
$thisGender = 'robot';
$heshe = 'it';
$hisher = "it's";
$firstname = "Soldier";


//-----------------------------------------------------------------NAME GENERATOR   
$prefixes = [
    'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e', 'F', 'f', 'G', 'g',
    'H', 'h', 'I', 'i', 'J', 'j', 'K', 'k', 'L', 'l', 'M', 'm', 'N', 'n',
    'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r', 'S', 's', 'T', 't', 'U', 'u',
    'V', 'v', 'W', 'w', 'X', 'x', 'Y', 'y', 'Z', 'z',
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
];

$prefix = array_rand(array_flip($prefixes), 1);
$altfix = array_rand(array_flip($prefixes), 1);
//run same array twice to allow AA-00
//PHP won't pick the same key twice in one call.

$numfixes = [
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
    '1', '2', '3', '4', '5', '6', '7', '8', '9',
];

$theNumbersMason = array_rand(array_flip($numfixes), 1);
$whatDoTheyMean = array_rand(array_flip($numfixes), 1);
//run same array twice to allow 11-99
//PHP won't pick the same key twice in one call.


//----------------------------------------------------------------RANDOMIZE NAME
$nr1 = array_rand($prefixes, 2);
$nr2 = array_rand($prefixes, 2);
$nr3 = array_rand($numfixes, 2);
$nr4 = array_rand($numfixes, 2);
$lastnamed = [];
for ($i = 0; $i < 2; $i++) {
    $lastnamed[$i] = $prefixes[$nr1[$i]] . $prefixes[$nr2[$i]] . "-"
        . $numfixes[$nr3[$i]] . $numfixes[$nr4[$i]];
}


$hasName = rand(1, 7);
switch ($hasName) {
    case 1:
        $lastname = $lastnamed[0];
        break;
    case 2:
        $lastname = $lastnamed[0] . "/" . $lastnamed[1];
        break;
    case 3:
        $lastname = $theNumbersMason . $whatDoTheyMean . $prefix . $altfix;
        break;
    case 4:
        $lastname =  $prefixes[$nr1[0]] . $prefixes[$nr2[0]] .
            $prefixes[$nr1[1]] . $numfixes[$nr4[0]] . $numfixes[$nr4[1]];
        break;
    case 5:
        $lastname = $prefixes[$nr1[0]] . $prefixes[$nr2[0]] . $prefixes[$nr1[1]] .
            $prefixes[$nr2[1]] . "-" . $numfixes[$nr3[0]] . $numfixes[$nr4[0]] .
            $numfixes[$nr3[1]] . $numfixes[$nr4[1]];
        break;
    case 6:
        $lastname = "00" . $numfixes[$nr3[0]] . $numfixes[$nr3[1]];
        break;
    case 7:
        $lastname = $prefix . "-" . $altfix . $theNumbersMason;
        break;
    default:
        $lastname = 'TK-571';
        break;
}

$nickname = $firstnamed;

//-----------------------------------------------WHO NAMED IT? --$wealth

//-------------------------------------------PEOPLE
$peoples = [
    'the ' . $randomorigin . ' creators ',
    'neighbours ',
    'friends ',
];
$people = array_rand(array_flip($peoples));

//-------------------------------------------NAMED
$namings = [
    'named',
    'renamed',
    'call',
    'refer to',
    'dubbed',
    'labeled',
    'titled',
];
$named = array_rand(array_flip($namings));

//---------------------------------------------THE ROBOT
$robots = [
    ' the decommissioned war machine ',
    ' the robot',
    ' ' . $lastname . ' ',
];
$theRobot = array_rand(array_flip($robots));


$whoNamed = $people . " of " . $lastname . " " . $named . " "
    . $theRobot . ' as ' . $nickname;
//'it picked itself a nickname: ' . $nickname,

//------------------------------------------THE ROBOT NAMED THE ROBOT [5%]
$isItNamed = rand(1, 20);
if ($isItNamed == 1) {
    $nickname = $lastname;
    $whoNamed = 'the robot has retained ' . $hisher .
        ' original designation ' . $nickname;
}

$wealth = $whoNamed . ". ";



// wear belts?





/**
 -------------------------------------------------------------------FACE 
 */

//--------------------------------------------------------eyes
$eyestone = array_rand(array_flip($eyestones), 1);
$glowingcolor = array_rand(array_flip($glowingcolors), 1);
$eyes = " crystalline " . $eyestone . " stones instead of eyes, that glow "
    . $glowingcolor;


//-------------------------------------------------------mouth
$metal = array_rand(array_flip($metals), 1);

$mouthshape = [
    'a hinged ' . $metal . ' jaw',
    'a motorized ' . $metal . ' jaw',
    'a ' . $metal . ' ventriloquist doll jaw',
    'a ' . $metal . ' grate',

];
$mouth = array_rand(array_flip($mouthshape), 1);



//----------------------------------------------------------------------------NO NOSE
$nose = "no nose.";


//------------------------------------------------------------------------------teeth
$metal = array_rand(array_flip($metals), 1);
$quality = array_rand(array_flip($qualities), 1);

$dentalwork = [
    "has no teeth", "is not designed with teeth",
    "has several " . $metal . " nails as teeth",
    "has no teeth at all",
    "has small " . $metal . " plates as teeth",
    "has metal drills with a " . $metal . " coating as teeth",
    "has filed, sharp edged " . $metal . " bolts as teeth",
    "has nails as teeth, made of " . $quality . " " . $metal,
    "has " . $metal . " revolving gears instead of teeth",
    " has a " . $metal . " meatgrinder instead of teeth",
];
$teeth = array_rand(array_flip($dentalwork), 1);
/**
 ------------------------------------------------------------------------scars--DAMAGED
 */
$dents = [
    'indentation',
    'incline',
    'dent',
    'scratch',
    'scrape',
    'chip',
    'perforation',
    'claw mark',
];
$dent = array_rand($dents, 5);

$scarlines = [
    "horizontal " . $dents[$dent[0]],
    "vertical " . $dents[$dent[1]],
    $dents[$dent[2]],
    "diagonal " . $dents[$dent[3]] . ", from the left to the right",
    "diagonal " . $dents[$dent[4]] . ", from the right to the left",
];
//scarsides
//scarlocations

/**
 ---------------------------------------------------------------------------------------BODY
 */
//----------------------------------------------------------------------BODY SIZE
$bodysizes = [
    "sort of typical giant-sized", "uncommonly large sized",
    "characteristically large sized", "unnnaturally large sized", "typical",
    "more or less standard sized", "moderately large sized", 'sizable',

    "large", "quite large", "very large", "really large",
    "slightly larger", "reasonably large", 'immense', 'enormous',
    "massive", "tall", 'big', 'hulking', 'towering', 'giant',
];
$bodysize = array_rand(array_flip($bodysizes), 1);


$bodytypes = [ //------------------------------------------------------BODY TYPES
    "primarily as an Android",
    "primarily as an Automaton",
    "as a Cyborg",
    "primarily as a Humanoid robot",
    "as a Replicant",
    "primarily as a Synthoid",
    "as a Gynoid",
    "primarily as an interpersonal communications model",
    "primarily as a Mechanoid",
    "primarily as a Maschinenmensch",
];
$bodytype = array_rand(array_flip($bodytypes), 1);



//---------------------------------------------------------------BODY SHAPE
// with ...
$sparePart = array_rand($spareparts, 4);
$bodypart = array_rand($bodyparts, 7);

$bodyshape =    $spareparts[$sparePart[0]] . " together with " .
    $spareparts[$sparePart[1]] . " in it's " .
    $bodyparts[$bodypart[5]] . " while his " .
    $bodyparts[$bodypart[6]] . " has " .
    $spareparts[$sparePart[2]] . " along with " .
    $spareparts[$sparePart[3]];

/** 
//-----------------------------------------------------------------$WARFORGED
 */
$treated = array_rand(array_flip($carpenterswood));
$connection = array_rand($connections, 2);

$warforged = $nickname . " has a skeletal frame made of " . $treated . " wood. 
It's parts and joints are all conected and held together with "
    . $connections[$connection[0]] . " and "
    . $connections[$connection[1]] . ". ";

//-------------------------------------------------------------------------------
$maintained = array_rand($maintenances, 2);
$sparePart = array_rand($spareparts, 3);

$warforged = $warforged . "Both it's " . $bodyparts[$bodypart[0]] .
    " and $nickname's " . $bodyparts[$bodypart[1]] . " have visible innards, showing 
either " . $maintenances[$maintained[0]] . " or " . $maintenances[$maintained[1]] .
    " " . $spareparts[$sparePart[0]] . ", " . $spareparts[$sparePart[1]] . " and "
    . $spareparts[$sparePart[2]] . ". ";

//--------------------------------------------------------------------large sentence
$upkeep = array_rand($maintenances, 2);
$platemetal = array_rand($platemetals, 2);
$enamel = array_rand(array_flip($enameling), 1);

/** 
//-----------------------------------------------------------------$WARFORGED 2
 */
$warforged
    = $warforged . " The robot has " .
    $maintenances[$upkeep[0]] . " " .                       //maintained
    $platemetals[$platemetal[0]] . " plating on it's " .    //plating
    $bodyparts[$bodypart[2]] . " and " .                     // on arms
    $bodyparts[$bodypart[3]] . ", while the " .             // and legs
    $platemetals[$platemetal[0]] . " armor " . $nickname . " wears on it's " . //plating
    $bodyparts[$bodypart[1]] . " looks pretty " .            //on chest
    $maintenances[$upkeep[1]] . ". $lastname even has " .   //is maintained
    $platemetals[$platemetal[1]] . " plating on it's " .     //plating on head
    $bodyparts[$bodypart[4]] . ", however that armor plate is 
    enameled with a durable vitreous " . $enamel . " coating. ";// has enameling

/**
 -------------------------------------------------------------------guhlra 
 */
//---------------------------------------------------------------------------forehead
// the ghulra *engraved upon* $lastname's forehead 
$engravings = [
    'engraved upon', 'etched in', 'adorning', 'illuminating from',
    'that spruces up', 'which ornaments', 'painted on', 'jazzing up',
    'embedded in', 'inscribed upon', 'inscribed on', 'burned in',
    'chiselled in', 'lodged in', 'scratched on',
    'carved out in',
];
$engraved = array_rand(array_flip($engravings), 1);

$indicates = array_rand(array_flip($indicators), 1);

$functions = [
    'Combat Medic', 'Artillery Loader', 'Scout', 'Guard', 'Militia', 'Archer',
    'heavy lifter', 'Landsknect', 'Musketeer', 'Longbowman', 'Lancer', 'Cataphract',
    'Janissary', 'Foot Soldier', 'Dragoon', 'Constable', 'Yeoman', 'Infantry',
    'Pikeman', 'Catapult Loader', 'Ballista Loader', 'Trebuchet Engineer',
    'Sapper', 'Spy', 'Cannonier', 'Juggernaut', 'Envoy', 'Skirmisher',
    'Sentry', 'Marine', 'City Watch', 'Soldier', 'Investigator','Sailor',
];
$function = array_rand(array_flip($functions), 1);

/** 
//-----------------------------------------------------------------$WARFORGED 3
 */
$warforged = $warforged . " There is a a ghulra " . $engraved . " " .
    $lastname . "'s forehead that " . $indicates . " that the living 
construct served as a " . $function . " in the Last War.";


$divergence = $warforged;

$outfit = '';//strip naked, no wardrobe
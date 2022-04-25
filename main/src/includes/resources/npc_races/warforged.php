<?php
// Warforged

//----------------------NO WEALTH---------------------------Warforged
$beggar = false;
$prosperous = false;
$rich = false;
$loaded = false;
$poor = false;
$outfit = ''; //strip naked, no wardrobe

// wear belts?



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

//self::connections()bodyparts()spareparts()

//---------------------------------------------------------------BODY SHAPE
// with ...
$spareparts = warforged::spareparts();
$sparePart = array_rand($spareparts, 4);

$bodyparts = warforged::bodyparts();
$bodypart = array_rand($bodyparts, 2);

$bodyshape = $spareparts[$sparePart[0]] . " together with " .
    $spareparts[$sparePart[1]] . " in it's " .
    $bodyparts[$bodypart[0]] . " while his " .
    $bodyparts[$bodypart[1]] . " has " .
    $spareparts[$sparePart[2]] . " along with " .
    $spareparts[$sparePart[3]];
/**
 ---------------------------------------------------------------------------------------BODY
 */
















/** 
//-----------------------------------------------------------------$WARFORGED
 */
$connection = array_rand(self::connections(), 2);


$description = $this->nickname . " has a skeletal frame made of " . 
MaterialGenerator::getWoodType() . " wood. 
It's parts and joints are all conected and held together with "
    . $connections[$connection[0]] . " and "
    . $connections[$connection[1]] . ". ";

//-------------------------------------------------------------------------------
$spareparts = self::spareparts();
$sparePart = array_rand($spareparts, 3);
$bodyparts = self::bodyparts();
$bodypart = array_rand($bodyparts, 2); // making mistakes


$description .= "Both it's " . $bodyparts[$bodypart[0]] .
    " and $nickname's " . $bodyparts[$bodypart[1]] . " have visible innards, showing 
    either " . VerbsGenerator::maintenance() . " or " . VerbsGenerator::maintenance() .
    " " . $spareparts[$sparePart[0]] . ", " . $spareparts[$sparePart[1]] . " and "
    . $spareparts[$sparePart[2]] . ". ";









//--------------------------------------------------------------------large sentence




/** 
//-----------------------------------------------------------------$WARFORGED 2
 */
$description .= " The robot has " .
    VerbsGenerator::maintenance() . " " .                       //maintained
    MaterialGenerator::getPlateType() . " plating on it's " .    //plating
    $bodyparts[$bodypart[2]] . " and " .                     // on arms
    $bodyparts[$bodypart[3]] . ", while the " .             // and legs
    MaterialGenerator::getPlateType() . " armor " . $this->nickname . " wears on it's " . //plating
    $bodyparts[$bodypart[1]] . " looks pretty " .            //on chest
    VerbsGenerator::maintenance() . ". " . $this->lastname . " even has " .   //is maintained
    MaterialGenerator::getPlateType() . " plating on it's " .     //plating on head
    $bodyparts[$bodypart[4]] . ", however that armor plate is 
    enameled with a durable vitreous " . MaterialGenerator::getEnamelType() . " coating. "; // has enameling












/** 
 * Default Names
 */
class warforged extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc, $array, $age, $origin)
    {
        $new_npc->setGender('constructed');
        $new_npc->setManWoman('robot');
        $new_npc->setHeShe('it');
        $new_npc->setHisHer("it's");

        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = self::_nickname($new_npc);
        $this->description = self::_description($dndrace, $new_npc, $origin);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        //-----------------------------------------------------------------NAME GENERATOR   
        $prefixes = [
            'A', 'a', 'B', 'b', 'C', 'c', 'D', 'd', 'E', 'e',
            'F', 'f', 'G', 'g',
            'H', 'h', 'I', 'i', 'J', 'j', 'K', 'k', 'L', 'l',
            'M', 'm', 'N', 'n',
            'O', 'o', 'P', 'p', 'Q', 'q', 'R', 'r', 'S', 's',
            'T', 't', 'U', 'u',
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


        //-----------------------------------------------RANDOMIZE NAME
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
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        $firstname = "Soldier";
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Ash', 'Atlas', 'Chroma', 'Excalibur', 'Frost', 'Hydroid', 'Inaros',
                'Limbo', 'Loki', 'Nekros', 'Nezha', 'Revenant', 'Sevagoth', 'Xaku',
                'Oberon', 'Rhino', 'Vauban', 'Volt', 'Wukong', 'Nidus', 'Baruuk', 'Gauss',
                'Grendel', 'Harrow', 'Lavos',
            ];
            $nickname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Banshee', 'Ember', 'Equinox', 'Ivara', 'Mag', 'Mesa', 'Mirage', 'Nova',
                'Nyx', 'Saryn', 'Trinity', 'Titania', 'Wisp', 'Xaku', 'Yareli', 'Protea',
                'Valkyr', 'Zephyr', 'Gara', 'Garuda', 'Hildryn', 'Khora', 'Octavia',
                'Vyommitra',
            ];
            $nickname = array_rand(array_flip($femalenames), 1);
        }
        $this->nickname = $nickname;

        return $nickname;
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc, $origin)
    {
        $description = "string " . $dndrace->getRace() .
            " string " . $this->lastname . " string " . $new_npc->getHisHer() .
            " string.";

        //-------------------------------------------PEOPLE
        $peoples = [
            'the ' . $origin . ' creators ',
            'neighbours ',
            'friends ',
        ];
        $people = array_rand(array_flip($peoples));
        // random entity

        //----------------------------------NAMED---THE ROBOT
        $robots = [
            ' the decommissioned war machine ',
            ' the robot',
            ' ' . $this->lastname . ' ',
        ];
        $theRobot = array_rand(array_flip($robots));
        //randomly addressed

        //description 1 [DEFAULT]
        $description = $people . " of " . $this->lastname . " " .
            VerbsGenerator::named() . " "
            . $theRobot . ' as ' . $this->nickname;

        //'it picked itself a nickname: '
        //------------------------------------------THE ROBOT NAMED THE ROBOT [5%]
        $isItNamed = rand(1, 20);
        if ($isItNamed == 1) {
            //description 2 [ELSE && 5% Chance]
            $description = 'the robot has retained ' . $new_npc->getHisHer() .
                ' original designation ' . $this->lastname;
        }


        $description .=  " There is a a ghulra " . self::engraved() . " " .
            $this->lastname . "'s forehead that " .
            VerbsGenerator::getIndicator() . " that the living 
            construct served as a " . self::functions() . " in the Last War.";

        return $description;
    }

    /**
     * -------------------------------------ARRAY'S
     */
    public static function spareparts()
    {
        $spareparts = [ //-----------------------------inorganic---spare-parts
            'cylinders', 'pistons', 'clockwork parts', 'cogs', 'gears', 'pinions',
            'shafts', 'valves', 'bearings', 'springs', 'cogwheels', 'pneumatics',
            'connecting rods', 'poppet valves', 'sleeve valves', 'rotary valves',
            'axles', 'manifolds', 'servosystems', 'actuators', 'telemetrical instruments',
            'tactile sensors', 'locomotion systems', 'animatronics', 'cybernetics',
            'orthotics', 'prosthetics', 'proprioceptive sensors', 'ultrasonic actuators',
            'pneumatic actuators', 'bolts', 'screws', 'nails', 'metal wires',
        ];
        return $spareparts;
    }


    //---------------------------------------------------------bodyparts
    public static function bodyparts()
    {
        $bodyparts = [
            'arms', 'legs', 'back', 'neck', 'shoulders', 'belly', 'hands', 'feet',
            'upper arms', 'upper legs', 'chest', 'torso', 'throat', 'head', 'face',
            'wrists', 'knees', 'elbows', 'ribcage',
        ];
        return $bodyparts;
    }

    public static function connections()
    {
        //----------------------------------------------------------------connections      
        $connections = [ //it's all connected and held together with
            'interwoven thorny vines', 'roots of flowering plants', 'tendrills',
            'copper pipes', 'leather belts', 'metal pipes', 'woven rope', 'chains',
            'nails', 'tangling roots', 'tubes', 'roots', 'leather straps',
            'braided roots', 'braided vines', 'braided thorny vines', 'rags',
            'cloth wraps',
        ];
        return $connections;//self::connections()bodyparts()spareparts()
    }
    /**
     * Guhlra
     * the ghulra *engraved upon* $lastname's forehead
     * 
     * @return string
     */
    public static function engraved()
    {
        $engravings = [
            'engraved upon', 'etched in', 'adorning', 'illuminating from',
            'that spruces up', 'which ornaments', 'painted on', 'jazzing up',
            'embedded in', 'inscribed upon', 'inscribed on', 'burned in',
            'chiselled in', 'lodged in', 'scratched on',
            'carved out in',
        ];
        $engraved = array_rand(array_flip($engravings), 1);
        return $engraved;
    } //self::engraved()


    public static function functions()
    {
        $functions = [
            'Combat Medic', 'Artillery Loader', 'Scout', 'Guard', 'Militia', 'Archer',
            'heavy lifter', 'Landsknect', 'Musketeer', 'Longbowman', 'Lancer', 'Cataphract',
            'Janissary', 'Foot Soldier', 'Dragoon', 'Constable', 'Yeoman', 'Infantry',
            'Pikeman', 'Catapult Loader', 'Ballista Loader', 'Trebuchet Engineer',
            'Sapper', 'Spy', 'Cannonier', 'Juggernaut', 'Envoy', 'Skirmisher',
            'Sentry', 'Marine', 'City Watch', 'Soldier', 'Investigator', 'Sailor',
        ];
        $function = array_rand(array_flip($functions), 1);
        return $function;
    } //self::functions()

    //-----------------------------------------REPLACERS

    /**
     * Array of eyes.
     * 
     * @param $dndrace this race
     * @param $new_npc object of nouns
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer($dndrace, $new_npc)
    {
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
        $eyestone = array_rand(array_flip($eyestones), 1);

        //-------------------------------------------------------colored lights
        $glowingcolors = [
            'red', 'blue', 'green', 'white', 'yellow', 'purple',
        ];
        $glowingcolor = array_rand(array_flip($glowingcolors), 1);

        $eyes = " crystalline " . $eyestone . " stones instead of eyes, that glow "
            . $glowingcolor;
        return $eyes;
    }

    /**
     * Birds have beaks, not nose
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = "no nose.";

        return $nose;
    }


    /**
     * Array of beaks
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouthshape = [
            'a hinged ' . MaterialGenerator::getMetalType() . ' jaw',
            'a motorized ' . MaterialGenerator::getMetalType() . ' jaw',
            'a ' . MaterialGenerator::getMetalType() . ' ventriloquist doll jaw',
            'a ' . MaterialGenerator::getMetalType() . ' grate',

        ];
        $mouth = array_rand(array_flip($mouthshape), 1);

        return $mouth;
    }

    /**
     * Array of beaks
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chincurves = [
            'pointy', 'round', 'square',
        ];
        $chincurve = array_rand(array_flip($chincurves), 1);

        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];
        $chinshape = array_rand(array_flip($chinshapes), 1);

        $chin = $chinshape . " " . $chincurve . " culmen";

        return $chin;
    }

    /**
     * Array of beaks
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $metal = MaterialGenerator::getMetalType();

        $dentalwork = [
            "has no teeth", "is not designed with teeth",
            "has several " . MaterialGenerator::getMetalType() . " nails as teeth",
            "has no teeth at all",
            "has small " . MaterialGenerator::getMetalType() . " plates as teeth",

            "has metal drills with a " . MaterialGenerator::getMetalType() .
                " coating as teeth",

            "has filed, sharp edged " . MaterialGenerator::getMetalType() .
                " bolts as teeth",

            "has nails as teeth, made of " . VerbsGenerator::quality() .
                " " . MaterialGenerator::getMetalType(),

            "has " . MaterialGenerator::getMetalType() . " 
            revolving gears instead of teeth",

            " has a " . MaterialGenerator::getMetalType() . " 
            meatgrinder instead of teeth",
        ];
        $teeth = array_rand(array_flip($dentalwork), 1);

        return $teeth;
    }

    /**
     * Array of replacer
     * 
     * @return age replacer
     */
    public static function ageReplacer($dndrace)
    {
        if ($dndrace == "Deep Gnome") {
            $age = rand(14, 250);
            return $age;
        } else {
            $age = rand(14, 425);
            return $age;
        }
    }

    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "sort of typical giant-sized", "common giant sized",
            "characteristically large sized", "naturally large sized", "typical",
            "more or less standard sized", "moderately large sized", 'sizable',

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", 'immense', 'enormous',
            "massive", "tall", 'big', 'hulking', 'towering', 'giant',
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }
}

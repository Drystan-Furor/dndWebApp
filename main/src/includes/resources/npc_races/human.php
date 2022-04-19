<?php
/**
HUMAN, Aasimar, Half-Elf
 */

 // Humans, Aasimar, Half Elf

//--------------------------------------------------------------------BOOLEANS
if ($raceorigin == "Human" ) {
    $race = $humantype . " Human ";
    $isHalfElf = false;
    $isAasimar = false;
    $divergenceIsSet = false;
}



if ($raceorigin == 'Aasimar') {
    $race = $humantype." ".$race;
    $isHalfElf = false;
    $divergenceIsSet = true;
}

if ($raceorigin == "Half-Elf") {
    $isAasimar = false;
    $divergenceIsSet = true;
    // && $divergenceIsSet == false
}

/** 
 * Human Names
 * There are mult sub types of human
 */
class Human extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $humanTypeClass = self::humanTypeClass();
        $this->lastname = $humanTypeClass::getLastname();
        $this->firstname = $humanTypeClass::getFirstname($new_npc);
        $this->nickname = $humanTypeClass::getNickname();
        $this->description = $humanTypeClass::getDescription($dndrace, $new_npc);
    }


    /**
     * Human Type Selector
     * 
     * @return string from array
     */
    public static function randomHumanType()
    {
        $humanraces = [
            "Calishite",
            "Chondathan",
            "Damaran",
            "Illuskan",
            "Mulan",
            "Rashemi",
            "Shou",
            "Tethyrian",
            "Turami",
            ];
            $humantype = array_rand(array_flip($humanraces), 1);
            return $humantype;
    }

    /**
     * Call Class script based on humantype 
     * 
     * @return new ClassScript
     */

    public static function humanTypeClass()
    {
        $humantype = self::randomHumanType();
        return $humantype;
    }


    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = Nose::defaultNose();
        return $nose;
    }

    /**
     * Array of eyes.
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer()
    {
        $eyes = Eyes::canSee();
        return $eyes;
    }


    /**
     * Array of replacer
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouth = Mouth::defaultMouths();
        return $mouth;
    }

    /**
     * Array of replacer
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chin = Chin::defaultChin();
        return $chin;
    }

    /**
     * Array of replacer
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $teeth = Teeth::defaultTeeth();
        return $teeth;
    }
    
}

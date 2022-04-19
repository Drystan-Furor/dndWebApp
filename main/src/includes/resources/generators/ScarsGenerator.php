<?php

/**
 * Scars
 */
class ScarsGenerator
{

    /**
     * Give me a scar, 50% chance
     */
    public function __construct($new_npc)
    {
        $this->scar = self::scar($new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private static function _scarMarkings()
    {
        //------------------------------------------------------has a SCAR
        $markings = [
            'scar', 'cut', 'bruise', 'laceration', 'graze', 'claw mark',
            'birth mark', 'wound', 'jab', 'bruise', 'scratch',
        ];
        $mark = array_rand(array_flip($markings));
        return $mark;
    }

    //------------------------------------------------------has a VAR scar
    /**
     * Array
     * 
     * @return string
     */
    public static function scarLines()
    {
        $mark = self::_scarMarkings();
        $scarlines = [
            "horizontal " . $mark,
            "vertical " . $mark,
            $mark,
            "diagonal " . $mark . ", from the left to the right",
            "diagonal " . $mark . ", from the right to the left",
        ];
        $line = array_rand(array_flip($scarlines));
        return $line;
    }


    //------------------------------------------------on the X SIDE
    /**
     * Array
     * 
     * @return string
     */
    public static function scarSides()
    {
        $scarsides = [
            "left side", "right side", "middle",
        ];
        $side = array_rand(array_flip($scarsides));
        return $side;
    }

    //-------------------------------------------------of the x LOCATION
    /**
     * Array
     * 
     * @return string
     */
    public static function scarLocation()
    {
        $scarlocations = [
            "left cheek",   "right cheeck",
            "left temple",  "right temple",
            "left eye",     "right eye",
            "left ear",     "right ear",
            "left eyebrow", "right eyebrow",
            "jaw", "forehead", "chin",
            "nose", "mouth", "throat",
        ];
        $location = array_rand(array_flip($scarlocations));
        return $location;
    }

    //---------------------- full sentence
    /**
     * Array
     * 
     * @param $new_npc = object from Overwatch Class
     * 
     * @return string
     */
    public static function scar($new_npc)
    {
        $hasScar = rand(1, 2);
        if ($hasScar == 1) {
            $scar = "You " . VerbsGenerator::getObservation() . " " .
                $new_npc->getHeShe() . " has a " .
                ScarsGenerator::scarLines() . ' on the ' .
                ScarsGenerator::scarSides() . ' of ' .
                $new_npc->getHisHer() . " " .
                ScarsGenerator::scarLocation() . ". ";;
        } else {
            $scar = "";
        }
        return $scar;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getScar()
    {
        return $this->scar;
    }
}

/*
$scar = new ScarsGenerator();
echo $scar->getScar();
*/
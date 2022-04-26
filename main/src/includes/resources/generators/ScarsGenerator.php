<?php

/**
 * Scars
 */
class ScarsGenerator
{

    /**
     * Give me a scar, 50% chance
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->scar = self::scar($dndrace, $new_npc);
    }


    /**
     * Array
     * 
     * @return array
     */
    public static function _dentMarkings()
    {
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
        return $dents;
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function _dentLines()
    {
        $dents = ScarsGenerator::_dentMarkings();
        $dent = array_rand($dents, 5);

        $scarlines = [
            "horizontal " . $dents[$dent[0]],
            "vertical " . $dents[$dent[1]],
            $dents[$dent[2]],
            "diagonal " . $dents[$dent[3]] . ", from the left to the right",
            "diagonal " . $dents[$dent[4]] . ", from the right to the left",
        ];
        $scarline = array_rand(array_flip($scarlines));
        return $scarline;
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
    public static function scar($dndrace, $new_npc)
    {

        $hasScar = rand(1, 2);
        if ($dndrace !== 'Warforged') {
            if ($hasScar == 1) {
                $scar = "You " . VerbsGenerator::getObservation() . " " .
                    $new_npc->getHeShe() . " has a " .
                    ScarsGenerator::scarLines() . ' on the ' .
                    ScarsGenerator::scarSides() . ' of ' .
                    $new_npc->getHisHer() . " " .
                    ScarsGenerator::scarLocation() . ". ";
                return $scar;
            }
        } else if ($dndrace == 'Warforged') {
            if ($hasScar == 1) {
                $location = ScarsGenerator::scarLocation();
                if ($location == 'nose') {
                    $location = 'nose area';
                }
                $scar = "You " . VerbsGenerator::getObservation() . " " .
                    $new_npc->getHeShe() . " has a " .
                    ScarsGenerator::_dentLines() . ' on the ' .
                    ScarsGenerator::scarSides() . ' of ' .
                    $new_npc->getHisHer() . " " .
                    $location . ". ";
                return $scar;
            }
        } else {
            $scar = "";
            return $scar;
        }
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
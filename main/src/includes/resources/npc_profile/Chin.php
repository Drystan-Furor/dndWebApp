<?php

/**
 * Random Chin
 */
class Chin
{
    /**
     * Construct a chin
     * 
     * @param $dndrace this race
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->Class_chin = self::_chinShape($dndrace, $new_npc);
    }

    /**
     * Arrays of strings Default Chins
     * 
     * @return concatinated string
     */
    public static function defaultChin()
    {

        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];

        $chincurves = [
            'pointy', 'round', 'square',
        ];

        $chinshape = array_rand(array_flip($chinshapes), 1);
        $chincurve = array_rand(array_flip($chincurves), 1);
        $chin = $chinshape . " " . $chincurve . " chin";

        return $chin;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * @param $new_npc the male/female nouns
     * 
     * @return chin
     */
    private function _chinShape($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'chinReplacer') == true) {
            $this->chin = strtolower($dndrace)::chinReplacer($dndrace, $new_npc);
        } else {
            $this->chin = self::defaultChin();
        }
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getChin()
    {
        return $this->chin;
    }
}

/*
$chin = new Chin();
$chin = $chin->getChin();
*/


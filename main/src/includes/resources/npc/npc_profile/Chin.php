<?php

/**
 * Random Chin
 * $chin = new Chin();
 * $chin = $chin->getChin();
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class Chin
{
    /**
     * Construct a chin
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->Class_chin = self::_chinShape($dndrace, $new_npc);
    }

    /**
     * Arrays of strings Default Chins
     * 
     * @return string
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
     * @param $dndrace string race
     * @param $new_npc Gender male/female nouns
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
        return $this->chin;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getChin()
    {
        return $this->chin;
    }
}
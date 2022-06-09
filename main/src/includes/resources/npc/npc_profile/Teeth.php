<?php

/**
 * Teeth
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class Teeth
{
    /**
     * Grow some whiskers
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->teeth = self::_teethShape($dndrace, $new_npc);
    }

    /**
     * Array of DEFAULT types
     * 
     * @return string
     */
    private static function _teethTypes()
    {
        $teethTypes = [
            'rotten ', 'shiny white', 'yellow', 'buck', 'quite large',
            'rather small', 'yellow and grey', 'crooked', 'canine whiskers',
        ];
        $teethType = array_rand(array_flip($teethTypes), 1);
        return $teethType;
    }

    /**
     * Array of DEFAULT sentence-part
     * 
     * @return string
     */
    public static function defaultTeeth()
    {

        $dentalwork = [
            "is missing a tooth", 
            
            "is missing several teeth",

            "has a " . MaterialGenerator::getMetalType() . " tooth",

            "has several " . MaterialGenerator::getMetalType() . " teeth",

            "has " . self::_teethTypes() . " teeth", 
            
            "has no teeth at all",

            "has good dentals", 
            
            "has yellow teeth, but all there",

            "has fairly good dentals",

            "has " . self::_teethTypes() . " teeth that could use some bracers",

            "has no regular teeth but canine whiskers",

            "has good dentals", 
            
            "has rather bad dentals",

            "has sharp edged teeth, as if they are trimmed or filed",

            "has fake teeth, like a prosthetic made of " . Verbsgenerator::quality() . " "
                . MaterialGenerator::getMetalType(),
        ];
        $teeth = array_rand(array_flip($dentalwork), 1);

        return $teeth;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     *  
     * @return teeth
     */
    private static function _teethShape($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'teethReplacer') == true) {
            $teeth = strtolower($dndrace)::teethReplacer($dndrace, $new_npc);
        } else {
            $teeth = self::defaultTeeth();
        }
        return $teeth;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getTeeth()
    {
        return $this->teeth;
    }
}

/*
$teeth = new Teeth();
$teeth = $teeth->getTeeth();
*/

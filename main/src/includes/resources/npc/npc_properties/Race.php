<?php

/**
 * Racegenerator
 *
 * @category Generators
 * @package  Properties
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class Race
{
    /** 
     * Race RNG 
     * new race() is by default a random race
     * consider a this->homebrew (get boolean flag)
     * consider this->dndrace be updated if homebrew == true
     * Homebrew::setHomebrew() verifies existence of input and sanitizes input
     * else returns a random race.
     */
    public function __construct()
    {
        $this->dndrace = Homebrew::setHomebrew();
        $this->raceorigin = self::setHeritage();
        $this->racesBaseArray = self::raceArray();
        $this->racesArray = self::_updateRaceArray(
            $this->dndrace, $this->racesBaseArray
        );
    }


    /**
     * Here we create a list of all the races.
     * 
     * @return array list
     */
    public static function raceArray()
    {
        //----------------------------------------------------dndraces array
        $RacesArray = [
            "Dragonborn", "Dwarf", "Elf", "Gnome", "Half-Elf", "Halfling",
            "Half Orc", "Human", "Tiefling", "Orc of Exandria", "Leonin",
            "Satyr", "Aarakocra", "Genasi", "Goliath", "Aasimar", "Bugbear",
            "Firbolg", "Goblin", "Hobgoblin", "Kenku", "Kobold", "Lizardfolk",
            "Orc", "Tabaxi", "Triton", "Yuan-Ti Pureblood", "Feral Tiefling",
            "Tortle", "Khalastar", "Changeling", "Orc of Eberron", "Shifter",
            "Warforged", "Gith", "Centaur", "Loxodon", "Minotaur",
            "Simic Hybrid", "Vedalkan", "Verdan", "Locathah", "Owlfolk",
            "Rabbitfolk",
        ];
        return $RacesArray;
    }

    /**
     * Setter
     * 
     * @param $dndrace string race to set
     * 
     * @return string
     */
    public function setRace($dndrace)
    {
        $this->dndrace = $dndrace;
        return $this->dndrace;
    }


    /**
     * Drow is offical, but not on webpage, Elf-Subclass, 
     * if input === "Drow" then != homebrew
     * add Drow to Race Array, logically after cleaning because array is RETURNED
     * 
     * @param $dndrace == value to be checked IF == DROW
     * @param $array   == array of races
     * 
     * @return $racesArray push raceArray
     */
    private function _updateRaceArray($dndrace, $array)
    {
        if ($dndrace == "drow" || $dndrace == "Drow") {
            $array[] = "Drow";
            return $array;
        }
        return $array;
    }

    /**
     * Get 1 random value of the whole raceArray
     * 
     * @return string random value of raceArray
     */
    public static function randomFromRaceArray()
    {
        $RacesArray = self::raceArray();
        $random = array_rand(array_flip($RacesArray), 1); //random
        return $random;
    }

    //------------------------------------DEFAULT RACE getter/setter
    /**  
     * Function _randomRace() sets both Race and Origin to the Race Default
     * 
     * @return string race DEFAULT
     */
    public static function randomRace()
    {
        $dndrace  = self::randomFromRaceArray(); //random

        return $dndrace;
    }

    //------------------------------------------------HERITAGE getter/setter
    //random origin selector used on NAMES.inc

    /** 
     * Origin is defined by heritage, some races do not have 
     * ancestors of the same type. All exceptions listed here are
     * races that should not have direct ancestors of the same type. 
     * 
     * @return string
     */
    public static function setHeritage()
    {
        $heritage = self::randomFromRaceArray(); //random
        while (
            $heritage == "Genasi"
            || $heritage == "Yuan-Ti Pureblood"
            || $heritage == "Simic Hybrid"
        ) {
            $heritage = self::randomFromRaceArray();
        }

        return $heritage;
    }

    /**
     * Is Race in race array?
     * 
     * @param $dndrace string race
     * 
     * @return boolean
     */
    public static function isRaceInRaceArray($dndrace)
    {
        if (in_array($dndrace, Race::raceArray())) {
            $boolean = true;
        } else {
            $boolean = false;
        }
        return $boolean;
    }


    /**
     * Turn "This-Race name" into thisracename
     * lowercase also strip dash and space
     * 
     * @param $dndrace string name
     * 
     * @return string lowercase name of race.
     */
    public static function lowercase($dndrace)
    {
        $dndrace = strtolower($dndrace);              //no caps's in filename
        $dndrace = str_replace(' ', '', $dndrace);    //no spaces in filename
        $dndrace = str_replace('-', '', $dndrace);    //no dashes in filename Half-Elf

        return $dndrace;
    }






    /**
     * Getter to acces value of dndrace variable
     * 
     * @return string
     */
    public function getRace()
    {
        return $this->dndrace;
    }

    /**
     * Getter to acces value of origin variable
     * 
     * @return string
     */
    public function getRaceorigin()
    {
        return $this->raceorigin;
    }


    /**
     * Getter to acces value of dndraces array
     * 
     * @return array
     */
    public function getRaceArray()
    {
        return $this->racesArray;
    }
}
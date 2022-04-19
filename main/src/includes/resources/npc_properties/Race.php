<?php

/**
Racegenerator
 */
//require_once 'functions.php';

/** 
  Race
  vars:     $dndrace        [string]    {random} from [array]
            $raceorigin     [string]    {random} from [array] && [==$dndrace]
            $heritage       [string]    {random} from [array] && !exceptions
            $race           [string]    [var] FROM [filter]{input}

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
        $this->racesArray = self::raceArray();
        $this->racesArray = self::updateRaceArray($this->dndrace, $this->racesArray);
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
     * @param $dndrace the race to set
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
     * @param $dndrace    == value to be checked IF == DROW
     * @param $array == array of races
     * 
     * @return $racesArray push raceArray
     */
    private function updateRaceArray($dndrace, $array)
    {
        if ($dndrace == "drow" || $dndrace == "Drow") {
            $this->racesArray[] = "Drow";
            $array = $this->racesArray;
            return $array;
        }
        return $array;
    }

    /**
     * Get 1 random value of the whole raceArray
     * 
     * @return random value of raceArray
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
     * @return DEFAULT race
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
     * @return origin
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
     * @param $dndrace this race
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
     * @param $dndrace race name
     * 
     * @return lowercase name of race.
     */
    public static function lowercase($dndrace)
    {
        $dndrace = strtolower($dndrace);              //no caps's in filename
        $dndrace = str_replace(' ', '', $dndrace);    //no spaces in filename
        $dndrace = str_replace('-', '', $dndrace);    //no dashes in filename

        return $dndrace;
    }






    /**
     * Getter to acces value of dndrace variable
     * 
     * @return dndrace
     */
    public function getRace()
    {
        return $this->dndrace;
    }

    /**
     * Getter to acces value of origin variable
     * 
     * @return origin
     */
    public function getRaceorigin()
    {
        return $this->raceorigin;
    }


    /**
     * Getter to acces value of dndraces array
     * 
     * @return dndraceArray
     */
    public function getRaceArray()
    {
        return $this->racesArray;
    }
}

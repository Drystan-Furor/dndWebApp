<?php

/** 
 * Simichybrid Names
 */
class simichybrid extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $biography = self::derivedClass();
        $biography = new $biography($dndrace, $new_npc);
        $this->lastname = $biography->getLastName();
        $this->firstname = $biography->getFirstName();
        $this->nickname = $biography->getNickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * RNG if race derived from classes
     * 
     * @return property of object
     */
    public function derivedClass()
    {
        // Simic Hybrid
        $randomorigins = [
            "Human", "Elf", "Vedalkan",
        ];
        $raceorigin = array_rand(array_flip($randomorigins), 1);
        return strtolower($raceorigin);
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc)
    {
        $description = "As a hyper-develloped " . $dndrace->getRace() . ",
             " . $new_npc->getHeShe() . " is designed by the 
            Guardian Project to serve a specific purpose 
            that involves protecting the Simic Combine in some way as a “guardian”.";

        return $description;
    }

    /**
     * Array of replacer
     * 
     * @return age replacer
     */
    public static function ageReplacer($dndrace)
    {

        $age = rand(14, 80);
        if ($age > 30) {
            $age /= 2;
        }
        if ($age < 15) {
            $age += 3;
        }
        $age = ceil($age);
        return $age;
    }
}

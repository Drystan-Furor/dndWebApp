<?php

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
        $race = self::randomHumanType();
        $biography = new $race($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->firstname = $biography->getFirstname($new_npc);
        $this->nickname = $biography->getNickname();
        $this->description = $biography->getDescription($dndrace, $new_npc);
        $dndrace->setRace($race ." ". $dndrace->getRace());

    }


    /**
     * Human subclass Array
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

}

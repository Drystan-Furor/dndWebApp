<?php

/** 
 * Halfelf Names
 * Half-elves use either human or elven naming conventions. 
 * As if to emphasize that they don’t really fit in to either society,
 * half-elves raised among humans are often given elven names, 
 * and those raised among elves often take human names.
 */
class halfelf extends Name
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
        $biography = new $biography();
        $this->lastname = $biography->getLastName();
        $this->firstname = $biography->getFirstName();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
    BECAUSE HALFELF DOES NOT EXIST IN ARRAY WE GET RANDOM ORIGIN, SO RANDOM DNDRACE.
    Half-Elf is turned into halfelf, and Halfelf is not in array
    */
    /**
     * RNG if race derived from classes
     * 
     * @return property of object
     */
    public function derivedClass()
    {
            $elfraces = [
                "Human", "Elf"
            ];
            $race = array_rand(array_flip($elfraces), 1);
            return $race;       
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Array',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Array',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Array',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $nickname = $this->lastname;
        $this->nickname = $nickname;
        return $nickname;
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
        $description = "Walking in two worlds but truly belonging to neither, 
        a " . $dndrace->getRace() .
            " combines what some say are the best qualities of their elf and human 
        parents: human curiosity, inventiveness, and ambition tempered by the 
        refined senses, love of nature, and artistic tastes of the elves.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @param $dndrace Race object
     * 
     * @return age replacer
     */
    public static function ageReplacer($dndrace)
    {
        $age = rand(14, 180);
        return $age;
    }
}

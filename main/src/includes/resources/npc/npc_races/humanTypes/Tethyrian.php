<?php

/** 
 * Tethyrians Names
 * Tethyrians primarily use Chondathan names.
 */
class Tethyrian extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $biography = new Chondathan($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->firstname = $biography->getFirstname();
        $this->nickname = $this->firstname;
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function _lastname()
    {
        $surnames = [
            'Array', 
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function _firstname($new_npc)
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
        return $firstname;
    }


    /**
     * Array
     * $dndrace->getRace()
     * $new_npc->getHisHer()
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    public static function _description($dndrace, $new_npc)
    {
        $description = "Widespread along the entire Sword Coast at the 
        western edge of Faerûn, Tethyrians are of medium build and height, 
        with dusky skin that tends to grow fairer the farther north they dwell. 
        Their hair and eye color varies widely, but brown hair and blue eyes are 
        the most common. ";

        return $description;
    }

}
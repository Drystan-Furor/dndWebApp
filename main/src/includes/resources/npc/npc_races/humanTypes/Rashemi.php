<?php


/** 
 * Rashemi Names
 */
class Rashemi extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
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
            'Chergoba', 'Dyernina', 'Iltazyara', 'Murnyethara',
            'Stayanoga', 'Ulmokina',
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
                'Borivik', 'Faurgar', 'Jandar', 'Kanithar', 'Madislak',
                'Ralmevik', 'Shaumar', 'Vladislak',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Fyevarra', 'Hulmarra', 'Immith', 'Imzel', 'Navarra',
                'Shevarra', 'Tammith', 'Yuldra',
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
        $description = "Most often found east of the Inner Sea and often 
        intermingled with the Mulan, Rashemis tend to be short, stout, and muscular. 
        They usually have dusky skin, dark eyes, and thick black hair.";

        return $description;
    }

}
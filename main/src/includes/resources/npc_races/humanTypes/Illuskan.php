<?php

/** 
 * Illuskan Names
 */
class Illuskan extends Name
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
            'Brightwood', 'Helder', 'Hornraven', 'Lackman',
            'Stormwind', 'Windrivver',
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
                'Ander', 'Blath', 'Bran', 'Frath', 'Geth', 'Lander',
                'Luth', 'Malcer', 'Stor', 'Taman', 'Urth',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Amafrey', 'Betha', 'Cefrey', 'Kethra', 'Mara',
                'Olga', 'Silifrey', 'Westra',
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
        $description = "Illuskans are tall, fair-skinned folk with blue or 
        steely gray eyes. Most have raven-black hair, but those who inhabit 
        the extreme northwest have blond, red, or light brown hair.";

        return $description;
    }
}
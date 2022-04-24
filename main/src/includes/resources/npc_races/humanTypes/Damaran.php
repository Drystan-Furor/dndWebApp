<?php

/** 
 * Calishite Names
 */
class Damaran extends Name
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
            'Bersk', 'Chernin', 'Dotsk', 'Kulenov', 'Marsk', 'Nemetsk',
            'Shemov', 'Starag',
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
                'Bor', 'Fodel', 'Glar', 'Grigor', 'Igan', 'Ivor',
                'Kosef', 'Mival', 'Orel', 'Pavel', 'Sergor',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Alethra', 'Kara', 'Katernin', 'Mara',
                'Natali', 'Olma', 'Tana', 'Zora',
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
        $description = "Found primarily in the northwest of Faerûn, Damarans
        are of moderate height and build, with skin hues ranging from tawny 
        to fair. Their hair is usually brown or black, and their eye color 
        varies widely, though brown is most common.";

        return $description;
    }

}
<?php

/** 
 * Mulan Names
 */
class Mulan extends Name
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
            'Ankhalab', 'Anskuld', 'Fezim', 'Hahpet', 'Nathandem',
            'Sepret', 'Uuthrakt',
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
                'Aoth', 'Bareris', 'Ehput-Ki', 'Kethoth', 'Mumed',
                'Ramas', 'So-Kehur', 'Thazar-De', 'Urhur',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Arizima', 'Chathi', 'Nephis', 'Nulara', 'Murithi',
                'Sefris', 'Thola', 'Umara', 'Zolis',
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
        $description = "Dominant in the eastern and southeastern shores of 
        the Inner Sea, the Mulan are generally tall, slim, and amber-skinned, 
        with eyes of hazel or brown. Their hair ranges from black to dark brown, 
        but in the lands where the Mulan are most prominent, nobles and many 
        other Mulan shave off all their hair.";

        return $description;
    }

}
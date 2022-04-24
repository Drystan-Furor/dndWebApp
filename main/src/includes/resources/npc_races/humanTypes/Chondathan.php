<?php

/** 
 * Chondathan Names
 */
class Chondathan extends Name
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
            'Amblecrown', 'Buckman', 'Dundragon', 'Evenwood', 'Greycastle', 'Tallstag',
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
                'Darvin', 'Dorn', 'Evendur', 'Gorstag', 'Grim',
                'Helm', 'Malark', 'Morn', 'Randal', 'Stedd',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Arveene', 'Esvele', 'Jhessail', 'Kerri',
                'Lureene', 'Miri', 'Rowan', 'Shandri', 'Tessele',
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
        $description = "Chondatans are slender, tawny-skinned folk with brown hair 
        that ranges from almost blond to almost black. Most are tall and have green 
        or brown eyes, but these traits are hardly universal. Humans of Chondathan 
        descent dominate the central lands of Faerûn, around the Inner Sea.";

        return $description;
    }
  
}
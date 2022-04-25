<?php

/** 
 *  Vedalken
 *  Vedalken Names. Vedalken are given names at birth, 
 * but usually choose new names for 
 *  themselves as part of their transition into adulthood. 
 *  They rarely use family names.
 */

class vedalkan extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname($new_npc);
        $this->firstname = self::_firstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname()
    {
        $firstname = "";
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $prefixes = [
                'Ag', 'Bel', 'Dal', 'Firel', 'Ka', 'Kop', 'Lo', 'Math', 'Mo',
                'Ne', 'Nhil', 'Ni', 'Otro', 'Ov', 'Pele', 'Ri', 'Tri',
                'Ul', 'Yo', 'Za',
            ];
            $prefix = array_rand(array_flip($prefixes), 1);

            $altfixes = [
                'lar', 'lin', 'lid', 'lan', 'vin', 'lony', 'mar', 'van', 'dar',
                'bun', 'losh', 'tt', 'vac', 'ner', 'll', 'vaz', 'din',
                'lov', 'taz',
            ];
            $altfix = array_rand(array_flip($altfixes), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $prefixes = [
                'A', 'Bar', 'Bra', 'Di', 'Fa', 'Gri', 'Hal', 'Kat', 'Ko', 'Lil',
                'Mi', 'Mo', 'Ne', 'Os', 'Pie', 'Ro', 'Se',
                'Tri', 'Uza', 'Yara', 'Zlo',
            ];
            $prefix = array_rand(array_flip($prefixes), 1);

            $altfixes = [
                'zi', 'visa', 'zia', 'rell', 'inn', 'ya', 'lia', 'rille', 'vel',
                'la', 'rela', 'rai', 'dress', 'sya', 'renn', 'ya', 'stri',
                'el', 'na', 'ghiya', 'vol',
            ];
            $altfix = array_rand(array_flip($altfixes), 1);
        }
        $lastname = $prefix . $altfix;

        $this->lastname = $lastname;
        return $lastname;
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
        $description = $dndrace->getRace() . "s are largely humanoid, 
        besides " . $new_npc->getHisHer() . " blue skin 
        the most notable outward feature of " . $this->nickname . " 
        is " . $new_npc->getHisHer() . "lack of 
        external ears.";

        return $description;
    }


    //-----------------------------------------REPLACERS

}

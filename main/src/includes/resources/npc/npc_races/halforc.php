<?php

/** 
 * Half-Orc Names
 */
class halforc extends Name
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
        $firstname = '';
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
            $malenames = [
                'Dench', 'Feng', 'Gell', 'Henk', 'Holg', 'Imsh', 'Keth',
                'Krusk', 'Mhurren', 'Ront', 'Shump', 'Thokk',
            ];
            $lastname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Baggi', 'Emen', 'Engong', 'Kansif', 'Myev', 'Neega',
                'Ovak', 'Ownka', 'Shautha', 'Sutha', 'Vola', 'Volen', 'Yevelda',
            ];
            $lastname = array_rand(array_flip($femalenames), 1);
        }
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
        $description = $dndrace->getRace() . "s’ grayish pigmentation, sloping foreheads, 
                jutting jaws, prominent teeth, and towering builds makes "
            . $new_npc->getHisHer() . " orcish 
                heritage plain for all to see.";

        return $description;
    }
}

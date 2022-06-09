<?php

/** 
 * Default Names
 * Yuan-ti Pureblood
 */
class yuantipureblood extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc, $array, $age, $origin)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($origin);
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc, $origin);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames1 = [
            'Ih', 'Szeh', 'As', 'Sziz', 'Izt', 'Ma',
            'Nezhas', 'Ezti', 'Zsez', 'Thito', 'Yu',
            'Oak', 'Shih', 'Aht', 'Sshuh', 'Thelt', 'Hu',
            'Tuhe', 'Ina', 'Us', 'Melt', 'Sshe', 'Ssho',
            'So', 'Uh', 'Sset', 'Estle', 'Sshih',
            'Iske', 'Zha', 'Thi', 'Yoz', 'Zal', 'O',
            'Zhoal', 'Zset', 'Estih', 'Eztlu', 'Suztol',
            'Thoksoa',
        ];
        $lastname1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'shu', 'lah', 'kiss', 'tiu', 'liu', 'kuss',
            'siesh', 'thi', 'sheshluh', 'shlu', 'lui',
            'la', 'Shih', 'luh', 'tla', 'siall', 'tola',
            'til', 'tu', 'ziti', 'suh', 'shul', 'ma',
            'kall', 'sieh', 'stlil', 'zhal', 'sehiul',
            'liess', 'hisu', 'skul', 'tlu', 'sheel', 'su',
            'kiull', 'zei', 'sih', 'shas', 'lie',
            'theeh', 'sei', 'shos', 'zhash', 'liesh', 'sheesh',
            'koss', 'kass', 'kess', 'shes', 'zhosh', 'shi', 'sho', 'sohiul',
        ];
        $lastname2 = array_rand(array_flip($surnames2), 1);

        $lastname = $lastname1 . $lastname2;
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($origin)
    {
        $firstname = " a very serpent looking " . $origin . " named ";

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
    private function _description($dndrace, $new_npc, $origin)
    {
        $description = "The serpentine " . $origin . " " . $dndrace->getRace() .
            " talks with many hissing sounds.";

        return $description;
    }


    //-----------------------------------------REPLACERS

}

<?php

/**
 *  Verdan
 */
class verdan extends Name
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
        $firstname = " the traveller ";
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
        $prefixes = [
            'A', 'Illu', 'Bry', 'Kor', 'Zo', 'Ell', 'Crea', 'Drer', 'O', 'Ve', 'Veri', 'Voi',
            'Yes', 'N', 'Toi', 'Sly', 'Fae', 'Demo', 'Gry', 'Hu', 'Stu', 'Pa', 'Prae', 'Mo',
            'To', 'Kle', 'Quya', 'Graer', 'Stea', 'Cri', 'Mer', 'Yee', 'Paleac', 'El',
            'Xwee',
        ];
        $prefix = array_rand(array_flip($prefixes), 1);

        $altfixes = [
            'rt', 'mie', 'ls', 'm', 'v', 'bert', 'valm', 'ke', 'mi', 'riga', 'ga', 'sat',
            'g', 't', 'ra', 'ry', 'nic', 'rm', 'lm', 'ssa', 'q', 'sh', 'lli', 'xi', 'bena',
            'rin', 'ma', 'ci', 'vis', 'lk', 'then', 'vlelk', 'znag', 'sup',
        ];
        $altfix = array_rand(array_flip($altfixes), 1);

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
        $description =  $dndrace->getRace() ." are golbinoids with a strangely mutating body.";

        return $description;
    }

}

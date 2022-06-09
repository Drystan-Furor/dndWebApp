<?php

/**
 * Changeling
 * Changeling names are very short, with 2 syllable names being an exception, 
 * and 1 syllable names being the norm.
 */
class changeling extends Name
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
        $this->firstname = self::_firstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $lastnames1 = [
            'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P',
            'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z',
        ];
        $lastname1 = array_rand(array_flip($lastnames1), 1);
        $lastnames2 = [
            'a', 'e', 'i', 'o', 'u', 'y',
            'au', 'ou', 'oe', 'ee', 'aa', 'ea', 'eo', 'ie', 'ei',
            'ai', 'oi', 'ui', 'uu', 'ua', 'uo',
            'oo', 'ae', 'io',
        ];
        $lastname2 = array_rand(array_flip($lastnames2), 1);
        $lastnames3 = [
            'b', 'c', 'd', 'f', 'g', 'h', 'k', 'l', 'm', 'n', 'p',
            'r', 's', 't', 'v', 'w', 'x', 'z', 'ch', 'rt', 'ts',
            'kt', 'st', 'ts', 'sk', 'rx', 'gs', 'ks', 'gz', 'chs', 'tk',
            'ps', 'px', 'gg', 'kk', 'wn', 'cht', 'dt',
        ];
        $lastname3 = array_rand(array_flip($lastnames3), 1);
        $lastname = $lastname1 . $lastname2 . $lastname3;
        $this->lastname = $lastname;
        return $lastname;
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
        $divergencies = [
            "Passer, a changeling who wishes to fit in with conventional society
                 and live life in only one form or at least suppress the 
                 shape-changing ability to better fit in with the society.",
            "Becomer, " . $new_npc->getHeShe() . " believes that to be a changeling is to 
            possess many different
                 shapes and often different identities and lives altogether. 
                 This becomer 
                 takes the concept of a dual life to a whole new degree and  
                 successfully lives as several 'different people'.",
            "Seeker or 'reality seeker', and is convinced that a great truth exists 
                which only the changelings can discover; " . $new_npc->getHeShe() .
                " suppresses " . $new_npc->getHisHer() . " 
                shapechanging abilities and prefers to live or socialize with other 
                changelings.",
        ];
        $divergencie = array_rand(array_flip($divergencies), 1);
        $description = $this->lastname . " is a " . $divergencie;


        return $description;
    }


    //-----------------------------------------REPLACERS

    /**
     * Array of eyes.
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer()
    {
        $eyes = "large colorless eyes circled by thick black rings";
        return $eyes;
    }

}

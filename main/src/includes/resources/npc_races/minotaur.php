<?php

/** 
 * Minotaur Names
 */
class minotaur extends Name
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
        $surnames1 = [
            'Fearless', 'Steady', 'Silent', 'Brave', 'Orc', 'Sharp', 'Steel', 'Wolf',
            'Truth', 'Keen', 'Valiant', 'Thick', 'Vigil', 'Swift', 'Steady', 'Jagged',
            'Thunder', 'Boulder', 'Nimble',
        ];
        $lastname1 = array_rand(array_flip($surnames1), 1);

        $surnames2 = [
            'bane', 'pelt', 'heart', 'body', 'hide', 'leader', 'slash', 'mind', 'horn',
            'hoof', 'runner', 'warrior', 'walker', 'fist', 'fury',
        ];
        $lastname2 = array_rand(array_flip($surnames2), 1);

        $lastname =  $lastname1 . $lastname2;
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @param $new_npc Gender
     *
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $prefixes = [
                'Oes', 'Nan', 'Tee', 'Mou', 'Drin', 'Da', 'Gar', 'Har',
                'Em', 'Vi', 'Djar', 'Kur', 'Noo',
            ];
            $prefix = array_rand(array_flip($prefixes), 1);

            $altfixes = [
                'fin', 'nore', 'las', 'min', 'diar', 'gur', 'fajar', 'daran',
                'vin', 'me', 'rapak', 'kar', 'gajan',
            ];
            $altfix = array_rand(array_flip($altfixes), 1);
            $firstname = $prefix . $altfix;
        }

        if ($new_npc->getGender() == 'female') {
            $prefixes = [
                'Fen', 'Neo', 'Hi', 'Kuo', 'Raa', 'Via', 'Nuo', 'Tes', 'Uo', 'Tia',
                'Loo', 'Vi', 'Hila', 'Ras', 'Si', 'Laa',
            ];
            $prefix = array_rand(array_flip($prefixes), 1);

            $altfixes = [
                'ren', 'tin', 'nefa', 'ris', 'sfa', 'zara', 'rin', 'trin', 'varis',
                'nore', 'vin', 'tri', 'naru',
            ];
            $altfix = array_rand(array_flip($altfixes), 1);
            $firstname = $prefix . $altfix;
        }
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
        $nickname = $this->firstname;
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
        $description = $this->nickname . " is a barrel-chested 
        humanoid with a head resembling that of a bull.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Not shoes but hooves
     * 
     * @return string
     */
    public static function shoeReplacer()
    {
        $hooves = [
            'one-toed',
            'two-toed',
            'deer',
            'moose',
            'elk',
            'horse',
            'cow',
            'cloven',
        ];

        $shapes = [
            'club', 'aligned',  'migrated',
            'negative palmar', 'laminitic', 'founder',
        ];

        $hiLows = [
            'high', 'low', 'long toe low heel',
        ];


        $hoof = array_rand(array_flip($hooves), 1);
        $shape =  array_rand(array_flip($shapes), 1);
        $hiLow = array_rand(array_flip($hiLows), 1);


        $shoe = "This Minotaur has $hiLow, $shape $hoof hooves. ";
        return $shoe;
    }

    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "sort of typical giant-sized", "common giant sized",
            "characteristically large sized", "naturally large sized", "typical",
            "more or less standard sized", "moderately large sized", 'sizable',

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", 'immense', 'enormous',
            "massive", "tall", 'big', 'hulking', 'towering', 'giant',
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }
}

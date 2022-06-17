<?php

/** 
 * Default Goblin Names
 *     Goblin
 *   Using their tribe’s name and having nicknames, 
 *   is a normal occurrence for any of them.
 */
class goblin extends Name
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
        $surnames = [
            'of Crazy Arrow Tribe', 'of Salty Foot Clan', 'Mintybreath', 'Trinketmake',
            'of Smelly Hill Tribe', 'Horseride', 'Bignose', 'of Giant Crow tribe',
            'Dungrake', 'Manychild', 'Onebrow', 'Whitetooth', 'Woodleg', 'Highprofit',
            'Smalleye',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Driekol', 'Greerkilx', 'Brabtygz', 'Glevzaagz', 'Lognerk', 'Xasb',
                'Jykeegs', 'Craang', 'Krart', 'Xat', 'Oz', 'Creld', 'Sriogz', 'Fiolx',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Kuqi', 'Enxa', 'Flihisz', 'Depolm', 'Nunoilee', 'Noxea', 'Frez',
                'Qeassa', 'Olk', 'Eagansa', 'Srokkaax', 'Gralbianq', 'Hoq',
                'Gnaalsia', 'Pryhxa',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;

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
        $prefixes = [
            'Snail', 'Weak', 'Flat', 'Wide', 'Ugly', 'Oaf', 'Frog', 'Grub', 'Brain', 'Bite',
            'Mud', 'Meek', 'Snot', 'Pig', 'Worm', 'Dull', 'Limp', 'Owl', 'Numb', 'Murk',
            'Lump',
        ];
        $prefix = array_rand(array_flip($prefixes), 1);

        $altfixes = [
            'brain', 'flab', 'ear', 'gut', 'head', 'face', 'arm', 'mush', 'size', 'feet',
            'teeth', 'mud', 'mouth', 'cheek', 'knuckle', 'ball', 'finger',
        ];
        $altfix = array_rand(array_flip($altfixes), 1);

        $nickname = $prefix . $altfix;
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
        $description =  "The fat faced " . $this->firstname . 
        " is known as " . $this->nickname . ". 
        Pointy ears, a broad nose, a sloped back forehead and small sharp fangs,
        along with a crouched posture, " . $this->nickname . 
        " is a " . $dndrace->getRace() . " for sure.";

        return $description;
    }


    //-----------------------------------------REPLACERS

    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "very small", "quite small", "small", "small sized",
            "rather tiny", "below middle sized", "really small",
            "slightly smaller", "rather small", "reasonably small",
            "tiny", "characteristically tiny sized", "naturally small sized",
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }

}

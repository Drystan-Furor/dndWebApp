<?php

/** 
 * Halfling Names
 */
class halfling extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $dndrace = self::subclass($dndrace);
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * RNG if race subclasses
     * 
     * @param $dndrace this race
     * 
     * @return property of object
     */
    public function subclass($dndrace)
    {
        if ($dndrace->getRace() == "Halfling") {
            $halflingraces = [
                "Lightfoot Halfling", "Stout Halfling",
            ];
            $race = array_rand(array_flip($halflingraces), 1);
            $dndrace->setRace($race);
            return $dndrace;
        }
        return $dndrace;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $halflingFamilyNames = [
            'Brushgather', 'Goodbarrel', 'Greenbottle', 'High-hill', 'Hilltopple',
            'Leagallow', 'Tealeaf', 'Thorngage', 'Tosscobble', 'Underbough',
        ];
        $lastname = array_rand(array_flip($halflingFamilyNames), 1);
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
                'Alton', 'Ander', 'Cade', 'Corrin', 'Eldon',
                'Errich', 'Finnan', 'Garret', 'Lindal', 'Lyle', 'Merric',
                'Milo', 'Osborn', 'Perrin', 'Reed', 'Roscoe', 'Wellby',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Andry', 'Bree', 'Callie', 'Cora', 'Euphemia',
                'Jillian', 'Kithri', 'Lavinia', 'Lidda', 'Merla',
                'Nedda', 'Paela', 'Portia', 'Seraphina', 'Shaena',
                'Trym', 'Vani', 'Verna', 'Reed',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
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
        $description = $dndrace->getRace() . "s are an affable and cheerful people. 
    They cherish the bonds of family and friendship as well as the 
    comforts of hearth and home, harboring few dreams of gold or glory.";

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

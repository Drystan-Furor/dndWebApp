<?php

/** 
 * Leonin
 * Each Leonin has a personal name followed by the name of their pride 
 * and usually includes the preposition “of the”. 
 * For example, a member of the Ironmane pride named Doxia 
 * would introduce herself as “Doxia of the Ironmane”.
 */

class leonin extends Name
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
            'Embereye', 'Flintclaw', 'Goldenfield', 'Ironmane',
            'Starfeller', 'Sunguides',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $preposition = ' of the ';
        $preposnamed = rand(1, 20);
        if ($preposnamed  > 2) {
            $lastname = $preposition . $lastname;
        }
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
                'Apto', 'Athoz', 'Baragon', 'Bryguz', 'Eremoz', 'Gorioz',
                'Grexes', 'Oriz', 'Pyxathor', 'Teoz', 'Xemnon', 'Xior',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Aletha', 'Atagone', 'Demne', 'Doxia', 'Ecate', 'Eriz',
                'Gragonde', 'Iadma', 'Koila', 'Oramne', 'Seza', 'Ziore',
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
        $description = $dndrace->getRace() . 
        " are muscular, covered in fur, have feline tails, 
        and their heads look identical to those of lions. " 
        . $dndrace->getRace() . ", proud humanoid 
        creatures that share many traits with their lesser cousins, lions, 
        are a race native to the moors of eastern Anterra.";

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

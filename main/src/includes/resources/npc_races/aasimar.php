<?php

/**
 * Aasimar are typically named in accordance with human traditions.
 */
class aasimar extends Name
{
    /**
     * Biography
     * 
     * @param $race    string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $dndrace = self::isFallen($dndrace);
        $this->isAasimar = true;
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = $this->firstname;
        $this->description = self::_description($dndrace, $new_npc, $this->nickname);
    }

    /**
     * Check if race isAasimar
     * 
     * @return boolean
     */
    public function isAasimar()
    {
        return $this->isAasimar;
    }

    /**
     * RNG if race isFallenAasimar
     * 
     * @return property of object
     */
    public function isFallen($dndrace)
    {
        $isFallen = rand(1, 20);
        if ($isFallen > 10) {
            $dndrace->setRace("Fallen Aasimar");
            return $dndrace;
        } else {
            return $dndrace;
        }
    }


    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'classCall', //placeholder
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @param $new_npc class of nouns (string)
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Aritian', 'Beltin', 'Cernan', 'Cronwier', 'Eran', 'Ilamin',
                'Maudril', 'Okrin', 'Parant', 'Tural', 'Wyran', 'Zaigan',
                'Hunin', 'Kyor',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Arken', 'Arsinoe', 'Davina', 'Drinma', 'Imesah', 'Masozi',
                'Nijena', 'Niramour', 'Ondrea', 'Rhialla', 'Valtyra',
                'Yasha Nydoorin', 'Reani',
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
     * @param $dndrace    this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc, $nickname)
    {
        if ($dndrace->getRace() == "Fallen Aasimar") {
            $description = self::descriptionFallen($dndrace, $new_npc, $nickname);
        } else {
            $description = self::descriptionRegular($new_npc, $nickname);
        }
        return $description;
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    public static function descriptionFallen($dndrace, $new_npc, $nickname)
    {
        $hairShines = [
            'black', 'white',
        ];
        $hairShine = array_rand(array_flip($hairShines), 1);
        $hairShine = $new_npc->getHisHer() . " hair has a " .
            MaterialGenerator::getMetalType() . " 
        shine but withered to " . $hairShine;

        $description = "The " . $dndrace->getRace() . " " . $nickname . " bears the mark of " .
            $new_npc->getHisHer() . " fall 
            through many different physical features, like " . $hairShine .
            " and a very gaunt, almost corpse-like appearance. ";

        return $description;
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    public static function descriptionRegular($new_npc, $nickname)
    {
        $hairShine = $new_npc->getHisHer() . " hair has a " .
            MaterialGenerator::getMetalType() . " 
        shine to it with accents of " . MaterialGenerator::getMetalType();

        $description = $nickname . " bears the mark of " . $new_npc->getHisHer() .
            " celestial touch through many different physical features, 
        like " . $hairShine . ". ";

        return $description;
    }


    //-----------------------------------------REPLACERS

    /**
     * Array of eyes.
     * 
     * @param $dndrace this race
     * @param $new_npc object of nouns
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer($dndrace, $new_npc)
    {
        $eyes =  MaterialGenerator::getJewelTone() . " toned " . Eyes::canSee();
        if ($dndrace == 'Fallen Aasimar') {
            $eyelights = [
                'dark', 'pale muted',
            ];
            $eyelight = array_rand(array_flip($eyelights), 1);

            $eyes = $eyelight . " " . MaterialGenerator::getJewelTone() . " toned " .
                Eyes::canSee() . ", and dark spots forming under " .
                $new_npc->getHisHer() . " eyes";
                return $eyes;
        }
        return $eyes;
    }
}

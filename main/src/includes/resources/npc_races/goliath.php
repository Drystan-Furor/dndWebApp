<?php

/** 
 * Every goliath has three names: a birth name assigned by 
 * the newborn’s mother and father, 
 * a nickname assigned by the tribal chief, 
 * and a family or clan name. 
 *
 * A goliath’s nickname is a description that can change 
 * on the whim of a chieftain or tribal elder. 
 * It refers to a notable deed, either a success or failure, committed by the goliath. 
 *
 * Goliaths present all three names when identifying themselves, 
 * in the order of birth name, nickname, and clan name. 
 * In casual conversation, they use their nickname.
 */
class goliath extends Name
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
            'Anakalathai', 'Elanithino', 'Gathakanathi', 'Kalagiano',
            'Katho-Olavi', 'Kolae-Gileana', 'Ogolakanu',
            'Thuliaga', 'Thunukalathi', 'Vaimei-Laga',
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
        $birthnames = [
            'Aukan', 'Eglath', 'Gae-Al', 'Gauthak', 'Ilikan', 'Keothi',
            'Kuori', 'Lo-Kag', 'Manneo', 'Maveith', 'Nalla', 'Orilo',
            'Paavu', 'Pethani', 'Thalai', 'Thotham', 'Uthal', 'Vaunea', 'Vimak',
        ];
        $firstname = array_rand(array_flip($birthnames), 1);
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
        $nicknames = [
            'Bearkiller', 'Dawncaller', 'Fearless', 'Flintfinder', 'Horncarver',
            'Keeneye', 'Lonehunter', 'Longleaper', 'Rootsmasher', 'Skywatcher',
            'Steadyhand', 'Threadtwister', 'Twice-Orphaned', 'Twistedlimb',
            'Wordpainter',
        ];
        $nickname = array_rand(array_flip($nicknames), 1);
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
        $description = "In casual conversation " .
            $new_npc->getHeShe() . " is called " . $this->nickname . ".";

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

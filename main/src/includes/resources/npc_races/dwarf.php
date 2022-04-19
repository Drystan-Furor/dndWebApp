<?php  

/** 
 * Default Dwarf Names
 * these races are shorter then average humans
 * ------------------------------------SMALL
 */
class dwarf extends Name
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
        $this->description = self::_description($this->nickname);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $clannames = [
            'Balderk', 'Battlehammer', 'Brawnanvil', 'Dankil', 'Fireforge', 'Frostbeard',
            'Gorunn', 'Holderhek', 'Ironfist', 'Loderr',
            'Lutgehr', 'Rumnaheim', 'Strakeln', 'Torunn', 'Ungart',
        ];
        $lastname = array_rand(array_flip($clannames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @param $new_npc object of nouns
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Adrik', 'Alberich', 'Baern', 'Barendd', 'Brottor', 'Bruenor', 'Dain', 'Darrak', 
                'Eberk', 'Einkill', 'Fargrim', 'Flint', 'Gardain', 'Harbek', 'Kildrak', 
                'Oskar', 'Rangrim', 'Rurik', 'Taklinn', 'Thoradin', 'Thorin', 'Tordek', 
                'Travok', 'Ulfgar', 'Veit', 'Vondal', 'Orsik','Delg','Morgran','Traubon',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Amber', 'Artin', 'Audhild', 'Bardryn', 'Dagnal', 'Diesa', 'Eldeth', 'Falkrunn',
                'Finellen', 'Gunnloda', 'Gurdis', 'Helja', 'Hlin', 'Kathra', 'Krystrid', 'Ilde',
                'Liftrasa', 'Mardred', 'Riswynn', 'Sannl', 'Torbera',
                'Torgga', 'Vistra',
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
     * @param $nickname this nickname
     * 
     * @return string
     */
    private function _description($nickname)
    {
        $knownAsX = [
            "a skilled warrior",
            "a miner",
            "a stone worker",
            "a worker of metal",
        ];
        $knownAs = (array_rand(array_flip($knownAsX), 1));
        $description = "Bold and hardy, $nickname is known as " . $knownAs . ".";

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

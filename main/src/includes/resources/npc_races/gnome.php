<?php

/** 
 * Gnome Names
 * gnome 6 names 1 clan name 1 nickname
 */
class gnome extends Name
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
        $this->nickname = self::_nickname();
        $this->lastname = self::_lastname($new_npc);
        $this->firstname = self::_firstname($new_npc);
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
        if ($dndrace->getRace() == "Gnome") {
            $gnomeraces = [
                "Forest Gnome", "Rock Gnome", "Deep Gnome",
            ];
            $race = array_rand(array_flip($gnomeraces), 1);
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
    private function _lastname($new_npc)
    {
        $gnomeClanNames = [
            'Beren', 'Daergel', 'Folkor', 'Garrick', 'Nackle', 'Murnig',
            'Ningel', 'Raulnor', 'Scheppen', 'Timbers', 'Turen',
        ];
        $lastname = array_rand(array_flip($gnomeClanNames), 1);
        $lastname .= " but " . $new_npc->getHeShe() .
            " is called " . $this->nickname;
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
            $gnomeMaleNames = [
                'Alston', 'Alvyn', 'Boddynock', 'Brocc', 'Burgell',
                'Dimble', 'Eldon', 'Erky', 'Fonkin', 'Frug', 'Gerbo', 'Gimble', 'Glim',
                'Jebeddo', 'Kellen', 'Namfoodle', 'Orryn', 'Roondar', 'Seebo', 'Sindri',
                'Warryn', 'Wrenn', 'Zook',
            ];
            $firstnames = array_rand($gnomeMaleNames, 6);
            $firstname = $gnomeMaleNames[$firstnames[0]] . " " .
                $gnomeMaleNames[$firstnames[1]] . " " .
                $gnomeMaleNames[$firstnames[2]] . " " .
                $gnomeMaleNames[$firstnames[3]] . " " .
                $gnomeMaleNames[$firstnames[4]] . " " .
                $gnomeMaleNames[$firstnames[5]] . " ";
        }

        if ($new_npc->getGender() == 'female') {
            $gnomeFemaleNames = [
                'Bimpnottin', 'Breena', 'Caramip', 'Carlin', 'Donella',
                'Duvamil', 'Ella', 'Ellyjobell', 'Ellywick', 'Lilli', 'Loopmottin',
                'Lorilla', 'Mardnab', 'Nissa', 'Nyx', 'Oda', 'Orla', 'Roywyn', 'Shamil',
                'Tana', 'Waywocket', 'Zanna',
            ];
            $firstnames = array_rand($gnomeFemaleNames, 6);
            $firstname = $gnomeFemaleNames[$firstnames[0]] . " " .
                $gnomeFemaleNames[$firstnames[1]] . " " .
                $gnomeFemaleNames[$firstnames[2]] . " " .
                $gnomeFemaleNames[$firstnames[3]] . " " .
                $gnomeFemaleNames[$firstnames[4]] . " " .
                $gnomeFemaleNames[$firstnames[5]] . " ";
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
        $gnomeNicknames = [
            'Aleslosh', 'Ashhearth', 'Badger', 'Cloak', 'Doublelock',
            'Filchbatter', 'Fnipper', 'Ku', 'Nim', 'Oneshoe', 'Pock',
            'Sparklegem', 'Stumbleduck',
        ];
        $nickname = array_rand(array_flip($gnomeNicknames), 1);

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
        $description = "The " . $dndrace->getRace() . "’s energy and 
            enthusiasm for living shines 
            through every inch of " . $new_npc->getHisHer() .
            " tiny body.";

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

    /**
     * Array of replacer
     * 
     * @return age replacer
     */
    public static function ageReplacer($dndrace)
    {

        if ($dndrace == "Deep Gnome") {
            $age = rand(14, 250);
            return $age;
        } else {
            $age = rand(14, 425);
            return $age;
        }
    }
}
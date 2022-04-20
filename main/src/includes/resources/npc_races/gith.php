<?php
/** 
 * Default Gith Names
 */
class gith extends Name
{
    /**
    GITH = [
     Gythyanki  [names A]
     Githzerai  [names B]
     Githvyrik  [names A or B]
        ]
     */
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $dndrace = self::subclass($dndrace);
        $this->firstname = self::_firstname($dndrace, $new_npc);
        $this->nickname = self::_nickname();
        $this->lastname = self::_lastname($dndrace);
        /*
        Githyanki and githzerai have different naming conventions, 
        and both split their names by gender. 
        */
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
        if ($dndrace->getRace() == "Gith") {
            $githraces = [ //-----------------------2 common types of Gith
                'Githyanki', 'Githzerai', 'Githvyrik'
            ];
            $race = array_rand(array_flip($githraces), 1);
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
    private function _lastname($dndrace)
    {
        if ($dndrace->getRace() == 'Githyanki') {
            $description = " the " . $dndrace->getRace() . ",  
            they use history and metaphors pertaining to war
            as well as battle and are named after grand warriors, 
            in this case: " . $this->nickname;
            $this->lastname = $description;
            return $description;
        } else if ($dndrace->getRace() == 'Githzerai') {
            $description = " the " . $dndrace->getRace() . ",  
            they use history and metaphors pertaining to war
            they use history and metaphors pertaining to lore
            as well as learning and are named after spiritual 
            leaders and philosophers,
             in this case: " . $this->nickname;
            $this->lastname = $description;
            return $description;
        } else {
            $description = " the " . $dndrace->getRace() . ",  
            they do not identify as either Githyanki or Githzerai
            but are named based on mathematics and chaos just like 
            the arcance and psionic 
            powers from Vhostym, also known as Sojourner, 
            in this case: " . $this->nickname;
            $this->lastname = $description;
            return $description;
        }
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($dndrace, $new_npc)
    {
        $rand = rand(1, 2);
        if ($dndrace->getRace() == 'Githyanki'
            || $dndrace->getRace() == 'Githvyrik' && $rand == 1
        ) {
            if ($new_npc->getGender() == 'male') {
                $surnames1 = [
                    'Ma', 'Va', 'Na', 'U', 'Ze',
                    'Eli', 'Ga', 'Ja', 'Kar', 'Ly',
                    'Quo', 'Ris', 'Tro', 'Xa', 'Qu', 'As',
                ];
                $surnames1 = array_rand(array_flip($surnames1), 1);

                $surnames2 = [
                    'du', 'za', 'ra', 'nai', 'nu', 'a', 'i', 'k',
                    'mo', 'mo',
                ];
                $surnames2 = array_rand(array_flip($surnames2), 1);

                $surnames3 = [
                    'rai', 'rin', 'mon', 'ru', 'rik', 'th', 'doc', 'us',
                    'dain', 'nas', 'an', 'os', 'das', 'dan',
                ];
                $surnames3 = array_rand(array_flip($surnames3), 1);

                $syllables = rand(1, 8);
                switch ($syllables) {
                    case 1:
                        $firstname = $surnames1 . $surnames2 . $surnames3;
                        break;
                    case 2:
                        $firstname = $surnames1 . "'" . $surnames2 . $surnames3;
                        break;
                    case 3:
                        $firstname = $surnames1 . $surnames2 . "'" . $surnames3;
                        break;
                    case 4:
                        $firstname = $surnames1 . "'" . $surnames2 . "'" . $surnames3;
                        break;
                    case 5:
                        $firstname = $surnames1 . "'" . $surnames3;
                        break;
                    case 6:
                        $firstname = $surnames1 . $surnames3;
                        break;
                    case 7:
                        $firstname = $surnames1 . $surnames2;
                        break;
                    case 8:
                        $firstname = $surnames1 . "'" . $surnames2;
                        break;
                }
                
                $this->firstname = $firstname;
                return $firstname;
            } else if ($new_npc->getGender() == 'female') {
                $surnames1 = [
                    'Ma', 'Va', 'Na', 'U', 'Ze',
                    'A', 'Fe', 'Je', 'Pa', 'Quo', 'Va', 'Yes', 'Za',
                ];
                $surnames1 = array_rand(array_flip($surnames1), 1);

                $surnames2 = [
                    'du', 'za', 'ra', 'nai', 'nu', 'a', 'i', 'k',
                    'mo', 'noo', 'nelzi', 'n', 'h', 'r', 'su',
                ];
                $surnames2 = array_rand(array_flip($surnames2), 1);

                $surnames3 = [
                    'rai', 'rin', 'mon', 'ru', 'rik',
                    'ryl', 'r', 'ir', 'lig', 'zel', 'styl', 'ra', 'ne', 'ryth',
                ];
                $surnames3 = array_rand(array_flip($surnames3), 1);

                $syllables = rand(1, 8);
                switch ($syllables) {
                    case 1:
                        $firstname = $surnames1 . $surnames2 . $surnames3;
                        break;
                    case 2:
                        $firstname = $surnames1 . "'" . $surnames2 . $surnames3;
                        break;
                    case 3:
                        $firstname = $surnames1 . $surnames2 . "'" . $surnames3;
                        break;
                    case 4:
                        $firstname = $surnames1 . "'" . $surnames2 . "'" . $surnames3;
                        break;
                    case 5:
                        $firstname = $surnames1 . "'" . $surnames3;
                        break;
                    case 6:
                        $firstname = $surnames1 . $surnames3;
                        break;
                    case 7:
                        $firstname = $surnames1 . $surnames2;
                        break;
                    case 8:
                        $firstname = $surnames1 . "'" . $surnames2;
                        break;
                }
                
                $this->firstname = $firstname;
                return $firstname;
            }
        }
        if ($dndrace->getRace()  == 'Githzerai'
            || $dndrace->getRace() == 'Githvyrik' && $rand == 2
        ) {
            if ($new_npc->getGender() == 'male') {
                $surnames1 = [
                    'Ma', 'Va', 'Na', 'U', 'Ze', 'Sheo',
                    'D', 'Duu', 'Fe', 'Hu', 'Ka', 'Muu', 'Nu', 'Xo',
                    'Sh',
                ];
                $surnames1 = array_rand(array_flip($surnames1), 1);

                $surnames2 = [
                    'du', 'za', 'ra', 'nai', 'nu', 'go',
                    'a', 'r', 'rz', 'l', 'ra',
                ];
                $surnames2 = array_rand(array_flip($surnames2), 1);

                $surnames3 = [
                    'rai', 'rin', 'mon', 'ru', 'rik', 'rath',
                    'k', 'th', 'm', 'la', 'g', 'kk',
                ];
                $surnames3 = array_rand(array_flip($surnames3), 1);
                $syllables = rand(1, 3);
                switch ($syllables) {
                    case 1:
                        $firstname = $surnames1 . $surnames2 . $surnames3;
                        break;
                    case 2:
                        $firstname = $surnames1 . $surnames3;
                        break;
                    case 3:
                        $firstname = $surnames1 . $surnames2;
                        break;
                }
                
                $this->firstname = $firstname;
                return $firstname;
            } else if ($new_npc->getGender() == 'female') {
                $surnames1 = [
                    'Ma', 'Va', 'Na', 'U', 'Ze',
                    'Ad', 'A', 'El', 'Ez', 'Im', 'I', 'Ja', 'Lo',
                    'Uw', 'Vi',
                ];
                $surnames1 = array_rand(array_flip($surnames1), 1);

                $surnames2 = [
                    'du', 'za', 'ra', 'nai', 'nu',
                    'a', 'de', 'l', 'hel', 'il', 'ze', 'na', 'e', 'th',
                ];
                $surnames2 = array_rand(array_flip($surnames2), 1);

                $surnames3 = [
                    'rai', 'rin', 'mon', 'ru', 'rik',
                    'ka', 'ya', 'a', 'zin', 'ra',
                ];
                $surnames3 = array_rand(array_flip($surnames3), 1);
                $syllables = rand(1, 3);
                switch ($syllables) {
                    case 1:
                        $firstname = $surnames1 . $surnames2 . $surnames3;
                        break;
                    case 2:
                        $firstname = $surnames1 . $surnames3;
                        break;
                    case 3:
                        $firstname = $surnames1 . $surnames2;
                        break;
                }
                
                $this->firstname = $firstname;
                return $firstname;
            }
        }
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
        if ($dndrace->getRace() == 'Githyanki') {
            $description =  "The " . $dndrace->getRace() . " are motivated 
            by revenge and are convinced 
            that they deserve to take whatever they want 
            from the worlds they travel.";
        } else if ($dndrace->getRace() == 'Githzerai') {
            $description = "The " . $dndrace->getRace() . " believe that the 
            path to an enlightened civilization
            lays in seclusion, not conflict. ";
        } else {
            $description = "The " . $dndrace->getRace() . " 
            believe the gods are nothing compared to the utter 
            randomness and enormity of the universe. The only order
             and predictability 
            that the universe has to offer the " . $dndrace->getRace() . " 
            are its perfect mathematics. ";
        }

        
        $skintones = [
        'greenish', 'brownish',
        ];
        $skintone = array_rand(array_flip($skintones), 1);


        $description .= " " . $this->nickname . " 
        looks emaciated, has a pale yellow skin with " .
        $skintone . " tones, and a long, angular skull with pointed ears.";

        return $description;
    }

}
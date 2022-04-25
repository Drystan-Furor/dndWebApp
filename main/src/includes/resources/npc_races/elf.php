<?php

/**
 * Elves default names
 * make public calls to the
 * classes of Firbolg and Half-Elf
 * Firbolg = new elf()
 * Getters
 * Half Elf 50/50 new elf()
 * Getters
 */

class elf extends Name
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
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $elfFamilyNames =  [ // (English == Common Translations)
            'Amakiir', 'Gemflower', 'Amastacia', 'Starflower', 'Galanodel',
            'Moonwhisper',
            'Holimion', 'Diamonddew', 'Ilphelkiir', 'Gemblossom', 'Liadon',
            'Silverfrond',
            'Meliamne', 'Oakenheel', 'Naïlo', 'Nightbreeze', 'Siannodel', 'Moonbrook',
            'Xiloscient', 'Goldpetal',
        ];
        $lastname = array_rand(array_flip($elfFamilyNames), 1);
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
            $elfMaleAdultNames = [
                'Adran', 'Aelar', 'Aramil', 'Arannis', 'Aust', 'Beiro',
                'Berrian', 'Carric', 'Enialis', 'Erdan', 'Erevan', 'Galinndan',
                'Hadarai', 'Heian', 'Himo', 'Immeral', 'Ivellios', 'Laucian',
                'Mindartis', 'Paelias', 'Peren', 'Quarion', 'Riardon',
                'Rolen', 'Soveliss', 'Thamior', 'Tharivol', 'Theren', 'Varis',
            ];
            $firstname = array_rand(array_flip($elfMaleAdultNames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $elfFemaleAdultNames = [
                'Adrie', 'Althaea', 'Anastrianna', 'Andraste', 'Antinua',
                'Bethrynna', 'Birel', 'Caelynn', 'Drusilia', 'Enna', 'Felosial',
                'Ielenia', 'Jelenneth', 'Keyleth', 'Leshanna', 'Lia', 'Meriele',
                'Mialee', 'Naivara', 'Quelenna', 'Quillathe', 'Sariel',
                'Shanairra', 'Shava', 'Silaqui', 'Theirastra', 'Thia',
                'Vadania', 'Valanthe', 'Xanaphia',
            ];
            $firstname = array_rand(array_flip($elfFemaleAdultNames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * only use if age < 101
     * 
     * @return string
     */
    private function _nickname()
    {
        $elfChildNames = [
            'Ara', 'Bryn', 'Del', 'Eryn', 'Faen', 'Innil', 'Lael',
            'Mella', 'Naill', 'Naeris', 'Phann', 'Rael',
            'Rinn', 'Sai', 'Syllin', 'Thia', 'Vall',
        ];
        $nickname = array_rand(array_flip($elfChildNames), 1);
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
        $description = "Any " . $dndrace->getRace() .
            " comes from a magical people of otherworldly
            grace, living in the world but not entirely part of it.";

        return $description;
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
        if ($dndrace->getRace() == "Elf") {
            $elfraces = [
                "High Elf", "Wood Elf", "Eladrin Elf",
            ];
            $race = array_rand(array_flip($elfraces), 1);
            $dndrace->setRace($race);
            return $dndrace;
        }
        return $dndrace;
    }
}
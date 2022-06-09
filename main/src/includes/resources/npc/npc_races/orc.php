<?php

/** 
 * Orc
 *
 * Orc names are strong and guttural sounding, 
 * with female names being slightly more melodic. 
 * They don't have surnames, but do use epithets.
 */
class orc extends Name
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
            'Dummik', 'Horthor', 'Lammar', 'Sormuzhik', 'Turnskull',
            'Brodroll', 'Shotrakk', 'Dhudduk', 'Grorzakk', 'Zuvrab', 'Juvrag',
            'Ulkrunnar', 'Zorgar',
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
                'Agar', 'Akaros', 'Arrakk', 'Augh', 'Besk', 'Bruegar', 'Dahk', 'Durth',
                'Derkk', 'Fang', 'Ekk', 'Gar', 'Garlak', 'Grinkel', 'Kalip', 'Karash',
                'Devdas', 'Dgul', 'Drood', 'Druuk', 'Eagol', 'Edals',
                'Ghorn', 'Gnarsh', 'Gobar', 'Gogar', 'Gothog', 'Gremog', 'Grimslade',
                'Gronz', 'Grumbar', 'Gugal', 'Guzud', 'Hargul', 'Harl', 'Harll',
                'Honzu', 'Hoog', 'Lugh', 'Mimerk', 'Hogar', 'Jzets', 'Lubash',
                'Hool', 'Hordar', 'Horrach', 'Hoygh', 'Huagh', 'Jhanzur', 'Jutor',
                'Kesk', 'Kol', 'Korgul', 'Krell', 'Krusk', 'Lagazi', 'Lorzak',
                'Mord', 'Murook', 'Nizam', 'Nogu', 'Nyarl', 'Omotar', 'Ohr', 'Ohtar',
                'Orngart', 'Ordich', 'Taing', 'Tanglar', 'Toop', 'Trood', 'Tomph',
                'Orrusk', 'Oth', 'Raorr', 'Rendar', 'Rheen', 'Sark', 'Scrag', 'Sorgh',
                'Tarak', 'Targ', 'Tawar', 'Thar', 'Tharag', 'Thog', 'Thoin', 'Toemor',
                'Tulmak', 'Tzens', 'Ubada', 'Udhgar', 'Ugarth', 'Ugurth', 'Ungar',
                'Ungvar', 'Urzad', 'Vaath', 'Wung', 'Wykks', 'Xar', 'Xtec', 'Yark',
                'Vanchu', 'Vtam', 'Whudu', 'Wogg', 'Wogar', 'Wrnach',
                'Yazar', 'Yetto', 'Yurk', 'Zarx', 'Zotl', 'Zuboko',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Betharra', 'Bree', 'Creske', 'Edarreske', 'Duvaega',
                'Franch', 'Fukel', 'Gaaki', 'Dhithik', 'Doduh',
                'Grai', 'Grigri', 'Gynk', 'Huru', 'Neske', 'Ootah',
                'Orgaega', 'Parih', 'Puyet', 'Puyetto', 'Nadke', 'Didgu',
                'Tupacu', 'Varra', 'Yeskarra', 'Zel', 'Bhev', 'Gif', 'Ghon',
                'Zedvan', 'Guli', 'Shellu', 'Ghivgu', 'Kami', 'Dhumau', 'Sim',
                'Zuv', 'Rik ', 'Raul', 'Uvgang', 'Nugne',
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
        $prefixes = [
            'Swift', 'Aberrant', 'Angry', 'Lost', 'Vulgar', 'Vengeful', 'Gross',
            'Skin', 'Smoke', 'Dream', 'Throat', 'Beast', 'Vein', 'Vicious',
            'Forsaken', 'Merciless', 'Flame', 'Reckless', 'Worthless', 'Deserted',
            'Desolate', 'Furious', 'Bitter', 'Resentful',
        ];
        $prefix = array_rand(array_flip($prefixes), 1);
        $altfixes = [
            ' Scalper', ' Lance', ' Horror', ' Heart', ' Gasher', ' Dissector',
            ' Saber', ' Chaos', ' Squasher', ' Bruiser', ' Slicer', ' Spear',
            ' Axe', ' Killer', ' Ghost', ' Cruncher', ' Squelcher', ' Slayer',
            ' Queller', ' Smasher', ' Behemoth', ' Butcher', ' King', ' Baron',
            ' Prince', ' Executioner', ' Slaughterer',
        ];
        $altfix = array_rand(array_flip($altfixes), 1);


        //------------------------------------------------NICKNAME = 1 + 2
        $isTheNickname = rand(1, 20);
        if ($isTheNickname == 1) {
            $prefix = 'The';
            $nickname = $prefix . $altfix; //-------------------- = The + 2 [5%]
        } else if ($isTheNickname == 20) {
            $altfix = 'The ';
            $nickname = $altfix . $prefix; //-------------------- = The + 1 [5%]
        } else if ($isTheNickname >= 15 && $isTheNickname <= 19) {
            $nickname = "The " . $prefix . $altfix; //----------- = The + 1 + 2 [25%]
        } else {
            $nickname = $prefix . $altfix; //-------------------- = 1 + 2 [65%]
        }
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

        $NicknameOrigins = [
            'trough battle', 'after a duel', 'after "surviving" a robbery',
            'during a tribal war', 'due to skills in combat',
            'while serving in the army', 'after the "other one" did not survive',
            'in an arena', 'when someone else tried to win at a cardgame',
            'in warfare', 'in a crusade', 'trough bloodshed',
        ];
        $NicknameOrigin = array_rand(array_flip($NicknameOrigins), 1);

        $description = $this->firstname . " " . $this->lastname . 
        " uses the epithet "
            . $this->nickname . ". A name " . $new_npc->getHeShe() . 
            " earned " . $NicknameOrigin . ". ";

        return $description;
    }
}

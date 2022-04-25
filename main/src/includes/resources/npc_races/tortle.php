<?php

/** 
 * Tortle names are quite short and simple, but there are exceptions.
 * There is no distinction between male and female names.
 * Tortle names can change a lot throughout their lives. 
 * They pick and choose names as they see fit, 
 * so encountering a tortle years later can look different and pick a new name.
 *
 */


class tortle extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc, $array, $age)
    {
        $this->lastname = self::_lastname();
        $this->description = self::_description($dndrace, $new_npc, $age);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Lim', 'Ini', 'Gar', 'Damu', 'Quott', 'Xelbuk', 'Ploqwat', 'Kinlek',
            'Orly', 'El', 'Em', 'Elad', 'Irtig', 'Wolka', 'Lurtill', 'Nurtlen',
            'Krin', 'Natt', 'Juoror', 'Artli', 'Oppog', 'Plog', 'Iat', 'Pluzu',
            'Lorog', 'Nadyd', 'Uoppe', 'Plug', 'Kuret', 'Artli', 'Oppog', 'Plog',
            'Iat', 'Pluzu', 'Lorog', 'Nadyd', 'Uoppe', 'Plug', 'Kuret', 'Loper',
            'Uazlul', 'Xak', 'Nuall', 'Dinqom', 'Alatt', 'Wenquc', 'Nonnik',
            'Plurtar', 'Emod', 'Lerdla', 'Xikal', 'Erot', 'Wam', 'Kruk', 'Qo',
            'Buzeg', 'Plupen', 'Kriac', 'Gunqe', 'Yizlu', 'Wug', 'Pluc', 'Azloc',
            'Ul', 'Bur', 'Jize', 'Budat', 'Tueg', 'Dualkyr', 'Xirdlyl', 'Tua',
            'Wig', 'Gurtoll', 'Dat', 'Wuldull', 'Oza', 'Wozluc', 'Nemu', 'Duzla',
        ];
        $surname = array_rand($surnames, 2);
        $this->nickname = $surnames[$surname[0]];
        $this->lastname = $surnames[$surname[1]];
        $this->firstname = "";
        return $surnames[$surname[1]];
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
                'Array',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Array',
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
    private function _description($dndrace, $new_npc, $age)
    {


        //------------------------------------ tortle $age = rand(12, 50);
        if ($age < 20) {
            $y = rand(2, 6);
        } else if ($age > 30) {
            $y = rand(2, 18);
        } else {
            $y = rand(2, 5);
        }

        $y = $age - $y;
        $description = 'A bipedal tortoise who ' . $y .
            ' years ago choose the name ' . $this->nickname .
            ", as Tortles pick and choose names as they see fit.";

        return $description;
    }


    //-----------------------------------------REPLACERS

}

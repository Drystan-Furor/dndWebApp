<?php

/** 
 * Satyr Names
 * Satyrs have names that they draw from legends and 
 * myths-and from the powers that rule over the realm of the fey.
 */




/** 
 * Satyr Names
 */
class satyr extends Name
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
    private function _firstname()
    {
        $firstname = "";
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Adrastos', 'Aeolus', 'Brontes', 'Castor', 'Cephalus', 'Glaucus',
                'Helios', 'Iacchus', 'Kreios', 'Lycus', 'Melanthios', 'Okeanos',
                'Proteus',
            ];
            $lastname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Acantha', 'Astraea', 'Briseis', 'Clio', 'Erato', 'Harmonia',
                'Ianthe', 'Jocasta', 'Melete', 'Phaedra', 'Phoebe', 'Selene',
                'Tethys',
            ];
            $lastname = array_rand(array_flip($femalenames), 1);
        }
        $this->lastname = $lastname;
        return $lastname;
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
        $description = "string " . $dndrace->getRace() .
            " string " . $this->lastname . " string " . $new_npc->getHisHer() .
            " string.";
            $dndrace->getRace() . "s resemble stout men and woman with fur covered lower bodies 
        and hooves similar to that of a goat. Horns grow from " . $this->nickname . "'s head, 
        akin to a ram.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Not shoes but hooves
     * 
     * @return string
     */
    public static function shoeReplacer()
    {
        $hooves = [
            'one-toed',
            'two-toed',
            'deer',
            'moose',
            'elk',
            'horse',
            'cow',
            'cloven',
        ];

        $shapes = [
            'club', 'aligned',  'migrated',
            'negative palmar', 'laminitic', 'founder',
        ];

        $hiLows = [
            'high', 'low', 'long toe low heel',
        ];


        $hoof = array_rand(array_flip($hooves), 1);
        $shape =  array_rand(array_flip($shapes), 1);
        $hiLow = array_rand(array_flip($hiLows), 1);


        $shoe = "This Satyr has $hiLow, $shape $hoof hooves. ";
        return $shoe;
    }
}

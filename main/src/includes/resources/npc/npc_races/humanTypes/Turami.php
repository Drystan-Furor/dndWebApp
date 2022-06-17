<?php

/** 
 * Turami Names
 */
class Turami extends Name
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
        $this->nickname = $this->firstname;
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function _lastname()
    {
        $surnames = [
            'Agosto', 'Astorio', 'Calabra', 'Domine', 'Falone',
            'Marivaldi', 'Pisacar', 'Ramondo',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Anton', 'Diero', 'Marcon', 'Pieron', 'Rimardo',
                'Romero', 'Salazar', 'Umbero',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Balama', 'Dona', 'Faila', 'Jalana', 'Luisa',
                'Marta', 'Quara', 'Selise', 'Vonda',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        return $firstname;
    }


    /**
     * Array
     * $dndrace->getRace()
     * $new_npc->getHisHer()
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    public static function _description($dndrace, $new_npc)
    {
        $description = "Native to the southern shore of the Inner Sea, 
        the Turami people are generally tall and muscular,
        with dark mahogany skin, curly black hair, and dark eyes.";

        return $description;
    }

}
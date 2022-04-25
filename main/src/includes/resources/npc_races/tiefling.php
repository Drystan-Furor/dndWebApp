<?php

/** 
 * Tiefling Names
 */
class tiefling extends Name
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
            'Art', 'Carrion', 'Chant', 'Creed', 'Despair', 'Excellence', 'Fear',
            'Glory', 'Hope', 'Ideal', 'Music', 'Nowhere', 'Open', 'Poetry',
            'Quest', 'Random', 'Reverence', 'Sorrow', 'Temerity', 'Torment', 'Weary',
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
                'Akmenos', 'Amnon', 'Barakas', 'Damakos', 'Ekemon', 'Iados',
                'Kairon', 'Leucis', 'Melech', 'Mordai', 'Morthos', 'Pelaios',
                'Skamos', 'Therai',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Akta', 'Anakis', 'Bryseis', 'Criella', 'Damaia', 'Ea', 'Kallista',
                'Lerissa', 'Makaria', 'Nemeia', 'Orianna', 'Phelaia', 'Rieta',
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
        $description = "To be greeted with stares and whispers, 
        to suffer violence and insult on the street, 
        to see mistrust and fear in every eye: 
        this is the lot of the " . $dndrace->getRace() . ".";

        return $description;
    }


    //-----------------------------------------REPLACERS

}

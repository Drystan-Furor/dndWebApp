<?php
/** 
 * Calishite Names
 */
class Calishite extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace    string
     * @param $new_npc string
     */
    private function __construct($dndrace, $new_npc)
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
            'Basha', 'Dumein', 'Jassan', 'Khalid', 'Mostana', 'Pashar', 'Rein',
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
            'Aseir', 'Bardeid', 'Haseid', 'Khemed', 'Mehmen', 'Sudeiman', 'Zasheir',
            ];
            $firstname = array_rand(array_flip($malenames), 1);    
        }   
    
        if ($new_npc->getGender() == 'female') {
            $femalenames = [
            'Atala', 'Ceidil', 'Hama', 'Jasmal', 'Meilil', 'Seipora', 
            'Yasheira', 'Zasheida', 
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
        $description = "Shorter and slighter in build than most other humans, 
                        Calishites have dusky brown skin, hair, and eyes. 
                        They’re found primarily in southwest Faerûn."; 

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = Nose::defaultNose();
        return $nose;
    }

    /**
     * Array of eyes.
     * 
     * @return eyes replacer
     */
    public static function eyesReplacer()
    {
        $eyes = Eyes::canSee();
        return $eyes;
    }


    /**
     * Array of replacer
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouth = Mouth::defaultMouths();
        return $mouth;
    }

    /**
     * Array of replacer
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chin = Chin::defaultChin();
        return $chin;
    }

    /**
     * Array of replacer
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $teeth = Teeth::defaultTeeth();
        return $teeth;
    }
    
}

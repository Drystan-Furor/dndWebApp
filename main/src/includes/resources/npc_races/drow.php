<?php

/** 
 * Drow Names  REDIRECT FROM ELF
 * https://forgottenrealms.fandom.com/wiki/Drow_dictionary
 */
class drow extends Name
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
            'Duskryn', "Druu'giir", 'Hunzrin', "Ixit'shii", 'Higure',
            "Ignin'rl", 'Zolond', 'Nurindyn', 'Milithor', 'Takandoys',
            "T'orgh", ' Despana', 'Symryvvin', 'Ousstyl', 'Godeep', 'Nurbonnis',
            'Freth', 'Pharn', 'Auvryndar', 'Hekar', 'Maivert', 'Coloara',
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
                'Abban', 'Alur', 'Araj', 'Avinsin', 'Bol', 'Brorn', 'Dobluth', 'Duk-tak', 'Duvall',
                'Elgg', 'Elgghinn', 'Elgg-hor', 'Faern', 'Honglath', 'Jabbuk', "Khal'abbil",
                'Kyorlin', 'Noamuth', 'Ogglin', 'Oloth', 'Parzdiamo', 'Phindar', 'Quarthen',
                'Ragar', 'Ryld', 'Sargtlin', 'Ssinssrigg', 'Thalack', "Uln'hyrr", 'Ultrin',
                'Sargtlin', 'Ultrinnan', 'Veldrin', 'Velkyn', 'Zedrinset', 'Zhaunil', "Z'ress",
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Abbil', 'Aluve', 'Asanque', 'Belaern', 'Brorna', 'Bwael', 'Crinti', 'Draada',
                'Elamshin', 'Elendar', 'Ilareth', 'Ilhar', 'Ilharess', "Jivvin Quui'elghinn",
                'Malla', 'Mrimm', 'Orthea', 'Plynn', "Qu'uente", "Qu'lith", 'Quarvalsharess',
                'Sarn', 'Sreen', 'Streea', 'Streeaka', 'Ul-Ilindith', 'Ultrine', 'Valsharess',
                'Velve', 'Vidrinath', 'Yathrin', 'Yathtallar',
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
        $nickname = '<a href="https://forgottenrealms.fandom.com/wiki/Drow_dictionary">'
            . $this->firstname . '</a>';
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
        $description =  $this->nickname . " hails from a dark-skinned sub-race of
            elves that predominantly live in the Underdark";

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
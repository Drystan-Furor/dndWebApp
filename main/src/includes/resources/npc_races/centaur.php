<?php
/** 
 * Centaur Names
 */
class centaur extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace    string
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
    private function _lastname()
    {
        $surnames = [
            'Autumn', 'Pine', 'Timber', 'Crater', 'Hazel', 'Aspen', 'Drift', 'Bright',
            'Forest', 'Rock', 'Oaken', 'Creek', 'River',
            'Willow', 'Earthen', 'Flood', 'Fall', 'Snow', 'Green', 'Ridge', 'Winter',
            'Hill', 'Storm', 'Brown', 'Red', 'Moss',
        ];
        $lastname1 = array_rand(array_flip($surnames), 1);
        $surnames2 = [
            'sleep', 'chaser', 'watcher', 'shifter', 'scorn', 'fighter', 'chanter',
            'braider',
            'binder', 'seeker', 'bringer', 'rusher', 'strength',
            'tree', 'hoof', 'blade', 'darter', 'twister', 'hold', 'smirk', 'watch',
            'petals', 'charger', 'borne', 'prowler', 'reign',
        ];
        $lastname2 = array_rand(array_flip($surnames2), 1);
        $lastname = $lastname1 . $lastname2;
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
                'Thond', 'Dezreva', 'Jelveth', 'Vigrid', "Thoz'ren", 'Rhoklund',
                'Vrannul', "Tos'zid", 'Ghalrevol', "Thez'had", 'Dwaildir',
                'Vokrih', 'Gird', 'Rhin', 'Dor',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Bydran', 'Zifrin', 'Phazirin', 'Dyzlet', 'Zefnael', 'Vyfnozen', 'Lalthag',
                'Phaflet', 'Lilraeh', 'Vinroh', 'Lizhan',
                'Fydath', 'Shegevan', 'Phorlosh', 'Nograr', 'Melrat', 'Phazren', 'Horzer',
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
        $description = "Roamers at heart, " . $dndrace->getRace() 
        . "s love open spaces and the freedom 
        to travel. As much as they can, " . $dndrace->getRace() 
        . "s run. They race the wind,
         hooves thundering and tails streaming behind them.";

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


        $shoe = "This Centaur has $hiLow, $shape $hoof hooves. ";
        return $shoe;
    }
}

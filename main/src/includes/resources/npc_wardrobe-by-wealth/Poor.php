<?php

/**
 Rng how wealthy one is, generate wardrobe array's on Boolean
 */

class Poor
{
    /**
     * Construct an outfit
     * and a sentence based on this class outfit 
     */
    public function __construct($heshe, $npcClass, $dndrace)
    {
        $this->outfit = self::clothes($heshe, $npcClass, $dndrace);
        $this->intro = self::intros();
    }


    //-------------------------------ARRAY'S for random sentence building
    private static function textiles()
    {
        $textiles = [
            'leather', 'linen', 'cotton',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'tunic', 'robe', 'garment', "doublet",
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    //------------------------------------build generated sentence
    /**
     * Array of sentences of outfits
     * 
     * @return outfit
     */
    private static function _clothing()
    {
        $clothes = [
            self::outfits() . " made of " . self::textiles() . ", hanging a bit loose,",

            "hooded  " . self::textiles() . " cloak",

            "functional " . self::textiles() . " " . self::outfits(),

            "short skirted " . self::textiles() . " tunic",

            "set of simple " . self::textiles() . " clothes",

            self::textiles() . " cote hardie, that buttons in the front to a low waist 
                and is fitted to a " . self::textiles() . " bodice,",

            self::textiles() . " " . self::outfits() .
                " similar to the clothing of commoners but made of cheap 
                materials with less dye,",

            self::textiles() . " apron",
        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-----------------------------outfit
    /**
     * Sentence builder
     * He / She 
     * 
     * @return outfit as a sentence
     */
    public function clothes($heshe, $npcClass, $dndrace)
    {
        $belt = new Belts();
        $belt = $belt->getBelt();

        $hat = new Hats($heshe);
        $hat = $hat->getHat();

        $shoes = new Shoes($dndrace);
        $shoes = $shoes->getShoes();


        $this->outfit = ucfirst($heshe) . " wears a " . //He / She Wears a
            self::_clothing() .
            " and a " . $belt . ". " . $shoes . " "
            . $hat;
        return $this->outfit;
    }

    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who looks rather poor',
            'who seems to be penniless', 'that looks quite impoverished',
            'who recently became bankrupt', ' looking poverty-stricken at best',
            'who looks underpriviliged', 'who makes a down-and-out impression',
        ];
        $intro = array_rand(array_flip($wealthinessTypes), 1);
        return $intro;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getOutfit()
    {
        return $this->outfit;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getIntro()
    {
        return $this->intro;
    }
}

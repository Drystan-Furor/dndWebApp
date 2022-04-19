<?php
class Prosperous
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
            "silk", "velvet", 'cotton', 'linen',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'tunic', 'robe', 'gown', "doublet", 'cote hardie',
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    //------------------------------------build generated sentence
    private static function _clothing()
    {
        $clothes = [
            VerbsGenerator::getComplexity() . " hooded " . self::textiles() . " cloak",

            VerbsGenerator::getComplexity() . " " . self::textiles() . " houppelande, a full length robe like garment",

            self::outfits() . ", that buttons in the front to a low waist, 
            and is fitted to a " . VerbsGenerator::getComplexity() . " bodice,",

            self::outfits() . ", fit closely to the body",

            "Burgundian style " . self::outfits(),

            VerbsGenerator::getComplexity() . " " . self::textiles() . " " . self::outfits(),

            self::outfits() . " of " . VerbsGenerator::getComplexity() . " " . self::textiles(),

            self::textiles() . " " . self::outfits() .
                " similar to the clothing of the elite but made of cheaper 
                materials with less dye and ornamentation",

        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }

    //-----------------------------outfit
    /**
     * Sentence builder
     * He / She 
     * 
     * @param $heshe = noun
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

        $jewels = [
            Rings::craftRing(),
            Jewelry::craftJewel(),
        ];
        $jewel = array_rand(array_flip($jewels), 1);

        $this->outfit = ucfirst($heshe) . " wears a " . //He / She Wears a
            self::_clothing() .
            " and a " . $belt . ". "
            . SentenceGenerator::observing() . " " . $npcClass .
            " wears " . $jewel //class
            . ". " . $shoes . " "
            . $hat;
        return $this->outfit;
    }

    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who seems to have some coin',
            'who looks rather comfortable',
            'who seems to be fortunate',
            'that looks a bit prospering',
            'who recently became upper-class',
            'looking affluent at best',
            'who looks priviliged',
            'who seems to be doing well',
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

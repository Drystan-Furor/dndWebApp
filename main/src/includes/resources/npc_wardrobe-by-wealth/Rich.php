
<?php
class Rich
{
    /**
     * Construct an outfit
     * and a sentence based on this class outfit 
     */
    public function __construct($heshe, $npcClass, $dndrace)
    {
        $this->outfit = self::clothes($heshe, $npcClass, $dndrace);
        $this->intro = self::_intros();
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
            'tunic', 'robe', 'costume', 'gown', "doublet", 'cote hardie',
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    /**
     * Build a generated sentence from arrays 
     * call to VerbsGenerator::getComplexity()
     * 
     * @return outfit
     */
    private static function _clothing()
    {
        $clothes = [
            VerbsGenerator::getComplexity() . " hooded " .
                self::textiles() . " cloak 
                with " . OutfitDetailsGenerator::outfitDetails() .
                " and it has " . OutfitDetailsGenerator::richDetails(),

            VerbsGenerator::getComplexity() . " " . self::textiles() .
                " houppelande, a full length robe like garment 
                with " . OutfitDetailsGenerator::outfitDetails() .
                " and it has " . OutfitDetailsGenerator::richDetails(),

            self::outfits() . ", that buttons in the front to a low waist, 
            and is fitted to a " . VerbsGenerator::getComplexity() . " bodice,",

            self::outfits() . ", fit closely to the body 
            with " . OutfitDetailsGenerator::outfitDetails() .
                " and it has " . OutfitDetailsGenerator::richDetails(),

            "Burgundian style " . self::outfits() . " 
            with " . OutfitDetailsGenerator::outfitDetails() .
                " and it has " . OutfitDetailsGenerator::richDetails(),

            VerbsGenerator::getComplexity() . " " .
                self::textiles() . " " . self::outfits(),

            self::outfits() . " of " . VerbsGenerator::getComplexity() . " " .
                self::textiles(),

            self::textiles() . " " . self::outfits() .
                " similar to the clothing of the elite but made of cheaper 
                materials with less dye and ornamentation",

        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }

    //-----------------------------outfit Jewelry::craftJewel()
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

        $this->outfit = ucfirst($heshe) . " wears a " . //He / She Wears a
            self::_clothing() .
            " and a " . $belt . ". "
            . SentenceGenerator::observing() . " " . $npcClass . " wears " .
            Jewelry::craftJewel() . ". "
            . $hat . " " . $shoes;
        return $this->outfit;
    }


    //-------------------------------------INTRO
    /**
     * Array of sentences to use in buildup
     * 
     * @return string intro
     */
    private function _intros()
    {
        $intros = [
            'who looks quite wealthy',
            'who looks very comfortable',
            'who seems to be blooming',
            'that looks "in the money"',
            'who recently became flourishing',
            'looking halcyon at best',
            'who looks well-off',
            'who seems to be on top of the heap',
        ];
        $intro = array_rand(array_flip($intros), 1);
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

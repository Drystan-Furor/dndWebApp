<?php
class Loaded
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
            "silk", "velvet",
            'brocade silk',
            'damask silk',
            'brocade velvet',
            'damask velvet',
        ];
        $textile = array_rand(array_flip($textiles), 1);
        return $textile;
    }

    private static function outfits()
    {
        $outfits = [
            'costume', 'gown', "doublet", 'cote hardie',
            'houppelande, a beautiful full length robe like garment',
        ];
        $outfit = array_rand(array_flip($outfits), 1);
        return $outfit;
    }


    //------------------------------------build generated sentence
    /**
     * Array of different outfit mashups
     * 
     * @return outfit string
     */
    private static function _clothing()
    {
        $clothes = [
            VerbsGenerator::getComplexity() . " " . self::textiles() . " " .
                self::outfits() . ", fit closely to the body, 
            with " . OutfitDetailsGenerator::outfitDetails() . ".
            It has " . OutfitDetailsGenerator::richDetails() . ". 
            The outfit has " . OutfitDetailsGenerator::sleeves(),

            VerbsGenerator::getComplexity() . " " . self::textiles() . "
             hooded cloak, with " . OutfitDetailsGenerator::outfitDetails() . ". 
            It has " . OutfitDetailsGenerator::richDetails() . ". ",

            "Burgundian style " . VerbsGenerator::getComplexity() . " " .
                self::textiles() . " " . self::outfits() . ", 
            with " . OutfitDetailsGenerator::outfitDetails() . ". 
            It has " . OutfitDetailsGenerator::richDetails() . ". ",


            "clerical " . VerbsGenerator::getComplexity() . " " .
                self::textiles() . " robes,
            with " . OutfitDetailsGenerator::outfitDetails() . ". 
            It has " . OutfitDetailsGenerator::richDetails() . ". ",

            "elaborately printed " . self::outfits() . " in " .
                VerbsGenerator::getComplexity() . " " . self::textiles() . ",
            with " . OutfitDetailsGenerator::outfitDetails() . ". 
            It has " . OutfitDetailsGenerator::richDetails() . ". ",

            VerbsGenerator::getComplexity() . " " . self::textiles() . " " .
                self::outfits() . ", closely following the lines of the body from the 
            shoulder to below the waist
            with " . OutfitDetailsGenerator::outfitDetails() . ". 
            It has " . OutfitDetailsGenerator::richDetails() . ". ",


        ];
        $outfit = array_rand(array_flip($clothes), 1);
        return $outfit;
    }


    //-------------------------------------INTRO
    private function intros()
    {
        $wealthinessTypes = [
            'who is unmistakenly of noble herritage',
            'who looks extremely wealthy',
            'who looks to have money to burn',
            'who seems to be lousy self',
            'that looks opulent and roaring',
            'who is self and flourishing',
            'looking truly halcyon and lucky',
            'who looks positivly thriving',
            'looking aristocratic and dignified',
            'who seems to be a member of a noble family',
            'who makes a real aristocratic impression',
        ];
        $intro = array_rand(array_flip($wealthinessTypes), 1);
        $intro .= ". ";
        return $intro;
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
            " and a pristine " . $belt . ". "
            . SentenceGenerator::observing() . " " . $npcClass .
            " wears " . Jewelry::craftJewel()
            . " and a matching " . Rings::craftRing()
            . $hat . " " . $shoes;
        return $this->outfit;
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

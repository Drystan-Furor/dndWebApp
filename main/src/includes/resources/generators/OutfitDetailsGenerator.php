<?php

/**
 * Outfit Details Getter
 * 
 * @category Generators
 * @package  Main
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class OutfitDetailsGenerator
{
    /**
     * Array for adding details on npc
     * GeneralWardrobe::outfitDetails()
     * 
     * @return string
     */
    public static function outfitDetails()
    {
        $clothingDetails = [ //with 
            "a separate and fuller skirt sewn to the body",
            "a loose blouse that can be tightly laced",
            "an overcoat",
            "a garnache, a long cloak,",
            "a bodice sewn to a skirt",
            "the fabric falling in folds into a bell shape",
            "a low cut V neck that shows a piece of contrasting fabric underneath",
            "a Gothic style influence, a look that accentuates slenderness and an 
            elongated form",
            "a vertical color difference with a split vertical dividing line in 
            the center of the body",
            "a light linen shift underneath,",
            "luxurious fabrics", "a luxurious trim",
            "beautiful prints and vibrant colors",
            "edges of the outer garments decorated with dagging, edged with 
            loose pieces of fabric that resembled leaves",
            "the highest quality textiles",
            //--------------------all but beggar
        ];
        $outfitDetail = array_rand(array_flip($clothingDetails), 1);
        return $outfitDetail;
    }

    /**
     * Array for adding details on npc
     * GeneralWardrobe::patterns()
     * 
     * @return string
     */
    public static function patterns()
    {
        $patterns = [
            'woven in',
            'embroided',
            'printed on the fabric',
        ];
        $pattern = array_rand(array_flip($patterns), 1);
        return $pattern;
    }

    /**
     * Array for adding details on npc
     * GeneralWardrobe::linings()
     * 
     * @return string
     */
    public static function linings()
    {

        $linings = [
            "both warmth and style",
            "warmth",
            "style",
        ];
        $lining = array_rand(array_flip($linings), 1);
        return $lining;
    }

    /**
     * Array for adding details on npc
     * GeneralWardrobe::richDetails()
     * 
     * @return string
     */
    public static function richDetails()
    {
        //---------------------------if ($rich == true || $loaded == true) 
        // It has
        $richdetails = [
            "designs featuring gimmicky or quirky elements",
            "fur lining thats increasing " . self::linings(),
            "interwoven golden thread for a shimmering effect",
            "ornate and wildly ostentatious designs " . self::patterns(),
            "patterns and designs " . self::patterns(),
            "bureaucratic sigils of office " .self::patterns(),
        ];
        $richDetail = array_rand(array_flip($richdetails), 1);
        return $richDetail;
    }


    //---------------------------------sleeves
    /**
     * Array for adding details on npc
     * GeneralWardrobe::sleeves()
     * 
     * @return string
     */
    public static function sleeves()
    {
        // With
        $sleeves = [
            VerbsGenerator::getLength() . " sleeves widened toward a bell shape",
            "a high collar and " . VerbsGenerator::getLength() . " sleeves",
            "full sleeves tightened at the wrist",
            VerbsGenerator::getLength() . " sleeves that end at the elbow",
            "no sleeves",
            VerbsGenerator::getLength() . " sleeves",
            "slashings in the sleeves that show the under tunic",
        ];
        $sleeve = array_rand(array_flip($sleeves), 1);
        return $sleeve;
    }
}

<?php

/**
 * Jewelry
 */
class Jewelry
{
    /**
     * Construct a piece of jewelry
     */
    public function __construct()
    {
        $this->jewel = self::craftJewel();
    }


    /**
     * Array of types
     * 
     * @return single type
     */
    private static function _jewelryType()
    {
        $jewelrytypes = [
            'necklace',
            'necklace with a locket',
            'necklace with a gemstone pendant',
            'chain',
            'ring',
            'locket',
            'bracelet',
            'spiral bracelet',
            'arm cuff',
            'upper arm bracelet',
            'arm band',
            'armlet',
            'bangle',
        ];
        $jewelryType = array_rand(array_flip($jewelrytypes), 1);
        return $jewelryType;
    }

    /**
     * Create a sentence
     * 
     * @return string
     */
    public static function craftJewel()
    {
        $jewel = " a ".MaterialGenerator::getMetalType() . " " . self::_jewelryType() .
            " set with a " . MaterialGenerator::getGemstoneType();

        return $jewel;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getJewel()
    {
        return $this->jewel;
    }
}
// Jewelry::craftJewel()
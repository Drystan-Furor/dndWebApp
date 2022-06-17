<?php

/**
 * Rings
 */
class Rings
{
    /** 
     * Forged in the fires of mount Doom
     */
    public function __construct()
    {
        $this->ring = Rings::craftRing();
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getRing()
    {
        return $this->ring;
    }


    /**
     * Array of intricacy of Ring
     * 
     * @return string
     */
    private static function _getComplexity()
    {
        $ringcomplexities = [
            'a', 'a',
            'a mundane',
            'a plain',
            'an intricate',
            'an uncomplicated',
            'a simple',
            'a complex',
            'a sophisticated',
            'a baroque',
            'a refined',
        ];
        $ringcomplexity = array_rand(array_flip($ringcomplexities), 1);
        return $ringcomplexity;
    }

    /**
     * Forge a ring or a signet ring D20 15+ == Signet Ring
     * 
     * @return ring
     */
    public static function craftRing()
    {
        $ring = rand(1, 20);
        if ($ring > 15) {
            $ring = self::_getComplexity() . " " . MaterialGenerator::getMetalType() . " signet";
        } else {
            $ring = self::_getComplexity() . " " . MaterialGenerator::getMetalType();
        }
        $ring = $ring .  " ring set with a " . MaterialGenerator::getGemstoneType();
        return $ring;
    }
}

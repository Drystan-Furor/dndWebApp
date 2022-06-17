<?php

/**
 * Random set of eyes
 * $eyes = new Eyes();
 * $eyes = $eyes->getEyes();
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class Eyes
{
    /**
     * Construct eyeshapes an determine if blind or not
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->eyes = self::_eyeshape($dndrace, $new_npc);
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     * 
     * @return eyes
     */
    private function _eyeShape($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'eyesReplacer') == true) {
            $this->eyes = strtolower($dndrace)::eyesReplacer($dndrace, $new_npc);
        } else {
            $this->eyes = self::canSee();
        }
        return $this->eyes;
    }
    /**
     * Array of eyeshapes
     * 
     * @return string
     */
    public static function defaultEyeshape()
    {
        $eyeshapes = [
            "squinty eyes", "big eyes", "small eyes",
            "fairly large eyes", "tired eyes",
            "energetic eyes", "drowzy eyes",
            "round eyes", "almond shaped eyes",
            "wide set eyes", "close set eyes",
            "prominent eyes", "downturned eyes",
            "upturned eyes", "deep set eyes", "droopy eyes",
            "monolid eyes",
        ];

        $eyes = array_rand(array_flip($eyeshapes), 1);
        return $eyes;
    }

    /**
     * D100 if one can see.
     * 1% chance to be blinded
     * 9% to be naturally blind /half blind
     * array to randomize blindness
     * 
     * @return string
     */
    public static function canSee()
    {
        $eyes = self::defaultEyeshape();
        $hasEyes = rand(1, 100);
        if ($hasEyes == 1) {
            $eyes = 'empty eye sockets, eyes gauged out';
        } else if ($hasEyes >= 2 && $hasEyes <= 10) {
            $blindeye = [
                ", the left eye is blind", ", the right eye is blind",
                ", but both eyes are blind",
            ];
            $blindness = array_rand(array_flip($blindeye), 1);
            $eyes .= $blindness;
        }
        return $eyes;
    }


    /**
     * Getter
     * 
     * @return string object
     */
    public function getEyes()
    {
        return $this->eyes;
    }
}

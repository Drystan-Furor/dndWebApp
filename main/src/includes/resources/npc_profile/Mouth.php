<?php

/**
 * Mouth generator 
 * $mouth = new Mouth();
 * $mouth = $mouth->getMouth();
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class Mouth
{

    /**
     * Constuct = select random value string
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->Class_mouth = self::_mouthShape($dndrace, $new_npc);
    }

    /**
     * Array of default values for Mouth
     * 
     * @return string of mouths
     */
    public static function defaultMouths()
    {
        $mouthshape = [
            "full lips", "round lips", "bow shaped lips", "heavy lower lips",
            "heart shaped lips", "heavy upper lips", "wide lips", "thin lips",
            "downward turned lips", "perfectly proportioned lips",
        ];
        $mouth = array_rand(array_flip($mouthshape), 1);
        return $mouth;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     * 
     * @return mouth
     */
    private function _mouthShape($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'mouthReplacer') == true) {
            $this->mouth = strtolower($dndrace)::mouthReplacer($dndrace, $new_npc);
        } else {
            $this->mouth = self::defaultMouths();
        }
        return $this->mouth;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getMouth()
    {
        return $this->mouth;
    }
}
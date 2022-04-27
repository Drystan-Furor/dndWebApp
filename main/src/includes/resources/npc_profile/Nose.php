<?php

/**
 * NOSE RNG, based on real percentages found in research.
 * Nose Selector (Based on actual research data for percentages)
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class Nose
{
    var $nose;

    /**
     * Constructor
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->nose = self::_randomNose($dndrace, $new_npc);
    }

    /**
     * RNG that nose
     * 
     * @param $dndrace string race
     * @param $new_npc Gender
     * 
     * @return string
     */
    private static function _randomNose($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'noseReplacer') == true) {
            $nose = strtolower($dndrace)::noseReplacer($dndrace, $new_npc);
        } else {
            $nose = self::defaultNose();
        }
        return $nose;
    }

    /**
     * Default Nose
     * 
     * @return string
     */
    public static function defaultNose()
    {
        //-------------------------------------DEFAULT Human Nose
        $nose = rand(1, 100);
        switch ($nose) {
        case $nose >= 1 && $nose <= 24:
                $nose = 'a very fleshy, prominent big nose';
            break;
        case $nose >= 25 && $nose <= 38:
                $nose = 'a celestial upturned nose, small in size with a dent at 
                the nose bridge and a protruding tip';
            break;
        case $nose >= 39 && $nose <= 47:
                $nose = 'an eagle nose. With a strong sloping curve that
                prominently protrudes from the face';
            break;
        case $nose >= 48 && $nose <= 56:
                $outlines = [
                    "subtle", "protruding",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a bumpy nose that features bumpy outlines with '
                    . $outline . ' curves located at the tip of the nose';
            break;
        case $nose >= 57 && $nose <= 64:
                $nose = 'a very snub nose, thin and pointy, 
                small in size but quite round';
            break;
        case $nose >= 65 && $nose <= 68:
                $nose = 'a "Hawk" nose that has similarities with the curved 
                beaks of eagles and other predatory birds. It has a dramatic arched 
                shape and a protruding bridge, making them look long and small';
            break;
        case $nose >= 69 && $nose <= 76:
                $nose = 'a perfectly straight nose. One of the most aesthetically 
                pleasing of all nose shapes. It gives a distinct and attractive 
                profile since it doesn’t have any humps or curves';
            break;
        case $nose >= 77 && $nose <= 84:
                $nose = 'a nubian nose, rather big, with very prominent nostrils';
            break;
        case $nose >= 85 && $nose <= 91:
                $nose = 'a thin and flat shaped nose with a short tip';
            break;
        case $nose >= 92 && $nose <= 100:
                $nose = "a bulbous nose, it has a a swollen, 
                disproportionate nasal tip,
                almost like it's too big. Imagine something like a ball positioned
                at the end of the nose";
            break;
        default:
                $nose = 'a very fleshy, prominent big nose';
            break;
        }
        return $nose;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getNose()
    {
        return $this->nose;
    }
}
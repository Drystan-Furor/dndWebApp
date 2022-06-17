<?php

/** 
 * Loxodon Names
 */
class loxodon extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $dndrace = self::subclass($dndrace);
        $this->lastname = self::_lastname($new_npc);
        $this->firstname = self::_firstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * RNG if race subclasses
     * 
     * @param $dndrace this race
     * 
     * @return property of object
     */
    public function subclass($dndrace)
    {
        if ($dndrace->getRace() == "Loxodon") {
            $loxodonRaces = [
                'Ravnica Loxodon', 'Mirrodin Loxodon', 'Tarkir Loxodon',
            ];
            $race = array_rand(array_flip($loxodonRaces), 1);
            $dndrace->setRace($race);
            return $dndrace;
        }
        return $dndrace;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname()
    {
        $firstname = "";

        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $surnames1 = [
                'Ag', 'Ghano', 'Ganon', 'Ga', 'Ili', 'Kava', 'Lathi', 'Mau', 'Phu',
                'Thava', 'Tvorti', 'Vega',
            ];
            $lastname1 = array_rand(array_flip($surnames1), 1);

            $surnames2 = [
                'vith', 'noth', 'dorf', 'non', 'loxth', 'vipth', 'linth',
                'thouk', 'ghuin', 'glath', 'lipth', 'khagn',
            ];
            $lastname2 = array_rand(array_flip($surnames2), 1);
            $lastname =  $lastname1 . $lastname2;
        }

        if ($new_npc->getGender() == 'female') {
            $surnames1 = [
                'Ameris', 'Gaupa', 'Imim', 'Kau', 'Laulu', 'Maump', 'Oneg',
                'Ori', 'Phaa', 'Veria',
            ];
            $lastname1 = array_rand(array_flip($surnames1), 1);

            $surnames2 = [
                'thea', 'elia', 'phea', 'thila', 'nea', 'thorea',
                'hea', 'rea', 'ghia', 'phia',
            ];
            $lastname2 = array_rand(array_flip($surnames2), 1);
            $lastname =  $lastname1 . $lastname2;
        }
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $prefixes = [
            'Broad', 'Cracked', 'Dark', 'High', 'Long', 'Moon', 'Scarred',
            'Severed', 'Strong', 'Twin',
        ];
        $prefix = array_rand(array_flip($prefixes), 1);

        $altfixes = [
            'Tusk', 'Tusks', 'Wool', 'Ear', 'Eye', 'Hide', 'Trunks', 'Trunk',
        ];
        $altfix = array_rand(array_flip($altfixes), 1);

        $nickname = $prefix . "-" . $altfix;
        $this->nickname = $nickname;
        return $nickname;
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc)
    {
        $description = "A " . $dndrace->getRace() . " looks like a perfect 
            blend of elephant and man, 
            with the thick, leathery skin of an elephant and the bipedal
            stance of the more civilized races.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "sort of typical giant-sized", "common giant sized",
            "characteristically large sized", "naturally large sized", "typical",
            "more or less standard sized", "moderately large sized", 'sizable',

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", 'immense', 'enormous',
            "massive", "tall", 'big', 'hulking', 'towering', 'giant',
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }

    /**
     * Loxodon have trunks, not nose
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = rand(1, 100);
        switch ($nose) {
        case $nose >= 1 && $nose <= 24:
                $nose = 'a very fleshy, prominent big proboscis';
            break;
        case $nose >= 25 && $nose <= 38:
                $nose = 'an upturned trunk, small in size with a dent at 
        the bridge';
            break;
        case $nose >= 39 && $nose <= 47:
                $nose = 'a curved proboscis. With a strong sloping curve that
         prominently protrudes from the face';
            break;
        case $nose >= 48 && $nose <= 56:
                $outlines = [
                    "subtle", "protruding",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a bumpy trunk that features bumpy outlines with '
                    . $outline . ' curves located at the tip of the proboscis';
            break;
        case $nose >= 57 && $nose <= 64:
                $nose = 'a very snub trunk, thin and pointy, 
            small in size but quite round';
            break;
        case $nose >= 65 && $nose <= 68:
                $nose = 'a proboscis that has a dramatic arched 
        shape and a protruding bridge, making it look long and small';
            break;
        case $nose >= 69 && $nose <= 76:
                $nose = 'a perfectly straight trunk. One of the most aesthetically 
            pleasing of all proboscis shapes. It gives a distinct and attractive 
            profile since it doesn’t have any humps or curves';
            break;
        case $nose >= 77 && $nose <= 84:
                $nose = 'a nubian-like proboscis, rather big, with very prominent nostrils';
            break;
        case $nose >= 85 && $nose <= 91:
                $nose = 'a thin and flat shaped trunk with a short tip';
            break;
        case $nose >= 92 && $nose <= 100:
                $nose = "a bulbous proboscis, it has a a swollen, disproportionate nasal tip,
        almost like it's too big. Imagine something like a ball positioned
        at the end of the trunk";
            break;
        default:
                $nose = 'a very fleshy, prominent big proboscis';
            break;
        }
        return $nose;
    }
}
/*
Nose / trunk replacer
*/
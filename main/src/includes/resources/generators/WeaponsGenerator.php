<?php
/**
 * Weapons
 * 
 * @category Generators
 * @package  Main
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class WeaponsGenerator
{
    /**
     * Constructor
     * 
     * @param $dndrace string
     */
    public function __construct($dndrace)
    {
        $this->weapon = self::_armed($dndrace);
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getArms()
    {
        return $this->weapon;
    }

    /**
     * Array of Holding/Carry verbs
     * 
     * @return string
     */
    public static function holding()
    {
        //-------------------------------------------------------------holding
        $holds = [
            'carries', 'is holding', 'clenches', 'is equipped with',
            'is packed with', 'is armed with', 'has', 'hauls', 'lugs',
            'hoists', 'bears', 'clamps', 'clutches', 'clasps', 'holds',
            'is packing', 'is outfitted with',
            'is loaded with', 'is girded with', 'is steeled with',
            'is fitted out with',
        ];
        $holding = array_rand(array_flip($holds), 1);
        return $holding;
    }

    /**
     * Array of weapons
     * 
     * @return string
     */
    public static function weapon()
    {
        //------------------------------------------------------------------weapon
        $weapons = [
            "club", "mace", "scimitar", "dagger", "short sword", "long sword", "bow",
            "crossbow", "axe", "hatchet", "warhammer", "great sword", "javelin",
            "spear", "glaive", "quarterstaff", "throwing axe",
            "knife", "rapier", "whip", "battleaxe", "messer", "halberd", "lance",
            "heavy crossbow", "hand crossbow", "blowgun", "boomerang", "couple of darts",
            "flail", "greataxe", "greatclub", "light hammer", "longbow",
            "maul", "morningstar", "pike", "shortbow", "sickle",
            "sling", "trident", "war pick",
        ];
        $weapon = array_rand(array_flip($weapons), 1);
        return $weapon;
    }

    /**
     * Build full sentence
     * 
     * @param $dndrace == what race is holding it
     * 
     * @return string
     */
    private static function _armed($dndrace)
    {
        $HoldWeapon 
            = SentenceGenerator::observing() ." ". $dndrace ." ".
            self::holding() ." a ". self::weapon();

        return $HoldWeapon;
    }
}
/*
$holding = WeaponsGenerator::holding();
$weapon = Weapons::weapon();
*/
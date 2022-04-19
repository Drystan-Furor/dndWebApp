<?php

/**
 * Generate a random belt.
 * Random materials will be generated
 * and items attached to the belt too.
 */
class Belts
{

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->belt = self::belt();
    }

    /**
     * Array of random items attached to the belt.
     * 
     * @return item
     */
    private static function _beltitem()
    {
        $beltitems = [
            rand(3, 9) . ' small bottles',
            rand(2, 6) . ' throwing daggers',
            rand(4, 12) . ' throwing darts',
            rand(2, 5) . ' vials with red liquid',
            rand(2, 5) . ' small pouches',
            rand(10, 40) . ' feet of rope',
            'a book', 'a purse', 'a large tome', 'a small knife',
            'a sash', 'some lockpicks', 'an Abacus', 'a crowbar',
            'a waterskin', 'a hooded lantern', "carpenter's tools",
            'a cylindrical leather case', 'a grappling hook', "a healer's kit",
            'a magniffying glass', 'a leather-bound tome',
            'a spyglass', 'a dangling censer', 'a drinking horn',
            'an iron flask', 'a boomerang', 'ten pouches',
        ];
        $beltitem = array_rand(array_flip($beltitems), 1);
        return $beltitem;
    }

    /**
     * Array of materials
     * 
     * @return single value
     */
    private static function beltmaterial()
    {
        $beltmaterial = [
            'cloth', 'cowhide leather', 'full-grain calfskin leather',
            'braided leather', 'tooled leather', 'suede', 'rope',
            'studded leather',
        ];
        $beltmaterial = array_rand(array_flip($beltmaterial), 1);
        return $beltmaterial;
    }

    /**
     * Array of materials
     * 
     * @return single value
     */
    private static function _beltFashion()
    {
        $beltfashion = [
            'embroidered', 'plain', 'smooth', 'simple',
            'traditional', 'common',
        ];
        $beltfashion = array_rand(array_flip($beltfashion), 1);
        return $beltfashion;
    }

    /**
     * Craft unique belts in array
     * 
     * @return belt
     */
    public static function belt()
    {
        // array of mixed vars from arrays.
        $belts = [
            //belt + buckle
            self::_beltFashion() . " " . self::beltmaterial() . " 
            belt with a " . MaterialGenerator::getMetalType() . " buckle",

            // buckled belt
            MaterialGenerator::getMetalType() . " buckled " . self::_beltFashion() . " 
            " . self::beltmaterial() . " belt",

            //belt + item
            self::_beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::_beltitem() . " strapped to it",

            //belt + 2 items
            self::_beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::_beltitem() . " and " . self::_beltitem() . " 
            strapped to it",

            // belt + 3 items
            self::_beltFashion() . " " . self::beltmaterial() . " belt
            used to hold  " . self::_beltitem() . ",  " . self::_beltitem() . "
            and  " . self::_beltitem(),

            //belt + item && belt 2 + item2
            self::_beltFashion() . " " . self::beltmaterial() . " belt
            with " . self::_beltitem() . " strapped to it and another "
                . self::_beltFashion() . " " . self::beltmaterial() . " 
            belt holding " . self::_beltitem(),


            //BANDOLIERS
            self::_beltFashion() . " " . self::beltmaterial() . " 
            bandolier with " . self::_beltitem() . ", " . self::_beltitem() . "
            and " . self::_beltitem() . " attached to it",
            //belt + item && bandolier + 2 item
            self::_beltFashion() . " " . self::beltmaterial() . " belt
            holding " . self::_beltitem() . " and a " . self::_beltFashion() .
                " " . self::beltmaterial() . " bandolier with a "
                . MaterialGenerator::getMetalType() . " buckle holding "
                . self::_beltitem() . " and " . self::_beltitem(),
        ];
        //pregenerated belt selector
        $belt = array_rand(array_flip($belts), 1);
        return $belt;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getBelt()
    {
        return $this->belt;
    }
}

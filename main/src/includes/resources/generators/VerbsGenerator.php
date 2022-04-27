<?php

/**
 * Verbs
 *  $quality;
 *  $maintenance;
 *  $observe;
 *  $indicator;
 *  $length;
 * 
 * @category Generators
 * @package  Main
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class VerbsGenerator
{
    //-----------------------------------------quality
    /**
     * Array
     * 
     * @return string
     */
    public static function quality()
    {
        $qualities = [
            'cheap', 'affordable', 'quality', 'expensive quality',
        ];
        $quality = array_rand(array_flip($qualities), 1);
        return $quality;
    }
    //$quality = Verbsgenerator::quality();

    /**
     * Array
     * 
     * @return string
     */
    public static function getComplexity()
    {
        $complexities = [
            'clean', 'plain', 'straightforward', 'classic', 'simple', 'beautiful',
        ];
        $complexity = array_rand(array_flip($complexities), 1);
        return $complexity;
    }


    //----------------------------------------maintenance
    /**
     * Array
     * 
     * @return string
     */
    public static function maintenance()
    {
        $maintenances = [
            'clean and slick', 'rusted', 'moldy', 'oxidated', 'clean', 'corroded',
            'damaged', 'shining', 'smooth', 'big', 'dented', 'flawed', 'dirty',
            'stained', 'filthy', 'greasy', 'begrimed', 'smudged', 'squalid',
            'disheveled', 'grimey', 'well maintained', 'bloodstained', 'unkempt',
        ];
        $maintenance = array_rand(array_flip($maintenances), 1);
        return $maintenance;
    }

    //---------------------------------------------observations
    /**
     * Array
     * 
     * @return string
     */
    public static function getObservation()
    {
        $observations = [
            'see', 'clearly notice', 'cautiously observe', 'simply spot', 'behold',
            'distinguish from a distance', 'discern',
            'glimpse', 'mark', 'catch a glimpse that', 'catch sight', 'make out',
            'take notice', 'survey',
        ];
        $observe = array_rand(array_flip($observations), 1);
        return $observe;
    }

    //-------------------------------------------------indicators
    /**
     * Array
     * 
     * @return string
     */
    public static function getIndicator()
    {
        $indicators = [
            'indicates', 'connotes', 'denotes', 'hints', 'implies', 'suggests',
            'implies', 'symbolizes', 'specifies', 'reveals', 'proves', 'attests',
        ];
        $indicator = array_rand(array_flip($indicators), 1);
        return $indicator;
    }


    //----------------------------------------------lengths
    /**
     * Array
     * 
     * @return string
     */
    public static function getLength()
    {
        $lenghts = [
            'short', 'long', 'cape like', "full", 'wide',
        ];

        $length = array_rand(array_flip($lenghts), 1);
        return $length;
    }

    //--------------------------------------------------------Holding VerbsGenerator::holding()
    /**
     * Array
     * 
     * @return string
     */
    public static function holding()
    {
        $clasping = [
            'clasps', 'clutches', 'clenches', 'holds', 'wears', 'is holding',
            'is thightly squeezing', 'is caressing', 'is fiddling with', 
            'is clasping',
        ];
        $clasps = array_rand(array_flip($clasping), 1);
        return $clasps;
    }

    /**
     * Array
     * VerbsGenerator::named()
     *  
     * @return string
     */
    public static function named()
    {
        $namings = [
            'named',
            'renamed',
            'call',
            'refer to',
            'dubbed',
            'labeled',
            'titled',
        ];
        $named = array_rand(array_flip($namings));
        return $named;
    }
}
//$class = VerbsGenerator::getClass();// make functions static to call them this way
/*
$observation = VerbsGenerator::getObservation();
$new_complexity = VerbsGenerator::getComplexity();
$new_length = VerbsGenerator::getLength();
$new_clasp = VerbsGenerator::getClasping();
*/
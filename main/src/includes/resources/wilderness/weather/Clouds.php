<?php

/**
 * @category Wilderness/weather
 * @package  Clouds
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  MIT 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class Clouds extends WeatherGenerator
{
    /**
     * Constructor
     * 
     * @return string
     */
    private function __construct()
    {
        $this->clouds = self::defaultClouds();
    }

    /**
     * Array of strings
     * 
     * @return string
     */
    public static function defaultClouds()
    {
        $dryweathers = [ // The clouds look like 
            'they are abscent in the clear blue sky. ',
            'delicate, feathery clouds. ',
            'thin, white clouds that cover the whole sky like a veil. ',
            'thin, sometimes patchy, sheet-like clouds. ',
            'fluffy, white cotton balls in the sky. ',
            'thin, white sheets covering the whole sky. ',
            'huge mountains or towers from far away. ',
            'patchy gray and white with often a dark appearance. ',
        ];
        $dryweather = array_rand(array_flip($dryweathers), 1);
        $clouds = "The clouds look like $dryweather";
        return $clouds;
    }

    /**
     * Get the value of Clouds
     * 
     * @return this->string
     */
    public function getClouds()
    {
        return $this->clouds;
    }
}

<?php

/**
 * @category Wilderness/weather
 * @package  Wind
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  MIT 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class Wind extends WeatherGenerator
{
    /**
     * Constructor
     * 
     * @return string
     */
    private function __construct()
    {
        $this->wind = self::wind();
    }

    /**
     * Wind generator function
     * 
     * @return string
     */
    private function wind()
    {
        //d20
        $winds = rand(1, 20);
        if ($winds > 12 && $winds <= 17) {
            $wind = "There is a light breeze. ";
            $effect = "";
        } else if ($winds >= 18) {
            $wind = "Strong winds are billowing. ";
            $effect = " Disadvantage on Ranged Weapon
            Attack Rolls and on 
            Wisdom (Perception) checks that rely on hearing. 
            Fog is dispersed, open flames extinghuised,  
            non-magical flying is near impossible, 
            a flying creature must land at the end of it's turn or fall. ";
        } else { //if ($winds <= 12)
            $wind = "It's practically windstill. ";
            $effect = "";
        }
        $this->$wind = $wind . $effect;
        return $wind;
    }

    /**
     * Get the value of wind
     * 
     * @return string
     */
    public function getWind()
    {
        return $this->wind;
    }
}

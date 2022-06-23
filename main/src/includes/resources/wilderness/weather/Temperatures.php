<?php

/**
 * @category Wilderness/weather
 * @package  Temperatures
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  MIT 
 * @link     https://drystan-furor.github.io/Portfolio/
 */


class Temperatures extends WeatherGenerator
{
    /**
     * Constructor
     * 
     * @return string
     */
    private function __construct()
    {
        $this->temperature = self::_temperature();
    }
    /**
     * D20 temperature
     * 
     * @return string
     */
    private function _temperature()
    {
        $temperatures = rand(1, 20);
        $cs = "[Constitution Saving Throw (DC " . rand(1, 20) . ")]";
        $exh = "[Gain one level of Exhaustion]";
        $res = "resistance";
        $imm = "immunity";


        if ($temperatures >= 15 && $temperatures <= 17) {
            $d4times10 = rand(1, 4) * 10;
            $this->temperature = $d4times10 .
                " degrees Fahrenheit colder then normal. ";
            $this->description = "[it's between 32 and -8 Fahrenheit 
                (0 - -22 degrees Celsius) or lower]";
            $this->Effect = $cs . "{DEFAULT DC10} or  $exh. 
            (This does not apply if a creature has $res or $imm
            to cold damage, wears cold weather gear, 
            or is adapted to cold climates). ";
        } else if ($temperatures >= 18) {
            $d4times10 = rand(1, 4) * 10;
            $this->temperature = $d4times10 . 
                " degrees Fahrenheit hotter then normal. ";
            $this->description = "[it's 86 Fahrenheit 
                (30 degrees Celsius) or hotter]";
            $this->Effect = "If creatures are exposed to the heat 
            and have no access to 
            drinkable water they must: succeed on $cs {DEFAULT DC5} each hour. 
            The DC is 5 for the first hour and increases by 1 each additional hour.
            Creatures in medium or heavy armor, or heavy clothing have Disadvantage
            on the Saving Throw.
            Creatures with $res or $imm to fire damage or adapted to the climate 
            automatically succeed on the Saving Throw. ";
        } else {
            $this->temperature = "normal for the season. ";
            $this->description = "[it's between 32-86 Fahrenheit 
                (0 - 30 degrees Celsius)]";
            $this->Effect = "";
        }
        $this->temperature .= $this->description . $this->Effect;
        $this->temperature = "The temperature is " . $this->temperature;
        return $this->temperature;
    }

    /**
     * Get the value of this
     * 
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
}

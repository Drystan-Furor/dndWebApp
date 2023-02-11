<?php

/**
 * @category Wilderness/weather
 * @package  Precipitation
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  MIT 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class Precipitation extends WeatherGenerator
{

    /**
     * Constructor
     * 
     * @return string
     */
    private function __construct($temperatures)
    {
        $this->precipitation = self::_defaultPrecipitation($temperatures);
    }

    /**
     * D20 IF/ELSE none/light/heavy rain/snow
     * 
     * @return string
     */
    private function _defaultPrecipitation($temperatures)
    {
        //----------------------------- Precipitation 
        //d20
        $precipitations = rand(1, 20);
        $downfalls = [
            'rain', 
        ];

        // if it's colder push array with snow
        if ($temperatures >= 15 && $temperatures <= 17) {
            $downfalls[] = 'snow';
        }

        $downfall = array_rand(array_flip($downfalls), 1);

        if ($precipitations >= 13 && $precipitations <= 17 ) {
            //"Light rain or light snowfall";
            $precipitation = "Unfortunately a light $downfall has begun to fall. ";
            $Effect = "It makes your sight a bit blurry in the distance. 
            [-2 Passive Perception when relying on seeing] ";
            $precipitation .= $Effect;
        } else if ($precipitations >= 18) {
            //"Heavy rain or heavy snowfall";
            $precipitation = "Regrettably a heavy $downfall 
                        is beating down on you. ";
            $Effect = "The weather makes your surroundings lightly obscured. 
                [-5 Passive Perception when relying on seeing] 
                [Disadvantage on Wisdom(Perception)] ";
            $precipitation .= $Effect;
        } else {
            //"None" if ($precipitations <= 12) 
            $precipitation = "At least it's dry for now. ";
            $Effect = '';
            $precipitation .= $Effect;
        }
        return $precipitation;
    }

    /**
     * Get the value of precipitation
     *
     * @return string
     */
    public function getPrecipitation()
    {
        return $this->precipitation;
    }
}

<?php

/**
 * @category Wilderness/weather
 * @package  WeatherGenerator
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */

class WeatherGenerator
{
    /**
     * Constructor
     * 
     */
    public function __construct()
    {
        $this->weather = self::_weatherConstruction();
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

    /**
     * Get the value of precipitation
     *
     * @return string
     */
    public function getPrecipitation()
    {
        return $this->precipitation;
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

    /**
     * Get the value of wind
     * 
     * @return string
     */
    public function getWind()
    {
        return $this->wind;
    }


    /**
     * Weather Construction
     * 
     * @return string
     */
    private function _weatherConstruction()
    {
        $temperature = new Temperatures();
        $this->temperature = $temperature->getTemperature();
        $this->temperatures = $temperature->getD20Temperatures();

        $clouds = new Clouds();
        $this->clouds = $clouds->getClouds();

        $wind = new Wind();
        $this->wind = $wind->getWind();

        $precipitation = new Precipitation();
        $this->precipitation = $precipitation->getPrecipitation();

        $weather = $this->temperature . $this->clouds . 
                $this->wind . $this->precipitation;
        //---- concat

        return $weather;
    }
}

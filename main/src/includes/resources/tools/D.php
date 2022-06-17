<?php

/**
 * Random Dice
 * $dice = new D(x);
 * $dice = $dice->getRoll();
 * 
 * $d4 = "(1d4) [" . rand(1, 4) . "]";
 * $d6 = "(1d6) [" . rand(1, 6) . "]";
 * $d8 = "(1d8) [" . rand(1, 8) . "]";
 * $d10 = "(1d10) [" . rand(1, 10) . "]";
 * $d12 = "(1d12) [" . rand(1, 12) . "]";
 * $d20 = "(1d20) [" . rand(1, 20) . "]";
 * $d100 = "(1d100) [" . rand(1, 100) . "]";
 * 
 * @category Tools
 * @package  Dice
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class D
{
    /**
     * Constructor
     * 
     * @param $sides int
     */
    public function __construct($sides)
    {
        $diceRoll = rand(1, $sides);
        $this->string = "(1d" . $sides . ") [" . $diceRoll . "]";
    }

    /**
     * Getter
     * get the concatinated string
     * 
     * @return string diceRoll
     */
    public function getRoll()
    {
        return $this->string;
    }
}

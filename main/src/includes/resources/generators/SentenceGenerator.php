<?php
/**
 * Using VerbsGenerator class 
 * to generate full sentences inside arrays.
 * again take a random result from Array to 
 * write a short story, that is not to similar.
 */
class SentenceGenerator
{
    /**
     * Array using getObervation to generate more unique sentences
     * 
     * @return string
     */
    public static function observing()
    {
        $observations = [
            "At a glance you " . VerbsGenerator::getObservation() . " the ",
            "At first sight you ". VerbsGenerator::getObservation() . " the ",
            "At a gander you " . VerbsGenerator::getObservation() . " the ",
            "In a flash you " . VerbsGenerator::getObservation() . " the ",
            "In a fleeting look you " . VerbsGenerator::getObservation() . " the ",
            "While checking, you " . VerbsGenerator::getObservation() . " the ",
        ];

        $observe = array_rand(array_flip($observations));
        return $observe;
    }
}
//$new_observation = SentenceGenerator::observing();

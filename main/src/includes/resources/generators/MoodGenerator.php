<?php

/**
 * Emotion Getter
 * 
 * @category Generators
 * @package  Main
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class MoodGenerator
{
    /**
     * Constructor
     */
    public function __construct($class)
    {
        $this->mood = self::_generateMood($class);
    }

    /**
     * Array of Emotions
     * 
     * @return string
     */
    private static function _generateMoods()
    {
        $moods = [
            'angry', 'happy', 'careless', 'neutral',
            'pissed', 'timid', 'grieving', 'sad', 'laughing',
            'smiling', 'upset', 'agitated', 'aggravated', 'cheerful',
            'joyful', 'peacefull', 'intoxicated', 'captivated',
            'gleeful', 'thrilled', 'ecstatic', 'glad', 'annoyed',
            'bitter', 'furious', 'bashed', 'tipsy',
            'impassioned', 'indignant', 'offended', 'uptight',
            'fierce', 'displeased', 'hateful', 'raging', 'mad',
            'crazy', 'storming', 'casual', 'indifferent', 'nonchalant',
            'absent-minded', 'thoughtful', 'thoughtless', 'oblivious',
            'unconcerned', 'unguarded', 'guarded', 'unobservant',
            'disinterested', 'uncommitted', 'unbiased', 'calm', 'cool',
            'collected', 'dispassionate', 'pacifistic',
            'relaxed', 'unprejudiced', 'nonbelligerent', 'impartial',
            'nervous', 'fearful', 'gentle', 'afraid', 'frightened',
            'feeble', 'cowardly', 'shaky', 'unnerved',
            'heartbroken', 'melancholy', 'mournful', 'sorrowful',
            'bereaved', 'cheerless', 'distressed', 'forlorn', 'downcast',
        ];
        $mood = array_rand(array_flip($moods), 1);
        return $mood;
    }

    /**
     * Setter
     * Build a sentence around the mood
     * 
     * @return string
     */
    private static function _generateMood($class)
    {
        $mood = "The " . $class . " seems to be in a " 
        . self::_generateMoods() . " mood.";
        return $mood;
    }


    /**
     * Getter
     * 
     * @return string object
     */
    public function getMood()
    {
        return $this->mood;
    }
}
//$new_mood = MoodGenerator::generateMood();
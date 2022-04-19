<?php

/**
 * Emotion Getter
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
     * @return emotion
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
     * Build a sentence around the mood
     * 
     * @return mood
     */
    private static function _generateMood($class)
    {           //nickname
        $mood = "The " . $class . " seems to be in a " . self::_generateMoods() . " mood.";

        return $mood;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getMood()
    {
        return $this->mood;
    }
}
//$new_mood = MoodGenerator::generateMood();
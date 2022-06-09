<?php

/** 
 * Firbolg
 * Firbolgs don't really use names, the concept of it is peculiar to them. 
 * They will take elven names when dealing with outsiders however, 
 * and they'll also use nicknames they might be given by others. 
 * Everything else in their lives is usually referred to by their actions.
 */
class firbolg extends Name
{

    /**
    THIS USES ELF
     */
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $biography = new elf($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->firstname = $biography->getFirstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Array',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname()
    {
        $firstnames = [
            'Array',
        ];
        $firstname = array_rand(array_flip($firstnames), 1);

        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname()
    {
        $nicknames = [
            'Bearkiller', 'Dawncaller', 'Fearless', 'Flintfinder', 'Horncarver',
            'Keeneye', 'Lonehunter', 'Longleaper', 'Rootsmasher', 'Skywatcher',
            'Steadyhand', 'Threadtwister', 'Twice-Orphaned', 'Twistedlimb',
            'Wordpainter',
        ];
        $nickname = array_rand(array_flip($nicknames), 1);
        $this->nickname = $nickname;
        return $nickname;
    }

    /**
     * Array
     * 
     * @param $dndrace this race 
     * @param $new_npc nouns
     * 
     * @return string
     */
    private function _description($dndrace, $new_npc)
    {
        $description = "The " . $dndrace->getRace() .
            " is nicknamed " . $this->nickname . ". ";

        return $description;
    }


    //-----------------------------------------REPLACERS
    //-------------------------------------LARGE
    //larger then average humans

    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "sort of typical giant-sized", "common giant sized",
            "characteristically large sized", "naturally large sized", "typical",
            "more or less standard sized", "moderately large sized", 'sizable',

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", 'immense', 'enormous',
            "massive", "tall", 'big', 'hulking', 'towering', 'giant',
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }
}
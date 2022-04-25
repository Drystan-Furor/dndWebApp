<?php

/** 
 * Kobold
 *
 * Kobold names are short and sweet. Most of the tones in their names are harsher, 
 * but some more melodic and softer tones are found here and there as well.
 * Kobold names are supposed to have meanings based on the individual's 
 * appearance or behavior, but these meanings are only known 
 * to those who speak their language.
 */
class kobold extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname();
        $this->firstname = self::_firstname($new_npc);
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function ancestry()
    {
        $ancestries = [
            'Chromatic', 'Gem', 'Metallic',
        ];
        $ancestry = array_rand(array_flip($ancestries), 1);

        if ($ancestry == 'Chromatic') {
            $chromatics = [
                'Black', 'Blue', 'Green', 'Red', 'White',
            ];
            $color = array_rand(array_flip($chromatics), 1);
        }
        if ($ancestry == 'Gem') {
            $gems = [
                'Amethyst', 'Crystal', 'Esmerald', 'Sapphire', 'Topaz',
            ];
            $color = array_rand(array_flip($gems), 1);
        }
        if ($ancestry == 'Metallic') {
            $metals = [
                'Brass', 'Bronze', 'Copper', 'Gold', 'Silver',
            ];
            $color = array_rand(array_flip($metals), 1);
        }
        $ancestry .= ' ' . $color;
        return $ancestry;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _lastname()
    {
        $surnames = [
            'Tass', 'Varn', 'Snuks', 'Gox', 'Guvne', 'Keplu', 'Mahro', 'Hovni',
            'Kirpo', 'Merbi', 'Dorn', 'Sig', 'Ver', 'Sax', 'Siklu', 'Ilti', 'Utro',
            'Snege', 'Zepi', 'Hirto', 'Suks', 'Rugs', 'Hik', 'Ratt', 'Atre', 'Gedri',
            'Deklo', 'Ahso', 'Hoga', 'Saru', 'Kin', 'Mak', 'Tix', 'Dis', 'Snolto',
            'Olta', 'Zorpu', 'Ogo', 'Kara', 'Gobli',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @param $new_npc object of nouns
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {

        $firstname = '';

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
        $nickname = $this->lastname;
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
        $description = "It's ancestry gives this " . $dndrace->getRace() . " 
                        a " . dragonborn::ancestry() . " scale color.";

        return $description;
    }

    //-----------------------------------------REPLACERS
    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "very small", "quite small", "small", "small sized",
            "rather tiny", "below middle sized", "really small",
            "slightly smaller", "rather small", "reasonably small",
            "tiny", "characteristically tiny sized", "naturally small sized",
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }
}

<?php

/** 
 *     Hobgoblin Names
 *      Hobgoblin Tribe Names
 * nickname as well, pointing to the nature of that specific Hobgoblin
 */
class hobgoblin extends Name
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
    private function _lastname()
    {
        $surnames = [
            'Skin Flayers', 'Flesh Renders', 'Leg Choppers', 'Marrow Suckers', 'Eye Rippers',
            'Skull Smashers', 'Slow Killers', 'Gnawers', 'Cheek Reapers', 'Gut Jabbers',
            'Tribe Kaknec', 'Tribe Raknorz', 'Tribe Gagruc', 'Tribe Klulzek',
            'Tribe Nokorz', 'Tribe Rharz', 'Tribe Glorbal', 'Tribe Gavlan',
        ];
        $lastname = array_rand(array_flip($surnames), 1);
        $lastname = " of the " . $lastname;
        $this->lastname = $lastname;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($new_npc)
    {
        $firstnames = [
            'Nar', 'Lorz Crash', 'Mog', 'Kundod', 'Dognerz', 'Lor Stalk', 'Khozrug',
            'Klaruk Bark', 'Avon Rend', 'Rhalzen ', 'Klalvarg', 'Ekkek ', 'Lokvovod ',
            'Vrurkozol ', 'Lerz ', 'Druzol', 'Zondud', 'Nokag', 'Grodral', 'Drorag',
            'Drolvrak',
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
            'The Dagger', 'Whack', 'Crash', 'Stunt', 'Revel', 'The Rotten',
            'Retch', 'The Bold', 'Rush', 'Jolt', 'Grin', 'The Brute', 'The Red',
            'The Corrupt', 'Glare', 'The Monster', 'Lash', 'Lurch',
            'The Skeleton', 'The Loud',
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
        $description = "The large goblinoid " . $this->firstname . " 
        is known as " . $this->nickname . ".";

        return $description;
    }
}

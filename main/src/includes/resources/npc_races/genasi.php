<?php

/** 
 * Genasi Names
 *  if ($raceorigin == 'Genasi')
 * Genasi use the naming conventions of the people among whom they were raised. 
 * They might later assume distinctive names to capture their heritage, 
 */
class genasi extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $subrace = self::subclass($dndrace);
        $biography = new firbolg($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->nickname = self::_nickname($dndrace);
        $this->firstname = self::_firstname($subrace);
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * RNG if race subclasses
     * 
     * @param $dndrace this race
     * 
     * @return property of object
     */
    public function subclass($dndrace)
    {
        if ($dndrace->getRace() == "Genasi") {
            $genasiraces = [
                "Fire Genasi", "Air Genasi", "Earth Genasi", "Water Genasi",
            ];
            $race = array_rand(array_flip($genasiraces), 1);
            $dndrace->setRace($race);
            return $dndrace->getRace();
        }
        return $dndrace;
    }

    /**
     * Getter
     * 
     * @return subrace string
     */
    public function getSubRace()
    {
        return $this->subrace;
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
    private function _firstname($subrace)
    {
        $firstname = " the " . $subrace . " " . $this->nickname;
        $this->firstname = $firstname;
        return $firstname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _nickname($dndrace)
    {
        if ($dndrace->getRace() == "Fire Genasi") {
            $surnames = [
                'Flame', 'Ember', 'Blaze', 'Flare', 'Flash', 'Wildfire',
                'Inferno', 'Bonfire', 'Tinder', 'Scorching', 'Burn',
            ];
            $nickname = array_rand(array_flip($surnames), 1);
        }
        if ($dndrace->getRace() == "Air Genasi") {
            $surnames = [
                'Breath', 'Breeze', 'Draft', 'Sky', 'Empyrean', 'Azure',
                'Whiff', 'Zephyr', 'Waft', 'Heavens', 'Ozone', 'Welkin',
            ];
            $nickname = array_rand(array_flip($surnames), 1);
        }
        if ($dndrace->getRace() == "Earth Genasi") {
            $surnames = [
                'Onyx', 'Dust', 'Terra', 'Terrane', 'Mold', 'Clay', 'Raven',
                'Obsidian', 'Sable', 'Slate', 'Coal', 'Stygian', 'Melanoid',
            ];
            $nickname = array_rand(array_flip($surnames), 1);
        }
        if ($dndrace->getRace() == "Water Genasi") {
            $surnames = [
                'Wave', 'Crest', 'Flood', 'Stream', 'Surge', 'Tide', 'Deluge',
                'Niagara', 'Torrent', 'Downpour', 'Drencher', 'Flow', 'Aqua-pura',
            ];
            $nickname = array_rand(array_flip($surnames), 1);
        }
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
        $description = "However " . $new_npc->getHeShe() . " assumed the distinctive name "
        . $this->nickname . " " . $this->lastname . ", to capture ".$new_npc->getHisHer()." 
        Genasi heritage as " . $this->nickname . " is born and raised in a " .
        $dndrace->getRaceorigin() . " society.";

        return $description;
    }

}
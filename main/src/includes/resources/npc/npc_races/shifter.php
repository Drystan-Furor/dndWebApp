<?php

/** 
 * Shifter
 * There are 2 types of shifters, the Longtooth and the Razorclaw. 
 *
 * Shifter names tend to be closely related to nature, 
 * just as they are themselves. 
 * Names such as 'Claw', 'Ash', 'Summer', and 'Rain' are the norm, which somewhat 
 * resemble the names often used for fairies. However, 
 * shifter names tend to sound more somber than fairy names.
 */

class shifter extends Name
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
            'Longtooth', 'Razorclaw',
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
    private function _firstname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Bramble', 'Badger', 'Cobble', 'Bluff', 'Vine', 'Spark', 'Acor',
                'Astro', 'Ravine', 'Pyro', 'Vermin', 'Pyre', 'Torrent', 'Flint',
                'Scar', 'Light', 'Nebula', 'Coal', 'Gulch', 'Crater', 'Breach',
                'Vermin', 'Gulch', 'Bog', 'Drift', 'Talon', 'Pyre', 'Crag',
                'Grit', 'Flare', 'Glare', 'Silver', 'Timber', 'Spark',
                'Flood', 'Ash', 'Stone', 'Fury', 'Wolf', 'Stripe',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Magenta', 'Amethyst', 'Elm', 'Harley', 'Karma', 'Ocean', 'Bloom',
                'Sage', 'Thistle', 'Diamond', 'Rill', 'Olive', 'Elm', 'Quill', 'Rose',
                'Sugar', 'Snowflake', 'Pyro', 'Violet', 'Canyon', 'Willow', 'Rosemary',
                'Poison', 'Olive', 'Poison', 'Isle', 'Spring', 'Emerald', 'Stardust',
                'Dewdrop', 'Rill', 'Ruby', 'Whirl', 'Harley', 'River', 'Twilight',
                'Sunrise', 'Silver', 'Sapphire',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
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
        $nickname = $this->firstname;
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

        if ($this->lastname == 'Longtooth') {
            $definition = 'The Longtooth shifters are more like wolves, 
                            they work well in packs, are drawn to hierarchies, 
                            and will come to the aid of friends and companions. ';
        } else {
            $definition = "Razorclaw shifters are more like tigers, 
                            they're independent, they assume their companions are 
                        capable and able to take care of themselves just as they can,
                         and they will do their best to carry their own weight. ";
        }



        //--------------------------------------------------------cause of shift
        $prefixes = [ // x is a Shifter due to
            'being born from lycanthropy',
            'mysterious Fey causes',
            'barbarian rituals',
        ];
        $prefix = array_rand(array_flip($prefixes), 1);

        //--------------------------------------------------------class of shifter
        $altfixes = [
            'Loreguards', 'Moonspeakers', 'Ragewild Shifters',
        ];
        $altfix = array_rand(array_flip($altfixes), 1);

        //---------------------------------------------------------nickname

        $description = $dndrace->getRace() . "s 
            are the weretouched of Eberron, in some ways. 
            As a child, the " . $dndrace->getRace() . " 
            formed a close bond with the beast within. 
            These totemic forces are explosive forces in "
            . $this->firstname . "’s personality, 
            and all " . $dndrace->getRace() . "s have a unique 
            inner beast that guides them in some way. " .
            $this->firstname . " is a shifter due to "
            . $prefix . ", " . $new_npc->getHeShe() . " developed as a "
            . $this->lastname . " Shifter and joined the " . $altfix .
            ". " . $definition;

        return $description;
    }

}

<?php

/**
 * Tabaxi
 * A Tabaxi’s name is crafted by a 
 * clan looking at star signs, prophecies, and anything else. 
 * These names are shortened to a one-word synopsis of the most 
 * important aspect of your name. 
 *
 * Your last name is always that of your clan. 
 * This is based on a simple geographical factor near your clan. 
 * Therefore, multiple clans could be named after the same cliff.
 */
class tabaxi extends Name
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
        $clanPrefixes = [
            'Bright', 'Distant', 'Burning', 'Roaring', 'Rumbling', 'Ancient', 'Proud',
            'Fading', 'Growing', 'Angelic', 'Flickering', 'Dry', 'Changing',
            'Fertile', 'Awoken', 'Bleak', 'Dreary', 'Misty', 'Chilly', 'Tumbling', 'Elder',
            'Cold', 'Boiling', 'Dreaded', 'Ascending', 'Descending', 'Tranquil', 'Radiant',
            'Entangling', 'Drenching', 'Parching', 'Dusty', 'Threatening',
            'Bellowing', 'Faraway', 'Grand', 'Lurking', 'Dangerous', 'Gloomy', 'Killing',
            'Ugly', 'Insignificant', 'Ominous', 'Grievous', 'Hazardous', 'Sandy',
            'Shocking', 'Primeval', 'Cremating',
        ];
        $clanPrefix = array_rand(array_flip($clanPrefixes), 1);

        $clanAlfixes = [
            'River', 'Mountains', 'Cliffs', 'Rain', 'Tree', 'Forests', 'Torrent', 'Wilds',
            'Glade', 'Peak', 'Grotto', 'Marsh', 'Mist', 'Desert', 'Catacombs',
            'Fjord', 'Creeks', 'Crags', 'Islands', 'Swamps', 'Bluffs', 'Lake', 'Isle',
            'Geyser', 'Woodlands', 'Coast', 'Caverns', 'Thicket', 'Barrens', 'Graves',
            'Crypt', 'Shrine', 'Mound', 'Tomb', 'Sepulcher', 'Necropolis', 'Wastes', 'Hill',
            'Hills', 'Ridge', 'Slope', 'Dune', 'Summit', 'Cliff', 'Highlands', 'Statue',
            'Jungle', 'Wasteland', 'Labyrinth', 'Chapel', 'Maze', 'Crematory', 'Morgue',
        ];
        $clanAlfix = array_rand(array_flip($clanAlfixes), 1);

        $lastname = " of the " . $clanPrefix . " " . $clanAlfix . " clan";
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
        $thisTabaxiName = rand(1, 2);
        // if var = 1
        if ($thisTabaxiName == 1) {
            $prefixes = [
                "Cloud" => "Cloud",
                "Jade" => "Jade",
                "Smoking" => "Smoke",
                "Peak" => "Peak",
                "Swift" => "Swift",
                "Silent" => "Silent",
                "Blazing" => "Blaze",
                "Defiant" => "Fiant",
                "Poem" => "Poe",
                "Leaf" => "Leaf",
                "Kite" => "Kite",
                "Sky" => "Skye",
                "Grand" => "Grand",
                "Beauty's" => "Beau",
                "Little" => "Little",
                "Aurora" => "Ror",
                "Single" => "Sing",
                "Scratch" => "Scratch",
                "Radiant" => "Rad",
                "Star" => "Star",
                "Nimble" => "Nim",
                "Magic" => "Mag",
                "Cloaking" => "King",
                "Crimson" => "Crim",
                "Sardonyx" => "Sargon",
                "" => "",
            ];
            $prefix = array_rand($prefixes);
            $firstNamePart = $prefix;
            $this->nickname = $prefixes[$prefix];

            $middleNameParts = [
                'after the ', 'before the ', 'of a ', 'of the ', 'of ', 'in the ', 'on the ',
                '', '', '', '', '',
            ];
            $middleNamePart = array_rand(array_flip($middleNameParts), 1);

            $lastNameParts = [
                'Water', 'Wind', 'Summer', 'Winter', 'Spring', 'Autumn', 'Road', 'Mountains',
                'Mountaintop', 'Thunder', 'Sunset', 'Morning', 'Evening', 'Flock', 'Child',
                'Rain', 'Thrill', 'Whish', 'Shadows', 'Darkness', 'Light', 'Day', 'River',
                'Shadow', 'Woods', 'World', 'Lightning', 'Garden', 'Dagger', 'Opal', 'Akkad',
                'Cauldron', 'Sea', 'Moon', 'Sun',
            ];
            $lastNamePart = array_rand(array_flip($lastNameParts), 1);

            $firstname = $firstNamePart . " " . $middleNamePart . $lastNamePart;
        }

        //-----------------------------------------------------is nickname from lastname
        // if VAR == 2
        if ($thisTabaxiName == 2) {
            $firstNameParts = [
                'Two', 'Five', 'Six', 'Seven', 'Left-Handed', 'Hidden', 'Flickering',
                'Bold', 'Glow', 'Bright', 'Opal', 'Sound', 'Lost', 'Flower', 'Amusing',
                'Dangling', 'Dark', 'Flawless', 'Call of the', 'Looping', "Icy", 'Endless',
                'Sapphire', 'Malachite', 'Closed', 'Curious', 'Mumbling', 'Emerald',
                'Active',
            ];
            $firstNamePart = array_rand(array_flip($firstNameParts), 1);

            $altfixes = [
                "Berry" => "Berry",
                "Beast" => "Beast",
                "Timber" => "Timber",
                "Hummingbird" => "Bird",
                "Thundercloud" => "Thund",
                "Snakes" => "Snake",
                "Riddle" => "Riddle",
                "Angel" => "Angel",
                "Fire" => "Fire",
                "String" => "String",
                "Gates" => "Gate",
                "Tale" => "Tally",
                "Dust" => "Dusty",
                "Owl" => "Owl",
                "Glove" => "Glove",
                "Time" => "Time",
                "Lights" => "Light",
                "Bootstraps" => "Boot",
                "Coil" => "Coil",
                "Book" => "Book",
                "Shadow" => "Shade",
                "Dagger" => "Dag",
                "Zircon" => "Zirc",
                "Device" => "Dev",
                "Passion" => "Sion",
                "Fist" => "Fist",
            ];
            $altfix = array_rand($altfixes);
            $secondNamePart = $altfix;
            $this->nickname = $altfixes[$altfix];
            $firstname = $firstNamePart . " " . $secondNamePart;
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
        $nickname = $this->nickname;
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
        $description = $this->firstname . " " . $this->lastname .
            " is shortened to a one-word synopsis: "
            . $this->nickname . ". A nickname everbody 
            uses to adress this " . $dndrace->getRace() . ". ";

        return $description;
    }


    //-----------------------------------------REPLACERS

}

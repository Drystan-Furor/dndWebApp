<?php

/** 
 * Locathah Names
 */
class locathah extends Name
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
            'Kelpy', 'Chest', 'Compas', 'Lace', 'Canon', 'Canonball', 
            'Anchor', 'Chain',  'Raft', 'Oar', 'Barrel', 'Painter Ring',
            'Sail', 'Stempost', 'Rivets', 'Sternrudder', 'Knarr',
            'Coins', 'Bucket', 'Bow', 'Fishnet', 'Voyage', 'Reef',
            'Dolly', 'Adrift', 'Clinker', 'Carvel', 'Rudder', 'Mast', 'Ledger', 
            'Log', 'Debris', 'Hulc', 'Keel', 'Ceol', 'Spritsail',
            'Cog', 'Vessel', 'Ship', 'Planks', 'Rubble', 'Garboard',
            'Sternpost', 'Caravel', 'Carrack', 'Bowsprit', 'Foresail', 'Mizzen', 
            'Topsail', 'Crayer', 'Hoy', 'Picard', 'Supplies', 'Galley', 'Rowing',
            'Longship', 'Strakes', 'Wood', 'Balinger', 'Birlinn', 'Steering-oar',
            'Lapstrake', 'Hull', 'Skiff', 'Apron', 'Deadwoods', 'Transom', 
            'Coble', 'Stringer', 'Crew', 'Hook', 'Swivels', 'Crutch Plate', 
            'Dinghy', 'Fairleads', 'Square Nails', 'Rove', 'Screws', 'Scrollcase', 
            'Freeboard','Bottle', 'Chart', 'Desk','Flag', 'Skeletons',
            'Epoxy', 'tea Tray', 'Crate', 'Gauntlet', 'Map', 
            'Tools', 'Knives', 'Stamp', 'Crest', 'Saltpeter', 'Pouch', 
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
        $firstname = "";
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
        $description = $dndrace->getRace() . " name their children 
                and themselves after what they know. 
                So they began naming their children after the 
                things found in shipwrecks on the seafloor. 
                This nautical tradition has only 
                strengthened as they have had more contact 
                with land-dwelling humanoids.";

        return $description;
    }
}

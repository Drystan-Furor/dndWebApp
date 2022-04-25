<?php

/** 
 *  Lizardfolk
 *  Lizardfolk Tribe Names
 *  Tribe names are made of basic words, usually names and adjectives of 
 *  the things from Lizardfolk’s daily lives and something that can 
 *  define them as a group.
 *  Names can be both male and female.
 */

class lizardfolk extends Name
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
            'Bogstalker', 'Bogshadow', 'Deadmarsh', 'Birdhunter', 'Beastkiller',
            'Hardscale', 'Deadswamp', 'Poisondusk', 'Shadowscale', 'Longspear',
            'Swordfang', 'Spearmouth', 'Daggermaw', 'Swamprunner', 'Marshtrekker',
            'Redmountain', 'Graypond', 'Redfang', 'Ironflank', 'Stoneflesh',
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
        $firstnames = [
            'Daecheraess', 'Buthratriass', 'Ark', 'Baok', 'Trechuss', 'Vegyk',
            'Maarkitho', 'Baax', 'Iskia', 'Usli', 'Muty', 'Trurgyv', 'Naskuch',
            'Mertarrark', 'Morassuch', 'Vithotrysk', 'Taart', 'Edresk', 'Mellurt',
            'Lopy', 'Nathre', 'Erhten', 'Vithretrasj', 'Oltugnos', 'Osk', 'The',
            'Jhortaa', 'Den', 'Traocheth', 'Nepisj', 'Sitru', 'Kiguard', 'Uthragat',
            'Nudhokra', 'Dechustysj', 'Sark', 'Vir', 'Merdis', 'Eslant', 'Throtird',
            'Berdex', 'Volakrard', 'Redassirk', 'Moshitrua', 'Toxh',
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
        $description = $dndrace->getRace() . " are primitive 
        reptilian humanoids that usually 
        lurk in swamps and jungles.";

        return $description;
    }
}

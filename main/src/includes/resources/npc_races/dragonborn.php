<?php

/** 
 * Dragonborn
 * Dragonborn && Kobolds $ancestry." ".$color
 * In dragonborn we define a function that kobolds also use.
 * public static
 */
class dragonborn extends Name
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
        $dragonbornClanNames = [
            'Clethtinthiallor', 'Daardendrian', 'Delmirev', 'Drachedandion',
            'Fenkenkabradon', 'Kepeshkmolik', 'Kerrhylon', 'Kimbatuul',
            'Linxakasendalor', 'Myastan', 'Nemmonis', 'Norixius', 'Ophinshtalajiir',
            'Prexijandilin', 'Shestendeliath', 'Turnuroth', 'Verthisathurgiesh',
            'Yarjerit',
        ];
        $lastname = array_rand(array_flip($dragonbornClanNames), 1);
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
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'Arjhan', 'Balasar', 'Bharash', 'Donaar', 'Ghesh', 'Heskan', 'Kriv',
                'Medrash', 'Mehen', 'Nadarr', 'Pandjed', 'Patrin', 'Rhogar', 'Shamash',
                'Shedinn', 'Tarhun', 'Torinn',
            ];
            $firstname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Akra', 'Biri', 'Daar', 'Farideh', 'Harann', 'Havilar', 'Jheri',
                'Kava', 'Korinn', 'Mishann', 'Nala', 'Perra', 'Raiann', 'Sora',
                'Surina', 'Thava', 'Uadjit',
            ];
            $firstname = array_rand(array_flip($femalenames), 1);
        }
        $this->firstname = $firstname;
        return $firstname;

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
        $description = $dndrace . " look very much like dragons standing erect 
    in humanoid form, though " . $this->firstname .
            " lack wings or a tail. The clans ancestry 
    gives " . $this->lastname . " a " . dragonborn::ancestry() . " scale color.";

        return $description;
    }
}
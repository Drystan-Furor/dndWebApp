<?php

/** 
 * Khalashtar names are three to five syllables long 
 * and feature hard and hissing consonants. 
 */

class khalastar extends Name
{
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->lastname = self::_lastname($new_npc);
        $this->firstname = self::_firstname();
        $this->nickname = self::_nickname();
        $this->description = self::_description($dndrace, $new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname()
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
    private function _lastname($new_npc)
    {
        if ($new_npc->getGender() == 'male') {
            $malenames = [
                'harath', 'khad', 'melk', 'tash', 'kosh', 'tosh',
            ];
            $suffixname = array_rand(array_flip($malenames), 1);
            $prefixes = [
                'Hal', 'Havra', 'Kana', 'Lana', 'Lan', 'Mal', 'Min',
                'Nevi', 'Par', 'Nol', 'Mo', 'Bo', 'Bal', 'Bul-ka',
                'Do', 'Re', 'Kes',
                'Mi', 'Fa', 'Sol', 'Si', 'Do', 'He',

            ];
            $prefix = array_rand(array_flip($prefixes), 1);
            $lastname = $prefix . $suffixname;
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'kashtai', 'shana', 'tari', 'vakri', 'raulad', 'reth', 'shara', 'nari',
            ];
            $suffixname = array_rand(array_flip($femalenames), 1);
            $prefixes = [
                'Gani', 'Kha', 'La', 'Me', 'No', 'Pani', 'Sora',
                'Sho', 'Tha', 'Lo', 'Deha', 'Cozo', 'Do', 'Re',
                'Mi', 'Fa', 'Sol', 'Si', 'Do',
            ];
            $prefix = array_rand(array_flip($prefixes), 1);
            $lastname = $prefix . $suffixname;
        }
        $this->lastname = $lastname;
        return $lastname;
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
        $description = "The " . $dndrace->getRace() . " 
        are a compound race created from the union of 
        humanity and renegade spirits from the plane of 
        dreams – spirits called quori. 
        " . $dndrace->getRace() . " are often seen as wise, 
        spiritual people with great compassion for 
        others. But there is an unmistakable alien quality to "
            . $this->nickname . ", 
        as they are haunted by the conflicts of their otherworldly spirits.";


        return $description;
    }
}
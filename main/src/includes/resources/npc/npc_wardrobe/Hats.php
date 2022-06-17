<?php

/**
 * HATS
 */

class Hats
{
    /**
     * Construct a hat or no hat at all.
     * Has hat yes/no 
     * Yes -> craft hat / No -> empty string
     */
    public function __construct($heshe)
    {
        $this->hat = self::_hasHat($heshe);
    }

    /**
     * Randomize if npc has headdress
     * roll d20, if not 16-20, NPC does not wear a hat
     * 
     * @return craftHat or empty string
     */
    private function _hasHat($heshe)
    {
        $this->hat = rand(1, 20);
        if ($this->hat > 15) {
            $this->hat = "";
        } else {
            $this->hat = self::_craftHat($heshe);
        }
        return $this->hat;
    }

    /**
     * Array of materials
     * 
     * @return single value
     */
    private static function _hatMaterials()
    {
        $hattextiles = [
            "leather", "felt", "cotton", "wool", "straw", "linen", "knitted", "fur",
        ];
        $hattextile = array_rand(array_flip($hattextiles), 1);
        return $hattextile;
    }

    /**
     * Array of materials
     * 
     * @return single value
     */
    private static function _hatTypes()
    {
        $hatTypes = [
            'cap', 'hat', 'beanie', 'hood', 'fedora', 'bowler', 'sombrero', 'beret',
            'skullcap', "tam o'shanter", 'fez', 'oesjanka', 'hood',
        ];
        $hatType = array_rand(array_flip($hatTypes), 1);
        return $hatType;
    }

    /**
     * Craft a hat made of materials from arrays
     * 
     * @return crafted hats
     */
    private static function _craftHats()
    {
        $hats = [ //  wears
            "a wimple, a piece of cloth worn over the head 
            and around the face and neck",

            "a " . self::_hatMaterials() . " sugar loaf hat: a tallish, 
            conical hat that resembles an 
            inverted flower pot",

            "a " . self::_hatMaterials() . " flat mortar board type hat, 
            people associate with graduation",

            "a chaperon, a " . self::_hatMaterials() . " hood that is sewn onto a cape",

            "a " . self::_hatMaterials() . " hood grown with extra fabric and slightly 
                longer than necessary",

            "a tall " . self::_hatMaterials() . " 
            conical hat worn tilted at the back of the head",

            "a " . self::_hatMaterials() . " " . self::_hatTypes(),
        ];
        $hat = array_rand(array_flip($hats), 1);
        return $hat;
    }

    /**
     * From array of crafted hats, and passed nouns, built
     * a sentence
     * 
     * @param $heshe = noun
     * 
     * @return string
     */
    private static function _craftHat($heshe)
    {
        $hat = ucfirst($heshe) . " is wearing " .
            self::_craftHats() . ". ";

        return $hat;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getHat()
    {
        return $this->hat;
    }
}

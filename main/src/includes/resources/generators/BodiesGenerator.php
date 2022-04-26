<?php

/**
 * How is the NPC build? DEFAULTS
 */
class BodiesGenerator
{

    /**
     * Bodybuilder ;P
     * 
     * @param $dndrace object Race
     * @param $new_npc object Gender
     */
    public function __construct($dndrace, $new_npc)
    {
        $this->bodyType = self::_bodyType($dndrace, $new_npc);
        $this->bodyShape = self::_bodyShape($dndrace, $new_npc);
        $this->bodySize = self::_bodySize($dndrace, $new_npc);
        $this->body = self::_bodyBuilder($new_npc);
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function bodyTypeDefault()
    {
        //-----------------------------------------------------bodytypes
        $bodytypes = [
            "long and lean", "fat", "bulky", "muscular", "slender",
            "quite overweight", "with a delicate frame",
            "similar to a marathon runner", "stocky", "muscular, but also a bit fat",
            "obese", "athletic", "well defined muscled", "positivly ripped",
            "as broad as the side of a barn",
        ];
        $bodytype = array_rand(array_flip($bodytypes), 1);
        return $bodytype;
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function bodyShapeDefault()
    {
        //------------------------------------------------------bodyshape
        $bodyshapes = [ //with 
            "narrow shoulders and a narrow bust",
            "slim arms and a fairly defined waist",
            "hips larger than the bust", "a shelf-like appearance",
            "hips and bust that are nearly equal in size", "a well-defined waist",
            "large shoulders and a large bust",
            "a little more weight in the upper legs",
            "shoulder and hip measurements that are about the same",
        ];
        $bodyshape = array_rand(array_flip($bodyshapes), 1);
        return $bodyshape;
    }

    /**
     * Array
     * 
     * @return string
     */
    public static function bodySizeDefault()
    {

        //------------------------------------------------------bodysize COMMON
        $bodysizes = [
            "small", "quite small", "very small", "really small",
            "slightly smaller", "rather small", "reasonably small",
            "tiny",

            "medium sized", "middle sized", "sort of typical sized", "common sized",
            "characteristically sized", "naturally common sized", "typical",
            "more or less standard sized", "moderately sized",

            "large", "quite large", "very large", "really large",
            "slightly larger", "reasonably large", "tall",
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }

    /**
     * Gather from array, build sentence 
     * 
     * @param $new_npc well of nouns
     * 
     * @return this body
     */
    private function _bodyBuilder($new_npc)
    {
        //--- nouns
        $manWoman = $new_npc->getManWoman();
        $heshe = $new_npc->getHeShe();
        $hisher = $new_npc->getHisHer();
        $gender = $new_npc->getGender();


        $this->body = "Built " . $this->bodyType . ", " //type
            . $heshe . " has a " . $gender . " body with " .
            $this->bodyShape; //shape

        return $this->body;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getBodyShape()
    {
        return $this->bodyShape;
    }

    /**
     * Getter
     * 
     * @return self::_bodySize
     */
    public function getBodySize()
    {
        return $this->bodySize;
    }


    /**
     * Getter
     * 
     * @return this object
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * @param $new_npc the male/female nouns
     * 
     * @return bodysize bodySize
     */
    private function _bodySize($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'bodySizeReplacer') == true) {
            $this->bodySize = strtolower($dndrace)::bodySizeReplacer($dndrace, $new_npc);
        } else if (strpos($dndrace, 'Gnome')) {
            $this->bodySize = gnome::bodySizeReplacer($dndrace, $new_npc);
        } else {
            $this->bodySize = self::bodySizeDefault();
        }
        return $this->bodySize;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * @param $new_npc the male/female nouns
     * 
     * @return bodyType bodySize
     */
    private function _bodyType($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'bodyTypeReplacer') == true) {
            $this->bodySize = strtolower($dndrace)::bodyTypeReplacer($dndrace, $new_npc);
        } else {
            $this->bodySize = self::bodySizeDefault();
        }
        return $this->bodySize;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * @param $new_npc the male/female nouns
     * 
     * @return bodyShape bodySize
     */
    private function _bodyShape($dndrace, $new_npc)
    {
        if (method_exists(strtolower($dndrace), 'bodyShapeReplacer') == true) {
            $this->bodySize = strtolower($dndrace)::bodyShapeReplacer($dndrace, $new_npc);
        } else {
            $this->bodySize = self::bodySizeDefault();
        }
        return $this->bodySize;
    }
}

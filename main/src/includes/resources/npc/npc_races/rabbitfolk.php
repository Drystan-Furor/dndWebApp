<?php

/** 
 * Rabbitfolk Names
 */
class rabbitfolk extends Name
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
        $RabbitFamilyNames1 = [
            'Brush', 'Good', 'Green', 'High-', 'Hill',
            'Lea', 'Tea', 'Thorn', 'Toss', 'Under',
        ];
        $lastname1 = array_rand(array_flip($RabbitFamilyNames1), 1);

        $RabbitFamilyNames2 = [
            'gather', 'barrel', 'bottle', 'hill', 'topple',
            'gallow', 'leaf', 'gage', 'cobble', 'bough',
        ];
        $lastname2 = array_rand(array_flip($RabbitFamilyNames2), 1);

        while ($lastname1 == 'Hill' && $lastname2 == 'hill') {
            $lastname2 = array_rand(array_flip($RabbitFamilyNames2), 1);
        } //------------------------prevent Hillhill

        $lastname = $lastname1 . $lastname2;
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
            $RabbitMaleNames1 = [
                'Al', 'An', 'Ca', 'Cor', 'El',
                'Er', 'Fin', 'Gar', 'Lin', 'Ly', 'Mer',
                'Mi', 'Os', 'Per', 'Re', 'Ro', 'Wel',
            ];
            $firstname1 = array_rand(array_flip($RabbitMaleNames1), 1);

            $RabbitMaleNames2 = [
                'ton', 'der', 'de', 'rin', 'don',
                'rich', 'nan', 'ret', 'dal', 'le', 'ric',
                'lo', 'born', 'rin', 'ed', 'scoe', 'lby',
            ];
            $firstname2 = array_rand(array_flip($RabbitMaleNames2), 1);

            $firstname = $firstname1 . $firstname2;
        }

        if ($new_npc->getGender() == 'female') {
            $halflingFemaleNames1 = [
                'An', 'Ca', 'Co', 'Euphe',
                'Ji', 'Ki', 'La', 'Li', 'Mer',
                'Ne', 'Pae', 'Por', 'Sera', 'Shae',
                'Va', 'Ver', 'Re',
            ];
            $firstname1 = array_rand(array_flip($halflingFemaleNames1), 1);

            $halflingFemaleNames2 = [
                'dry', 'llie', 'ra', 'mia',
                'llian', 'thri', 'vinia', 'dda', 'la',
                'dda', 'la', 'tia', 'phina', 'na',
                'ni', 'na',
            ];
            $firstname2 = array_rand(array_flip($halflingFemaleNames2), 1);

            $firstname = $firstname1 . $firstname2;
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
        $description = $dndrace->getRace() .
            " are naturally drawn to people.";

        return $description;
    }


    //-----------------------------------------REPLACERS

    /**
     * Array of replacer
     * 
     * @return Bodysize replacer
     */
    public static function bodySizeReplacer()
    {
        $bodysizes = [
            "very small", "quite small", "small", "small sized",
            "rather tiny", "below middle sized", "really small",
            "slightly smaller", "rather small", "reasonably small",
            "tiny", "characteristically tiny sized", "naturally small sized",
        ];
        $bodysize = array_rand(array_flip($bodysizes), 1);
        return $bodysize;
    }
}

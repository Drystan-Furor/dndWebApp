<?php

/** 
 * Owlfolk Names
 */
class owlfolk extends Name
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
        $this->firstname = self::_firstname($new_npc);
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
        $firstname = "";
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
                'Beak', 'Head', 'Iris', 'Pupil', 'Mantle', 'Scapulars', 'Tertials',
                'Rump', 'Thigh', 'Tibio', 'Tarsus', 'Tibia', 'Eyestripe', 'Wattle',
                'Gizzard', 'Oblique', 'Plume', 'Talon', 'Tuft', 'Plumage',
                'Claws', 'Wings', 'Ruffage', 'Wingspan', 'Mandible', 'Quill',
                'Scutes', 'Cancella', 'Scutella', 'Vision', 'Syrinx',
            ];
            $lastname = array_rand(array_flip($malenames), 1);
        }

        if ($new_npc->getGender() == 'female') {
            $femalenames = [
                'Glide', 'Soar', 'Avian', 'Bewilder', 'Dive', 'Endeavor', 'Gust', 'Screech',
                'Sing', 'Soar', 'Whet', 'Descend', 'Drift', 'Tilt', 'Float', 'Fly', 'Glissade',
                'Baffle', 'Daze', 'Fluster', 'Mystify', 'Aspire', 'Assay', 'Venture', 'Squall',
                'Paroxysm', 'Chant', 'Hum', 'Serenade', 'Hymn', 'Cantillate',
            ];
            $lastname = array_rand(array_flip($femalenames), 1);
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
        $description = "Distant kin of giant owls, this "
            . $dndrace->getRace() . " is quite humanoid.";

        return $description;
    }


    //-----------------------------------------REPLACERS
    /**
     * Birds have beaks, not nose
     * 
     * @return Nose replacer
     */
    public static function noseReplacer()
    {
        $nose = rand(1, 100);
        switch ($nose) {
            case $nose >= 1 && $nose <= 24:
                $nose = 'a very generalist, prominent big beak';
                break;
            case $nose >= 25 && $nose <= 38:
                $nose = 'a scything upturned beak, small in width but quite long';
                break;
            case $nose >= 39 && $nose <= 47:
                $nose = 'an eagles beak, quite raptorial. With a strong sloping curve that
             prominently protrudes from the face';
                break;
            case $nose >= 48 && $nose <= 56:
                $outlines = [
                    "insect catching", "grain eating", "Coniferous seed eating",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a snub beak that is common with ' . $outline .
                    ' birds';
                break;
            case $nose >= 57 && $nose <= 64:
                $nose = 'a very long and sharp beak, thin and pointy, small in height but quite flat, 
            common with aerial fishing birds';
                break;
            case $nose >= 65 && $nose <= 68:
                $nose = 'a "Hawk" beak that has similarities with the curved 
            beaks of eagles and other predatory birds. It has a dramatic arched 
            shape';
                break;
            case $nose >= 69 && $nose <= 76:
                $nose = 'a perfectly straight beak. 
            It gives this birdfolk an aggresive profile since 
            it is usually seen on scavenging birds';
                break;
            case $nose >= 77 && $nose <= 84:
                $nose = 'a dip netting beak, rather big, with a very prominent 
            bottom mandible, like pelicans normally have';
                break;
            case $nose >= 85 && $nose <= 91:
                $outlines = [
                    "filter feeding", "pursuit fishing", "chiseling",
                ];
                $outline = array_rand(array_flip($outlines), 1);
                $nose = 'a thin and flat shaped beak with a short tip, 
            typical for ' . $outline;
                break;
            case $nose >= 92 && $nose <= 100:
                $nose = "a bulbous beak, it has a a swollen, disproportionate nasal tip,
            almost like it's too big. Imagine something like a fruit eating toucan";
                break;
        }
        return $nose;
    }




    /**
     * Array of beaks
     * 
     * @return mouth replacer
     */
    public static function mouthReplacer()
    {
        $mouthshapes = [
            "sharp tomia", "rounded tomia", "bow shaped tomia", "heavy lower tomia",
            "ridged tomia", "heavy upper tomia", "sawtooth serated tomia", "thin tomia",
            "downward turned tomia", "perfectly proportioned tomia",
        ];
        $mouth = array_rand(array_flip($mouthshapes), 1);
        return $mouth;
    }

    /**
     * Array of beaks
     * 
     * @return chin replacer
     */
    public static function chinReplacer()
    {
        $chincurves = [
            'pointy', 'round', 'square',
        ];
        $chincurve = array_rand(array_flip($chincurves), 1);

        $chinshapes = [
            'a rather ', 'quite the', 'a very defined', 'a puffed',
            'a very protruding', 'a bulbous', 'a very small', 'a bit of a',
        ];
        $chinshape = array_rand(array_flip($chinshapes), 1);

        $chin = $chinshape . " " . $chincurve . " culmen";

        return $chin;
    }

    /**
     * Array of beaks
     * 
     * @return teeth replacer
     */
    public static function teethReplacer()
    {
        $teethTypes = [
            'shiny white', 'yellow', 'quite large',
            'rather small', 'yellow and grey', 'crooked',
            'lead', 'tin', 'copper', 'steel', 'cast-iron',
            'iron', 'metal',
        ];
        $teethType = array_rand(array_flip($teethTypes), 1);

        $dentalwork = [
            "has a " . MaterialGenerator::getMetalType() . " beak",
            "has a hard horny tissue at the tip of the beak",
            "has a " . $teethType . " shield-shaped structure on the tip of it's beak",
            "has a " . $teethType . " shield-shaped structure on it's beak tip, 
            which spans the entire width of the beak",
            "has a " . $teethType . " shield-shaped structure on it's beak, 
            which is bent at the tip to form a hook",
            "has a " . $teethType . " shield-shaped structure on it's beak tip, 
            which spans the entire width of the beak and bent at the tip to form a hook",
            "has a fake beak, like a prosthetic made of " . VerbsGenerator::quality() . " "
                . MaterialGenerator::getMetalType(),
        ];
        $teeth = array_rand(array_flip($dentalwork), 1);

        return $teeth;
    }
}

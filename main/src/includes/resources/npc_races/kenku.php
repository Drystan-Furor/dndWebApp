<?php

/**
 *  As proficient voice mimics, Kenku can impersonate other creatures, 
 *  animals, and even nature sounds. It is a common thing to name them 
 *  after the sounds they do, 
 *  often resulting in fairly interesting names. When asked who they are, 
 *  a Kenku may introduce himself with clicking sounds and thus be known as Clicker, 
 *  while the enemies might mock him by calling him “Dolphin Noise”.
 */
class kenku extends Name
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
        $this->firstname = self::_firstname($dndrace, $new_npc);
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
            'Rabbit Scream' => "screaming rabbit",
            'Hammer Clank' => "clanking hammer",
            'Dog Wiggle' => "wiggeling dogtail",
            'Steel Clank' => "clanking of steel",
            'Lute String' => "strumming lute",
            'Book Slam' => "slamming of a book",
            'Leather Flick'  => "leather flicking",
            'Grain Trash'  => "hay bail",
            'Hide Smack' => "smacking of hides",
            'Snake Slither' => "slithering snake",
            'Chisel Carve' => "stonecutting",
            'Hoe Scrape' => "ground scraping",
            'Parrot Squawk' => "squaking parrot",
            'Jackal Call' => "howling Jackal",
            'Owl Call' => "owl coo",
            'Falcon Swoop' => "swooping bird",
            'Grain Mill' => "flour milling",
            'Chimer' => "chiming",
            'Duck Rustle' => "rustling duck",
            'Paint Stroke' => "painting paintbrush",
            'Kettle Bubble' => "water cooking",
            'Plunger' => "clogging",
            'Mouse Rustle' => "scurrying mouse",
            'Bell Drop' => "dropping town-bell",
            'Carver' => "wood carving",
            'Cobbler' => "sewing",
            'Dog Yelp' => "barking dog",
            'Crate Smash' => "crate being smashed",
            'Hatchet Drop' => "lumber chopping",
            'Stomper' => "thumping",
            'Fryer' => "flesh sizzling",
            'Parrot Call' => "squaking parrot",
            'Badger Run' => "rustling of a small animal",
            'Sheep Baa' => "bleating sheep",
            'Alligator Roar' => "roaring Lizardfolk",
            'Fox Yelp' => "howling fox",
            'Bee Buzzing' => "beehive",
            'Stampede' => "stampeding horses",
            'Coyote Yelp' => "crying coyote",
            'Horse Snort' => "snorting horse",
            'Tree Fall' => "falling tree",
            'Mallet Smash' => "slamming wooden hammer",
            'Potion Crash' => "bottle breaking",
        ];
        //$lastname = array_rand(array_flip($surnames), 1);
        /*
        ARRAY = [
            1 => 2
        ];
        $randomVAR = array_rand(ARRAY);
        1 = $randomVAR
        2 = ARRAY[$randomVAR]
        */
        $lastname = array_rand($surnames);
        $sounding = $surnames[$lastname];
        $this->lastname = $lastname;
        $this->sounding = $sounding;
        return $lastname;
    }

    /**
     * Array
     * 
     * @return string
     */
    private function _firstname($dndrace, $new_npc)
    {
        $firstname = "a " . $dndrace->getRace() . ", 
        when asked for it's name the " . $dndrace->getRace() . " makes a *" .
            $this->sounding . "* sound, hence " . $new_npc->getHeShe() . " is known as ";

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
        $nicknames = [
            'Prodder', 'Clanger', 'Rustler', 'Knocker',
            'Tweeter', 'Snaker', 'Mimer', 'Piercer',
            'Drummer', 'Exploder', 'Smasher', 'Pigeoner',
            'Braker', 'Sifter', 'Roarer', 'Spitter', 'Giggler',
            'Clicker', 'Puffer', 'Roaster', 'Lugger', 'Burner',
            'Buzzer', 'Clogger', 'Howler', 'Sizzler', 'Mimicry',
        ];
        $nickname = array_rand(array_flip($nicknames), 1);
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
        $description = $this->lastname . " is called " . $this->nickname .
            " around here, because of the sounds "
            . $new_npc->getHeShe() . " mimics. ";

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

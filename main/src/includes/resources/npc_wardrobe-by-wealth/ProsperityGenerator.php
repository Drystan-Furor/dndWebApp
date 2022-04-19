<?php
/**
 * Rng how wealthy one is
 */
class ProsperityGenerator
{

    /**
     * Construct outfit and a sentence
     */
    public function __construct($heshe, $npcClass, $dndrace)
    {
        $this->Class_outfit = self::_rngOutfit($heshe, $npcClass, $dndrace);
        $this->outfit = self::getOutfit();
        $this->intro = self::getIntro();
    }

    /**
     * Randomize npc wellfare to dress accordingly
     * 
     * @param $wealth is D100
     * 
     * @return outfit
     */
    private function _rngOutfit($heshe, $npcClass, $dndrace)
    {
        $wealth = rand(1, 100);

        switch ($wealth) {
            case $wealth >= 1 && $wealth <= 15: //15% homeless
                $outfit = new Beggar($heshe, $npcClass, $dndrace);
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
            case $wealth >= 16 && $wealth <= 40: //24% poor
                $outfit = new Poor($heshe, $npcClass, $dndrace);
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
            case $wealth >= 41 && $wealth <= 70: //29% moderate
                $outfit = new Prosperous($heshe, $npcClass, $dndrace); // MODERATE
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
            case $wealth >= 71 && $wealth <= 89: //18% rich
                $outfit = new Rich($heshe, $npcClass, $dndrace); //RICH
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
            case $wealth >= 90 && $wealth <= 100: //10% noble
                $outfit = new Loaded($heshe, $npcClass, $dndrace); // FILTHY RICH
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
            default:
                $outfit = new Poor($heshe, $npcClass, $dndrace);
                $this->outfit = $outfit->getOutfit();
                $this->intro = $outfit->getIntro();
                break;
        }
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getOutfit()
    {
        return $this->outfit;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getIntro()
    {
        return $this->intro;
    }
}

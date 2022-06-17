<?php

/** 
 * Characteristics and Face Detail Generator
 * eyes
 * nose
 * mouth
 * teeth
 * chin
 * 
 * $new_profile = new ProfileGenerator();
 * $new_profile->getEyes(); etc.
 * 
 * @category Generators
 * @package  Profile
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class ProfileGenerator
{
    /**
     * Constructor
     * 
     * @param $dndrace string race
     * @param $new_npc Gender male/female nouns
     * @param $class   NpcClass class
     */
    public function __construct($dndrace, $new_npc, $class)
    {
        $this->face = self::_facialConstruction($dndrace, $new_npc, $class);
    }



    /**
     * Getter
     * 
     * @return string object
     */
    public function getChin()
    {
        return $this->chin;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getMouth()
    {
        return $this->mouth;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getNose()
    {
        return $this->nose;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getTeeth()
    {
        return $this->teeth;
    }

    /**
     * Getter
     * 
     * @return string object
     */
    public function getFace()
    {
        return $this->face;
    }


    /**
     * Facial Construction
     * 
     * @param $dndrace string race
     * @param $new_npc Gender male/female nouns
     * @param $class   NpcClass class
     * 
     * @return string
     */
    private function _facialConstruction($dndrace, $new_npc, $class)
    {
        //--- nouns
        $manWoman = $new_npc->getManWoman();
        $heshe = $new_npc->getHeShe();
        $hisher = $new_npc->getHisHer();
        $gender = $new_npc->getGender();

        $eyes = new Eyes($dndrace, $new_npc);
        $this->eyes = $eyes->getEyes();

        $nose = new Nose($dndrace, $new_npc);
        $this->nose = $nose->getNose();

        $mouth = new Mouth($dndrace, $new_npc);
        $this->mouth = $mouth->getMouth();

        $teeth = new Teeth($dndrace, $new_npc);
        $this->teeth = $teeth->getTeeth();

        $chin = new Chin($dndrace, $new_npc);
        $this->chin = $chin->getChin();

        //---- see face
        $face =  " You " . VerbsGenerator::getObservation() .
            " this " . $manWoman . " has " . $this->nose . //see nose

            ". The " . $class . " meets your gaze with " .
            $this->eyes . ". " . // see eyes

            "As you seize up the " . $manWoman . ", you " .
            VerbsGenerator::getObservation() . " " . $heshe . " has " .
            $this->chin . //see chin
            " and " . $hisher . " mouth is set with " .
            $this->mouth . ". " . //see mouth

            "When the " . $dndrace . " is talking or shouting, you "
            . VerbsGenerator::getObservation() . " " . $heshe .
            " " . $this->teeth; //see teeth

        return $face;
    }
}
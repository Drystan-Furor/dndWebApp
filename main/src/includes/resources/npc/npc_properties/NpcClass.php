<?php
/**
 * DND Classes
 * 
 * @category Generators
 * @package  Properties
 * @author   Tristan Arts <ArtsTristan@gmail.com>
 * @license  tristan 
 * @link     https://drystan-furor.github.io/Portfolio/
 */
class NpcClass
{

    /**
     * Get 1 random class
     */
    public function __construct()
    {
        $this->Class_npcClass = self::generateClass();
    }

    //-----------------CLASSES
    /**
     * Array of Classes
     * 
     * @return class
     */
    public function generateClass()
    {
        $npcClasses = [
            'Barbarian', 'Bard', 'Cleric', 'Druid', 'Fighter', 'Monk',
            'Paladin', 'Ranger', 'Rogue', 'Sorcerer', 'Warlock', 'Wizard',
        ];
        $this->npcClass = array_rand(array_flip($npcClasses));
        return $this->npcClass;
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getNpcClass()
    {
        return $this->npcClass;
    }
}

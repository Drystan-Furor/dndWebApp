<?php

/**
 * AGE Script
 */
class Age extends Race
{

    /**
     * VAR applies to all, SWITCH specifies ON $dndrace
     */
    public function __construct($dndrace)
    {
        $this->Class_age = self::_defineAge($dndrace);
        //construct default
    }

    /**
     * Setter
     * 
     * @param $age is a number
     * 
     * @return this object
     */
    public function setAge($age)
    {
        $this->age = $age;
        //Setter Function 
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getAge()
    {
        return $this->age;
        //Get the set age
    }

    /**
     * Getter/Setter
     * 
     * @return this object
     */
    public static function defaultAge($dndrace)
    {
        $age = self::defineDefaultAge($dndrace);
        return $age;
        //Get the set age
    }

    /** 
     * Age Selector IF race != human aging 
     * 
     * @param $dndrace this race
     * 
     * @return specific age
     */
    public static function defineDefaultAge($dndrace)
    {
        switch ($dndrace) {
            case $dndrace == "Elf":
                $age = rand(14, 750);
                break;
            case $dndrace == "Kenku" || $dndrace == "Lizardfolk" ||
                $dndrace == "Tabaxi" || $dndrace == "Goblin":
                $age = rand(14, 60);
                break;
            case $dndrace == "Dwarf" || $dndrace == "Firbolg":
                $age = rand(14, 350);
                break;
            case $dndrace == "Human"
                || $dndrace == "Yuan Ti Pureblood" || $dndrace == "Goliath":
                $age = rand(14, 90);
                break;
            case $dndrace == "Tiefling"
                || $dndrace == "Gith" || $dndrace == "Changeling":
                $age = rand(14, 100);
                break;
            case $dndrace == "Aarakocra" || $dndrace == "Warforged":
                $age = rand(3, 30);
                break;
            case $dndrace == "Tortle" || $dndrace == "Orc":
                $age = rand(12, 50);
                break;
            case $dndrace == "Aasimar":
                $age = rand(14, 160);
                break;
            case $dndrace == "Kobold" || $dndrace == "Genasi":
                $age = rand(14, 120);
                break;
            case $dndrace == "Halfling" || $dndrace == "Verdan":
                $age = rand(14, 250);
                break;
            case $dndrace == "Orc of Exandria"
                || $dndrace == "Orc of Ebberon"
                || $dndrace == "Half Orc":
                $age = rand(14, 75);
                break;
            case $dndrace == "Gnome" || $dndrace == "Loxodon":
                $age = rand(14, 425);
                break;
            case $dndrace == "Vedalkan":
                $age = rand(14, 500);
                break;
            default:
                $age = rand(14, 80); // age is always 14 - 80 not dependend on $race
                break;
                return $age;
        }
        return $age;
    }

    /**
     * Build or choose specific arrray. Select random value string
     * 
     * @param $dndrace this race
     * 
     * @return Age
     */
    private function _defineAge($dndrace)
    {
        if (method_exists(strtolower($dndrace), 'ageReplacer') == true) {
            $this->age = strtolower($dndrace)::ageReplacer($dndrace);
        } else {
            $this->age = self::defineDefaultAge($dndrace);
        }
    }
}

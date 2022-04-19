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
     * Age Selector IF race != human aging 
     * 
     * @return specific age
     */
    private function _defineAge($dndrace)
    {
        switch ($dndrace) {
            case $dndrace == "Elf":
                $this->age = rand(14, 750);
                break;
            case $dndrace == "Kenku" || $dndrace == "Lizardfolk" ||
                $dndrace == "Tabaxi" || $dndrace == "Goblin":
                $this->age = rand(14, 60);
                break;
            case $dndrace == "Dwarf" || $dndrace == "Firbolg":
                $this->age = rand(14, 350);
                break;
            case $dndrace == "Human" 
            || $dndrace == "Yuan Ti Pureblood" || $dndrace == "Goliath":
                $this->age = rand(14, 90);
                break;
            case $dndrace == "Tiefling" 
            || $dndrace == "Gith" || $dndrace == "Changeling":
                $this->age = rand(14, 100);
                break;
            case $dndrace == "Aarakocra" || $dndrace == "Warforged":
                $this->age = rand(3, 30);
                break;
            case $dndrace == "Tortle" || $dndrace == "Orc":
                $this->age = rand(12, 50);
                break;
            case $dndrace == "Aasimar":
                $this->age = rand(14, 160);
                break;
            case $dndrace == "Kobold" || $dndrace == "Genasi":
                $this->age = rand(14, 120);
                break;
            case $dndrace == "Halfling" || $dndrace == "Verdan":
                $this->age = rand(14, 250);
                break;
            case $dndrace == "Orc of Exandria" 
            || $dndrace == "Orc of Ebberon" 
            || $dndrace == "Half Orc":
                $this->age = rand(14, 75);
                break;
            case $dndrace == "Gnome" || $dndrace == "Loxodon":
                $this->age = rand(14, 425);
                break;
            case $dndrace == "Vedalkan":
                $this->age = rand(14, 500);
                break;
            default:
                $this->age = rand(14, 80); // age is always 14 - 80 not dependend on $race
                break;
                return $this->age;
        }
    }
}

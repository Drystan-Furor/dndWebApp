<?php
/**
 * $this->homebrew [BOOLEAN]
 * [true] IF [$race != in array]
 * 
 * Homebrew is when a race does not exist in the given array, 
 * which means the user gives input.
 * Basically Homebrew means to use any given string from FORM
 * check if FORM_String is not in raceArray()
 * tell us if we have a brand new race.
 * 
 * Why? any user input should be valid for home creation, 
 * but if a race does exist use properties of those races.
 */
class Homebrew
{
    /**
     * a Boolean check to know if Race exists in array or not
     */
    private function __construct()
    {
        $this->homebrew = false;
        $this->homebrew = self::setHomebrew();
    }

    //------------------------------------------------------homebrew
    /** 
     * Local race variable is readline on page, 
     * allows Homebrew // && $race != 'Drow' 
     * clean that input
     * ALL OF THE WORDS (caps to lower)
     * Of -> of
     * The -> the
     * Not all of the Words (In case of Yuan"-ti", we restore to Yuan-Ti)
     * 
     * @return input ELSE random value
     */
    public static function setHomebrew()
    {
        if (array_key_exists('setcommonrace', $_POST) //is button clicked
            && !$_POST['commonrace'] == "" // is it not empty string
            && !ctype_space($_POST['commonrace']) // is it NOT white spacing
            && !((bool)$_POST['commonrace'] == null) // does it exist?
        ) {
            $dndrace = EscapeString::from_Input(($_POST['commonrace']));//clean it
            $dndrace = ucwords(strtolower($dndrace)); 
            $dndrace = ucfirst(str_replace("Of", "of", $dndrace)); 
            $dndrace = ucfirst(str_replace("The", "the", $dndrace)); 
            $dndrace = ucfirst(str_replace("Yuan-ti", "Yuan-Ti", $dndrace)); 
        } else {
            $dndrace = Race::randomRace();
        }
        return $dndrace; 
    }

    /**
     * Getter
     * 
     * @return this object
     */
    public function getHomebrew()
    {
        return $this->homebrew;
    }

    /**
     * Check if given race actually exists in Array,
     * If not, then it is a Homebrew Race
     *               
     * @param $dndrace   string of race name
     * @param $raceArray array of races + drow
     * 
     * @return boolean
     */
    public static function isHomebrew($dndrace, $raceArray)
    {
        if (!in_array($dndrace, $raceArray)
        && !strpos($dndrace, 'Genasi')
        && !strpos($dndrace, 'Gnome')
        && !strpos($dndrace, 'Human')
        && !str_contains($dndrace, 'Elf')
        && !str_starts_with($dndrace, 'Gith')
        && $dndrace !== "Fallen Aasimar"
        ) {
            return true; 
        } else {
            return false;
        }
    }

    /**
     * Pass a var based on boolean
     * var used to show value on page
     * value only if homebrew is true 
     *      HARD CODED EXCEPTIONS
     * This is required only for the echo.
     * IF not hard coded include the dynamic racename
     * will no longer serve a function.
     * Through the exceptions given here, subclasses are not recognized as 
     * a HOMEBREW. Subclasses exist only in certain instances and are not part of raceArray.
     * the raceArray is echo'd so we o not push these to race array.
     * 
     * 'Githyanki', 'Githzerai', 'Githvyrik'
     * Half-Elf
     * 
     * @param $dndrace   string of race name
     * @param $raceArray array of races + drow
     * 
     * @return string
     */
    public static function echoHomebrew($dndrace, $raceArray)
    {
        if (self::isHomebrew($dndrace, $raceArray) == true
        && !strpos($dndrace, 'Genasi')
        && !strpos($dndrace, 'Gnome')
        && !strpos($dndrace, 'Human')
        && !str_contains($dndrace, 'Elf')
        && !str_starts_with($dndrace, 'Gith')
        && $dndrace !== "Fallen Aasimar"
        ) {
            $homebrewed = "HOMEBREW";
        } else {
            $homebrewed = "";
        }
        return $homebrewed;
    }
}
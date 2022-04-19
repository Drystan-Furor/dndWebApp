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
     * @return UserInputRace
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
     * @param $dndrace string of race name
     * 
     * @return boolean
     */
    public static function isHomebrew($dndrace)
    {
        if (!in_array($dndrace, Race::raceArray())) {
            return true; 
        } else {
            return false;
        }
    }

    /**
     * Pass a var based on boolean
     * var used to show value on page
     * value only if homebrew is true 
     * 
     * @param $dndrace this race
     * 
     * @return string
     */
    public static function echoHomebrew($dndrace)
    {
        if (self::isHomebrew($dndrace) == true) {
            $homebrewed = "HOMEBREW";
        } else {
            $homebrewed = "";
        }
        return $homebrewed;
    }
}

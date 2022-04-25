<?php
/**
 *  Orc of Exandria SEE ORC 
 */

class orcofexandria extends Name
{

    /**
    THIS USES ORC
     */
    /**
     * Biography
     * 
     * @param $dndrace string
     * @param $new_npc string
     */
    public function __construct($dndrace, $new_npc)
    {
        $biography = new orc($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->firstname = $biography->getFirstname();
        $this->nickname = $biography->getNickname();
        $this->description = $biography->getDescription($dndrace, $new_npc);
    }
}
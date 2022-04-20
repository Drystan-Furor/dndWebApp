<?php


class feraltiefling extends Name
{
    public function __construct($dndrace, $new_npc)
    {
        $biography = new Tiefling($dndrace, $new_npc);
        $this->lastname = $biography->getLastname();
        $this->firstname = $biography->getFirstname();
        $this->nickname = $biography->getNickname();
        $this->description = $biography->getDescription($dndrace, $new_npc);
    }

}
<?php

class racenameplaceholder extends Race
{
    private $x;
    private $y;
    private $a;

    private function __construct()
    {
        $this->lastname = self::lastname();
        $this->firstname = self::lastname();
        $this->nickname = self::lastname();
    }

    private function lastname()
    {
        return $lastname;
    }

    private function firstname()
    {
        return $firstname;
    }

    private function nickname()
    {
        return $nickname;
    }


}
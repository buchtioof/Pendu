<?php

class MotsDico
{
    private $mots=[];
    function __construct($filename)
    {
        $this->mots = file($filename);
    }

    function getMot($randomNumber)
    {
        if ($randomNumber >= 0 && $randomNumber < count($this->mots)) {
            return $this->mots[$randomNumber];
        } else {
            return "Le mot n'existe pas.";
        }
    }
}
?>
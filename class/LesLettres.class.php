<?php
class LesLettres
{
    function __toString()
    {
        $return = "";
        for ($i = ord("A"); $i <= ord("M"); $i++)
        {
            $return .= chr($i). " ";
        }
        $return .= "<br/>";
        for ($i = ord("N"); $i <= ord("Z"); $i++)
        {
            $return .= chr($i). " ";
        }
        return $return;
    }
}
?>
<?php
class Rien
{
    function __construct()
    {
	echo "Dans le constructeur de Rien<br/>";
    }
    function __toString()
    {
	return "Je suis dans la méthode __toString de Rien.<br/>";
    }
}
?>
<?php
class RienOuPresque extends Rien
{
    function __construct()
    { 
      parent::__construct();
      echo "fin de la construction RienOuPresque.class.php<br/>";
    }
    function __toString()
    {
	return "ici PresqueRien, à voir...<br/>";
    }
}
?>
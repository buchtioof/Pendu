<?php
class Memoire
{
    private $aux;
    
    public function __construct($valDepart=0)
    {
	$this->setAux($valDepart);
    }
    
    public function setAux($val)
    {
	$this->aux=$val;
    }
    public function getAux()
    {
	return $this->aux;
    }
    
    public function inc()
    {
	$this->setAux($this->getAux()+1);
    }
    public function dec()
    {
	$this->setAux($this->getAux()-1);
    }
}

?>


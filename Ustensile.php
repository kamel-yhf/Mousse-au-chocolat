<?php
class Ustensile
{
  private $name;
  private $utility;
  private $materiaux;
  
//le constructeur
  public function __construct($name, $utility, $materiaux)
  {
    $this->setName($name);
    $this->setUtility($utility);
    $this->setMateriaux($materiaux);
  }

//getter et setter
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getUtility()
  {
    return $this->utility;
  }
  public function setUtility($utility)
  {
    $this->utility = $utility;
  }

  public function getMateriaux()
  {
      return $this->materiaux;
  }
  public function setMateriaux($materiaux)
  {
    $this->materiaux = $materiaux;
  }
  
}
/*
$outils = new Ustensile('bol', 'contenir', 'bois');
echo $outils->getName() . ' ' . $outils->getUtility() . ' ' . $outils->getMateriaux();
*/

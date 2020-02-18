<?php
class Appareil
{
  private $name;
  private $utility;
  
//le constructeur
  public function __construct($name, $utility)
  {
    $this->setName($name);
    $this->setUtility($utility);
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
  
}
/*
$outils = new Appareil('frigo', 'refroidir');
echo $outils->getName() . ' ' . $outils->getUtility();
*/

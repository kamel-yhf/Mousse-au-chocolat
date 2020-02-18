<?php
class Ingredient
{
  private $name;
  private $quantity;
  private $mesure;
  
//le constructeur
  public function __construct($name, $quantity, $mesure)
  {
    $this->setName($name);
    $this->setQuantity($quantity);
    $this->setMesure($mesure);
  }

//getter et setter
  public function getName()
  {
    return $this->nom;
  }
  public function setName($name)
  {
    $this->nom = $name;
  }

  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }

  public function getMesure()
  {
    return $this->mesure;
  }
  public function setMesure($mesure)
  {
    $this->mesure = $mesure;
  }
}
/*
$choco = new Ingredient('chocolat', 100, 'gramme');
echo $choco->getNom() . ' ' . $choco->getQuantity() . ' ' . $choco->getMesure();
*/

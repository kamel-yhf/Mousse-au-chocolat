<?php

class Recette{
    private $ingredients;
    private $ustensiles;
    private $appareils;

    public function __construct($ingredients, $ustensiles, $appareils) {
        $this->setIngredients($ingredients);
        $this->setUstensiles($ustensiles);
        $this->setAppareils($appareils);
    }

    /*********** GETTERS *************/

    /*
    * return $ingredients
    * type: array[object]
    */
    public function getIngredients() {
        return $this->ingredients;
    }

    /*
    * return $ustenciles
    * type: array[object]
    */
    public function getUstensiles() {
        return $this->ustensiles;
    }

    /*
    * return $appareils
    * type: array[object]
    */
    public function getAppareils() {
        return $this->appareils;
    }

    /**************** SETTERS ************/

    /**
     * set value $ingredients
     * type: array[object]
     */
    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

    /**
     * set value $ustensiles
     * type: array[object]
     */
    public function setUstensiles($ustensiles) {
        $this->ustensiles = $ustensiles;
    }

    /**
     * set value $appareils
     * type: array[object]
     */
    public function setAppareils($appareils) {
        $this->appareils = $appareils;
    }

    /*****METHODE RECETTE */
    public function casser(){
        echo ("je casse le " . $this->getIngredients());
    }
}

// $action = new Recette("chocolat","fouet", "fouetter");
// echo $action->casser();

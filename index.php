<?php

include_once('./Ingredient.php');
include_once('./Ustensile.php');
include_once('./Appareil.php');
include_once('./Recette.php');

$ingredients = [
    $chocolat = new Ingredient('chocolat', 100, 'grammes'),
    $oeufs = new Ingredient('oeufs', 4, 'unités'),
    $sucre = new Ingredient('sucre', 50, 'grammes'),
    $eau = new Ingredient('eau', 1, 'litre')
];
$ustensiles = [
    $saladier = new Ustensile('saladier', 'contenir', 'verre'),
    $fouet = new Ustensile('fouet', 'fouetter', 'inox'),
    $casserole = new Ustensile('casserole', 'chauffer', 'inox')
];
$appareils = [
    $batteur = new Appareil('batteur', 'mélanger'),
    $gaziniere = new Appareil('gazinière', 'cuire'),
    $frigo = new Appareil('frigo', 'refroidir')
];

$mousseChoco = new Recette($ingredients, $ustensiles, $appareils);
foreach($mousseChoco->getIngredients() as $ingredient) {
    echo 'Vous avez besoin de '.$ingredient->getQuantity().' '.$ingredient->getMesure().' de '.$ingredient->getName().'<br>';
}
foreach($mousseChoco->getUstensiles() as $ustensile) {
    echo 'Vous avez besoin de '.$ustensile->getName().' qui servira à '.$ustensile->getUtility().'<br>';
}
foreach($mousseChoco->getAppareils() as $appareil) {
    echo 'Appareil nécessaire : '.$appareil->getName().' pour '.$appareil->getUtility().'<br>';
}

//var_dump($mousseChoco);
/*
var_dump($mousseChoco->getIngredients());
var_dump($mousseChoco->getUstensiles());
var_dump($mousseChoco->getAppareils());
*/




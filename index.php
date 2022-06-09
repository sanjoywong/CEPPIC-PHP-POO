<?php

//require_once './classes/Voiture.php';

spl_autoload_register(function($className){
    require './classes/'.$className.'.php';
});

Voiture::test();

Exemple::information("Bonjour");

$suv1 = new Suv("bleue",1780,"Peugot");
$voiture1 = new Voiture("vert",1195,"renault");
// $voiture1->couleur = "rouge";
//$voiture1->masse = 1200;
//$voiture1->vitesse = 30;

var_dump($suv1);

//$voiture1->setCouleur("noir");

//echo $voiture1->getCouleur()."<br/>";


// echo $voiture1->afficherEnergieCinetique();
echo "<br />";

$voiture2 = new Voiture("marron",1695,"WM");
// $voiture2->couleur = "verte";

// var_dump($voiture1);
// var_dump($voiture2);

echo "<hr>";
//echo $voiture2->afficherMessage();

?>

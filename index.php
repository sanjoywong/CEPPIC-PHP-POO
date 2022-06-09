<?php

//require_once './classes/Voiture.php';

spl_autoload_register(function($className){
    require './classes/'.$className.'.php';
});

$voiture1 = new Voiture("vert",1195,"renault");
// $voiture1->couleur = "rouge";
$voiture1->masse = 1200;
//$voiture1->vitesse = 30;


$voiture1->setCouleur("noir");

echo $voiture1->getCouleur()."<br/>";

var_dump($voiture1);

// echo $voiture1->afficherEnergieCinetique();
echo "<br />";

//$voiture2 = new Voiture();
// $voiture2->couleur = "verte";

// var_dump($voiture1);
// var_dump($voiture2);

echo "<hr>";
//echo $voiture2->afficherMessage();

?>

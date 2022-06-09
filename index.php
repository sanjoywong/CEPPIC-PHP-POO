<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->masse = 1200;
$voiture1->vitesse = 30;
echo $voiture1->afficherEnergieCinetique();

$voiture2 = new Voiture();
$voiture2->couleur = "verte";

var_dump($voiture1);
var_dump($voiture2);

echo "<hr>";
echo $voiture2->afficherMessage();

?>

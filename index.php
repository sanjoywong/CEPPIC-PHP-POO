<?php
class Voiture{
    public $couleur;
    public $masse;
    public $marque;

}

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";

$voiture2 = new Voiture();
$voiture2->couleur = "verte";

var_dump($voiture1);
var_dump($voiture2)



?>

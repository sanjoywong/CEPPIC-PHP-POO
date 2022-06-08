<?php
class Voiture{
    public $couleur;
    public $masse;
    public $marque;
    public $vitesse=0;

    public function afficherMessage(){
        echo "la voiture";
    }
    public function afficherVitesse(): float
    {
        return 0.5 * $this->masse * ($this->vitesse**2);
    }
}

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->masse = 1200;
$voiture1->vitesse = 30;
echo $voiture1->afficherVitesse();

$voiture2 = new Voiture();
$voiture2->couleur = "verte";

var_dump($voiture1);
var_dump($voiture2);

echo "<hr>";
echo $voiture2->afficherMessage();

?>

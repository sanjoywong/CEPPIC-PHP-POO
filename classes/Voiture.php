<?php
class Voiture{
    public string $couleur;
    public int $masse;
    public $marque;
    public $vitesse=0;

    public function afficherMessage(){
        echo "la voiture";
    }
    public function afficherEnergieCinetique():float
    {
        return 0.5 * $this->masse * ($this->vitesse**2);
    }
}

?>
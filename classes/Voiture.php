<?php
class Voiture extends Vehicule{
    private string $couleur;
    
    public function __construct(string $color,int $mass,string $brand)
    {
        $this->couleur = $color;
        $this->masse = $mass;
        $this->marque = $brand;
    }
    public function getCouleur():string
    {
        return $this->couleur;
    }

    public function setCouleur(string $color):string
    {
        return $this->couleur = $color;
    }

    public function afficherMessage(){
        echo "la voiture";
    }
    public function afficherEnergieCinetique():float
    {
        return 0.5 * $this->masse * ($this->vitesse**2);
    }
    public static function test()
    {
        echo "test test test";
    }
    public function __destruct()
    {
        echo "<p> Object destroyed </p>";
    }
}


?>
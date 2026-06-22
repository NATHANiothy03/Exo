<?php
class Panier
    {
            public $Nom;
            public $Prix;
            public $Quantite;
            public $img;
            public function __construct($Nom,$Prix,$Quantite,$img)
            {
                $this->Nom = $Nom;
                $this->Prix=$Prix;
                $this->Quantite=$Quantite;
                $this->img=$img;
            }
    }   
?>

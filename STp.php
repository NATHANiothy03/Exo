<?php
class STp
        {
            public $nom;
            public $prix;
            public $categorie;
            public function __construct($nom,$prix,$categorie)
            {
                $this->nom = $nom;
                $this->prix=$prix;
                $this->categorie=$categorie;
            }    
        }                     
?>
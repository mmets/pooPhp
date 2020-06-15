<?php 

namespace Ecole\Direction;

class NouvellePersonne
{
    private $nom ;
    public $prenom;
    private $etablissement;

    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        return $this->nom = $nom;
    }

    public function courir($prenom)
    {
        echo $prenom . " court plus vite que Bolt";
    }

    public function getEtablissement()
    {
        return $this->etablissement;
    }
    
    public function setEtablissement($etablissement)
    {
        return $this->etablissement = $etablissement;
    }
    
}


?>
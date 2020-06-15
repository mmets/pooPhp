<?php 
// 
//  NAMESPACE
// 
// Permet de définir un nouvel espace de travail dont le
// plusieurs classes qui vont porter le même nom 
// Par convention, lorsqu'on crée une nouvelle classe, on le fait 
// dans un nouveau fichier pour éviter des conflits si les noms de 
// sont identiques

namespace Ecole\Etudiant;

class NouvellePersonne
{
    private $nom = 'Saint Laurent';
    public $prenom;
    public $dateNaissance;
    private $age;
    
    // À chaque fois qu'on a des attributs en private, il est conseillé 
    // de construire des getter(accesseurs) et setter(mutateurs)
    
    // Les getter permettent d'accéder aux variables 
    public function getNom()
    {
        return $this->nom;
    }
    
    // les setter permettent de modifier les variables
    public function setNom($nom)
    {
        // return $this->nom; Lorsqu'on initialise $nom = "Mon nom", on peut 
        return $this->nom = $nom;
    }
    const GENDER = "f" ;

    public function courir($prenom)
    {
        echo $prenom . " court plus vite que Bolt";
    }
    
    public function getAge()
    {
        $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function estMajeur($prenom, $age)
    {
        if($age < 18)
        {
            return $prenom . "est mineur";
        } else 
        {
            return $prenom . " est majeur";
        }
    }
}

$judith = new NouvellePersonne();

echo ($judith->getNom())."<br>";
echo ($judith->setNom("Ayissi"))."<br>";

echo $judith->courir($judith->getNom())."<br>";

// $judith->setAge(20);
echo $judith->estMajeur("judith", 20)."<br>";




?>
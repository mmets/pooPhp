<?php 

class POO{
    // ATTRIBUTS
    // CONSTANTES
    // METHODES 
}
$poo = new POO();

/////////////////////////////////////////////////////////

class Article 
{
    public $titre = "Le petit poucet";
    public $auteur = "Alphonse DAUDET";
    public $resume = "Pas très joyeux";

    // Les constantes sont déclarées avec const et majuscules
    const NBRE_PAGE = 200; 

    // Méthodes 
    public function lire()
    {
        echo "Livre à lire : ". $this->titre . "d' ". $this->auteur;
    }
}

$article = new Article ();

echo (Article::NBRE_PAGE);// par convention on appelle une méthode statique de 
// cette manière au lieu de $article->NBRE_PAGE
// 

echo $article->titre.'auteur'.$article->auteur;// s'apparente aux pointeurs en C. 
//On ne met plus le $ pour l'attribut mais à la place on met ->


//
//  METHODES MAGIQUES
//
// Méthodes prédéfinies en php objet
// Méthodes permettant d'accéder facilement à une classe 
echo "<h2> Méthodes magiques </h2>";

class AutreArticle
{
    private $titre;
    private $auteur;
    private $resume;

    public function __construct($titre, $auteur, $resume)
    {
        // $this->setTitre("Ceci est un test");
        // $this->auteur = "Rantanplan";
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->resume = $resume;

    }
    
    // le __construct est appelé au moment de l'instanciation de l'objet 
    // (la création de l'objet)
    // Si par la suite on souhaite accéder uniquement à un paramètre, 
    // on utilise les getter et plus précisément les setter 
    //
    // Pour cette raison, IL EST INDISPENSABLE DE CREER DES GETTER ET SETTER 
    // DES QU ON DECLARE LES VARIABLES

    public function getTitre()
    {
       return $this->titre;
    }

    public function setTitre($titre)
    {
        return $this->titre = $titre;
    }

    // METHODE MAGIQUE __toString()
    public function __toString()
    {
        return $this->titre; // <=> getTitre
    }
}

$revue = new AutreArticle("Heron", "Néron", "Tragédie romaine");// Au moment d'instancier l'objet, le constructeur 
// initialise les valeurs de l'objet

echo "<pre>";
var_dump($revue);
echo "</pre>";

$revue->setTitre("test");
// echo $titre->__toString();

//
//  EXO PRATIQUE
//
echo "<h2> PRATIQUE </h2>";


class Ville
{
    private $nom;
    private $departement;

    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom()
    {
        return $this->nom = $nom;
    }

    public function getDepartement()
    {
        return $this->departement;
    }

    public function setDepartement()
    {
        return $this->departement = $departement;
    }

    public function afficherVille($nom, $departement)
    {
        echo "La ville de ". $nom . " est dans le département " . $departement ;
    }
    
}
$ville_1 = new Ville("Bamako", 99);
// $ville_2 = new Ville(); // Dans le cas d'une ville par défaut

echo ($ville_1->afficherVille("Poissy", 78));
//
//
echo "<h2> PRATIQUE #2 </h2>";
//  Autre manière de créer une ville par défaut

class VilleParDefaut
{
    private $nom;
    private $departement;
    private $feteVille;
    private $mascotte;
    private $population;
    private $langue;

    public function __construct()
    {
        $this->nom = "Strasbourg";
        $this->departement = 78;
        $this->feteVille = "11 Novembre";
        $this->mascotte = "cygogne";
        $this->population = 800000;
        $this->langue = "Elsàss";
    }

    public function getLangue()
    {
        return $this->langue;
    }
    public function setLangue()
    {
        return $this->langue = $langue;
    }

}
echo "<pre>";
var_dump ($maVille = new VilleParDefaut());
echo "</pre>";
echo $maVille->getlangue();
?>
<?php 
//  Pour pouvoir utiliser les classes crées dans les namespace.php, 
// on fait le lien avec un require puis on utilise le mot-clé use

require_once ('namespace.php');
require_once('namespace_direction.php');

use Ecole\Etudiant as Etudiant;
use Ecole\Direction ;// Si on n'utilise pas d'alias, le dernier mot
// du namespace est utilisé comme premier élément pour préciser la classe 
// dans laquelle ont travaille

// On instancie les objets des classes Personne() présents dans les 
// fichiers dont les namespace sont Etudiant et Direction
$awa = new Etudiant\nouvellepersonne();
$seydou = new Direction\nouvellepersonne();

echo "<h2> Use Namespace </h2>";
$awa->setNom("Awa");
$seydou->setNom("Seydou"). "<br>";

echo ($seydou->getNom()). "<br>";
echo ($awa->getNom()). "<br>";

$seydou->setEtablissement("BPCE");
echo ($seydou->getEtablissement()) . "<br>";

?>
<h1>Exercice Banque</h1>

<?php

require("Compte.php");
require("Titulaire.php");

// Notre Titulaire
$titulaire1 = new Titulaire ("Leote", "Alexandre", "16-01-1995", "Strasbourg");
$titulaire2 = new Titulaire ("Dupont", "Marc", "02-11-1956", "Paris");

// Nos objets Compte
$compte1 = new Compte("Livret A", 1557, " €", $titulaire1);
$compte2 = new Compte("PEL", 4589.51, " €", $titulaire1);
$compte3 = new Compte("Euro Compte", 11952.05, " €", $titulaire1);

$compte4 = new Compte("Livret A", 5000, " €", $titulaire2);


// var_dump($titulaire);

// var_dump($compte1);

$titulaire1->afficherCompte();
echo "<br>";
$compte1->crediterCompte(200);
echo "<br>";
$compte3->debiterCompte(700);
echo "<br>";
$compte3->virementCompte(500, $compte4);
echo "<br>";
$titulaire2->afficherCompte();
<h1>Exercice Livre</h1>

<?php
// Utilisation des classes nécessaires
require("Livre.php");
require("Auteur.php");

// Notre objet Auteur
$auteur = new Auteur("King", "Stephen");

// Nos objets Livre
$livre1 = new Livre("Ca", 1986, 1138, 20, $auteur);
$livre2 = new Livre("Simetierre", 1983, 374, 15, $auteur);
$livre3 = new Livre("Le Fléau", 1978, 823, 14, $auteur);
$livre4 = new Livre("Shining", 1977, 447, 16, $auteur);

// Affichage de la bibliographie
echo $auteur -> afficherBibliographie();

// ca fonctionne pas 

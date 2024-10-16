<h1>POO Livre</h1>


<?php

// require "Entreprise.php";
// require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name .'.php'; // 'classes/' puisque nos fichiers de classe ont été stockés dans le dossier 'classes'
});



$auteur1 = new Auteur ("King", "Stephen");

$auteur2 = new Auteur ("Heid", "Michaël");

$auteur3 = new Auteur ("Flaubert", "Gustave");


$livre1 = new Livre ("Ca", 1138, "1986-01-01", 20, $auteur1);

$livre2 = new Livre ("Simetierre", 374, "1983-01-01", 15, $auteur1);

$livre3 = new Livre ("Le POO en toute simplicité", 86, "2024-01-01", 300, $auteur2);

$livre4 = new Livre ("Bouvard et Pécuchet", 333, "1881-01-01", 12, $auteur3);

$livre5 = new Livre ("Salammbô", 520, "1862-01-01", 10, $auteur3);

$livre6 = new Livre ("Le fléau", 823, "1978-01-01", 14, $auteur1);

$livre7 = new Livre ("Shining", 447, "1977-01-01", 16, $auteur1);

$livre8 = new Livre ("Madame Bovary", 1200, "1857-01-01", 19, $auteur3);

// on affiche de beaux résultats grâce à __toString de la classe Auteur.
echo $auteur1."<br>";
echo $auteur2."<br>";
echo $auteur3."<br>";

echo "<br>";

// on affiche de beaux résultats grâce à __toString de la classe Livre.
echo $livre1."<br>";
echo $livre3."<br>";
echo $livre4."<br>";

// on teste notre méthode d'affichage de la bibliographie de nos auteurs.
echo $auteur1->afficherBibliographie ()."<br>";
echo $auteur2->afficherBibliographie ()."<br>";
echo $auteur3->afficherBibliographie ()."<br>";



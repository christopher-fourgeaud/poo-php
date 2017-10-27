<?php
include('class/Voiture.php');
include('class/Velo.php');

$monVelo = new Velo("Vert", 2);
$maBagnole= new Voiture("Noir", 4);

echo "Vélo de couleur: ".$monVelo->getCouleur()."<br>";
echo "Nombre de roues sur mon vélo: ".$monVelo->getnbRoues()."<br>";
echo "<br>";
echo "Voiture de couleur: ".$maBagnole->getCouleur()."<br>";
echo "Nombre de roues sur ma voiture: ".$maBagnole->getnbRoues()."<br>";
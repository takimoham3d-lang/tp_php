<?php
// Auteur : Mohamed Taki
// Objectif : Variables, constantes, types et chaînes
// Date : 18/10/2026

echo 'Hello PHP';

// commentaire sur une ligne
# autre commentaire sur une ligne
/* commentaire
   sur plusieurs lignes */

require 'config.php';

// Exercice 1.1
// $x : valide, commence par une lettre
$x = 1;
// $_x : valide, commence par un underscore
$_x = 2;
// $2x : invalide, un nom ne peut pas commencer par un chiffre
// $x-y : invalide, le tiret n'est pas autorisé
// $Prix_HT : valide, lettres et chiffres et underscore autorisés
$Prix_HT = 100;
// $prix ht : invalide, l'espace n'est pas autorisé
// $état : valide, les caractères accentués sont autorisés
$état = "ok";

$a = 1;
$A = 2;
echo "<br>a = $a, A = $A<br>";

// Exercice 1.2
echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";
var_dump(defined('SEUIL'));
echo "<br>";
var_dump(defined('INCONNUE'));
echo "<br>";


// Exercice 1.3
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht + $prix_ht * $tva / 100;
echo "Le prix TTC du produit est de $prix_ttc €.<br>";

// Exercice 1.4
$test = 42;
$test = (string) $test;
var_dump($test);
echo "<br>";

var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);
echo "<br>";

var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);
echo "<br>";

$dec = 255;
$hex = 0xFF;
$oct = 0377;
$bin = 0b11111111;
echo "$dec<br>$hex<br>$oct<br>$bin<br>";

// Exercice 1.5
$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo 'Voulez-vous supprimer C:\*.*?<br>';
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";

echo trim("*Bonjour les développeurs*", "*") . "<br>";

$mot = "Bonjour";
for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}
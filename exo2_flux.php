<?php
// Auteur : Mohamed Taki
// Objectif : Structures de contrôle et boucles
// Date : 17/10/2026

require 'config.php';

// Exercice 2.1
function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h3>Exercice 2.1</h3>";
echo "17 : " . mention(17) . "<br>";
echo "15 : " . mention(15) . "<br>";
echo "12 : " . mention(12) . "<br>";
echo "10 : " . mention(10) . "<br>";
echo "6 : " . mention(6) . "<br>";

// Exercice 2.2
echo "<h3>Exercice 2.2</h3>";
$mois = date("m");

switch ($mois) {
    case "01":
        echo "Janvier";
        break;
    case "02":
        echo "Février";
        break;
    case "03":
        echo "Mars";
        break;
    case "04":
        echo "Avril";
        break;
    case "05":
        echo "Mai";
        break;
    case "06":
        echo "Juin";
        break;
    case "07":
        echo "Juillet";
        break;
    case "08":
        echo "Août";
        break;
    case "09":
        echo "Septembre";
        break;
    case "10":
        echo "Octobre";
        break;
    case "11":
        echo "Novembre";
        break;
    case "12":
        echo "Décembre";
        break;
    default:
        echo "Mois inconnu";
}
echo "<br>";

// Réponse : si on oublie un break, PHP continue d'exécuter les instructions des case suivants (même si leur valeur ne correspond pas) jusqu'au prochain break ou à la fin du switch.

// Exercice 2.3
echo "<h3>Exercice 2.3</h3>";

// Question 1
echo "<pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";

// Question 2
$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<b>$i</b> ";
    } else {
        echo "$i ";
    }
    $i += 2;
}
echo "<br>";

// Question 3
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i ";
}
echo "<br>";

// Question 4
$i = 1;
while (true) 
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
        default:
            break;
    }
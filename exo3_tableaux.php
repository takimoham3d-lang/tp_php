<?php
// Auteur : Mohamed Taki
// Objectif : Tableaux indexés et associatifs, statistiques, tri et opérateurs
// Date : 18/10/2026

require 'config.php';

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

// Exercice 3.1
echo "<h3>Exercice 3.1</h3>";
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

$modules = ["Python", "Algorithmique", "Programmation Web"];

foreach ($modules as $module) {
    echo $module . "<br>";
}

for ($i = 0; $i < count($modules); $i++) {
    echo $modules[$i] . "<br>";
}

// Exercice 3.2
echo "<h3>Exercice 3.2</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach ($notes as $nom => $note) {
    if ($note < SEUIL) {
        echo "<tr style='color:red'>";
    } else {
        echo "<tr>";
    }
    echo "<td>$nom</td><td>$note</td><td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";

// Exercice 3.3
echo "<h3>Exercice 3.3</h3>";
$somme = 0;
$nb = 0;
$meilleure = null;
$faible = null;

foreach ($notes as $note) {
    $somme += $note;
    $nb++;
    if ($meilleure === null || $note > $meilleure) {
        $meilleure = $note;
    }
    if ($faible === null || $note < $faible) {
        $faible = $note;
    }
}
$moyenne = $somme / $nb;

echo "Somme : $somme<br>";
echo "Moyenne : $moyenne<br>";
echo "Meilleure note : $meilleure<br>";
echo "Plus faible note : $faible<br>";

echo "<br>Vérification :<br>";
echo "array_sum : " . array_sum($notes) . "<br>";
echo "Moyenne : " . array_sum($notes) / count($notes) . "<br>";
echo "max : " . max($notes) . "<br>";
echo "min : " . min($notes) . "<br>";

$effectifs = [
    "Très bien" => 0,
    "Bien" => 0,
    "Assez bien" => 0,
    "Passable" => 0,
    "Ajourné" => 0
];
foreach ($notes as $note) {
    $m = mention($note);
    $effectifs[$m]++;
}
echo "<br>Effectifs par mention :<br>";
foreach ($effectifs as $m => $effectif) {
    echo "$m : $effectif<br>";
}

// Exercice 3.4
echo "<h3>Exercice 3.4</h3>";

function afficher($tab) {
    foreach ($tab as $cle => $valeur) {
        echo "$cle : $valeur<br>";
    }
}

echo "<h4>Noms croissants (ksort)</h4>";
$copie = $notes;
ksort($copie);
afficher($copie);

echo "<h4>Notes décroissantes (arsort)</h4>";
$copie = $notes;
arsort($copie);
afficher($copie);

echo "<h4>Noms décroissants (krsort)</h4>";
$copie = $notes;
krsort($copie);
afficher($copie);

echo "<h4>Notes croissantes (asort)</h4>";
$copie = $notes;
asort($copie);
afficher($copie);

// Réponse : sur un tableau indexé comme $modules, on utilise sort() (ordre croissant) ou rsort() (ordre décroissant), car ces fonctions trient les valeurs et réindexent le tableau.

// Exercice 3.5
echo "<h3>Exercice 3.5</h3>";
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "a + b : ";
print_r($a + $b);
echo "<br>a == b : ";
var_dump($a == $b);
echo "<br>a === b : ";
var_dump($a === $b);

// Explication : $a + $b est l'union des tableaux : les clés de $a sont gardées, et seules les clés absentes de $a sont ajoutées depuis $b. Ici les deux ont les mêmes clés, donc le résultat est ["x" => 1, "y" => 2].
// $a == $b vaut true car les deux tableaux contiennent les mêmes paires clé/valeur, quel que soit l'ordre.
// $a === $b vaut false car l'identité exige les mêmes paires clé/valeur, dans le même ordre et avec les mêmes types ; ici l'ordre est différent.
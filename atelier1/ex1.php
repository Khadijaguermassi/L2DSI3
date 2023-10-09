<?php

$Notes = array("Rami" => 7.50,"Mohamed" => 19.00,"Amira" => 15.50,"Asma" => 10.00,"Ahmed" => 9.5,"Yassine" => 15.5,"Islem" => 12.00);
echo "Les etudiants avec une moyenne supérieure ou égale à 10 :<br>";
foreach ($Notes as $prenom => $note) {
    if ($note >= 10) {
        echo "$prenom : $note<br>";
    }
}
$nombreEtudiants = count($Notes);
echo "Nombre d'étudiants : $nombreEtudiants <br>";

$bonneNote = false;
$etudiantBonneNote = "";
foreach ($Notes as $prenom => $note) {
    if ($note > 15) {
        $bonneNote = true;
        $etudiantBonneNote = $prenom;
        break;
    }
}
if ($bonneNote) {
    echo "Étudiant avec une bonne note : $etudiantBonneNote<br>";
} else 
    echo "pas de bonne note.<br>";
echo "<h3>Liste des étudiants et de leurs notes</h3>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $prenom => $note) {
    echo "<tr><td>$prenom</td><td>$note</td></tr>";
}
echo "</table>";
arsort($Notes);
echo "<h3>Liste triée en ordre décroissant des notes</h3>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $prenom => $note) {
    echo "<tr><td>$prenom</td><td>$note</td></tr>";
}
echo "</table>";
krsort($Notes);
echo "<h3>Liste triée en ordre décroissant des noms</h3>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $prenom => $note) {
    echo "<tr><td>$prenom</td><td>$note</td></tr>";
}
echo "</table>";
$moyenne = array_sum($Notes) / count($Notes);
echo "<h3>Moyenne des notes en PHP : $moyenne</h3>";




?>

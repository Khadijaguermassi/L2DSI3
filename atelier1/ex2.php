<?php
$tabpays1 = array("Tunisie", "France", "Italie", "Turkquie");
echo "<h3>Contenu du tableau tabpays1 :</h3>";
echo "<ol>";
foreach ($tabpays1 as $pays) {
    echo "<li>$pays</li>";
}
echo "</ol>";
sort($tabpays1);
echo "<h3>Contenu du tableau tabpays1 trié par ordre alphabétique croissant :</h3>";
echo "<ol>";
foreach ($tabpays1 as $pays) {
    echo "<li>$pays</li>";
}
echo "</ol>";
rsort($tabpays1);
echo "<h3>Contenu du tableau tabpays1 trié par ordre alphabétique décroissant :</h3>";
echo "<ol>";
foreach ($tabpays1 as $pays) {
    echo "<li>$pays</li>";
}
echo "</ol>";
$tabpays2 = array("Tunisie"=>"Tunis","France" => "Paris","Italie" => "Rome","Turquie" => "Ankara",);
echo "<h3>Contenu du tableau tabpays2 :</h3>";
echo "<table border='1'>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";
foreach ($tabpays2 as $pays => $capitale) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}
echo "</table>";
ksort($tabpays2);
echo "<h3>Contenu du tableau tabpays2 trié par ordre alphabétique croissant des indices :</h3>";
echo "<table border='1'>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";
foreach ($tabpays2 as $pays => $capitale) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}
echo "</table>";
krsort($tabpays2);
echo "<h3>Contenu du tableau tabpays2 trié par ordre alphabétique décroissant des indices :</h3>";
echo "<table border='1'>";
echo "<tr><th>Pays</th><th>Capitale</th></tr>";
foreach ($tabpays2 as $pays => $capitale) {
    echo "<tr><td>$pays</td><td>$capitale</td></tr>";
}
echo "</table>";
?>

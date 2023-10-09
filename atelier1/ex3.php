<?php
  
    if (isset($_POST['chaine'])) {
        $chaine = $_POST['chaine'];

       
        $longueur = strlen($chaine);
        if (isset($_POST['position']) && isset($_POST['longueur'])) {
            $position = $_POST['position'];
            $longueurExtraction = $_POST['longueur'];
            $sousChaine = substr($chaine, $position, $longueurExtraction);
        } else {
            $sousChaine = "Veuillez spécifier une position et une longueur.";
        }


        $chaineInverse = strrev($chaine);
    }
    ?>

    <form method="post">
        <label for="chaine">Saisissez une chaîne de caractères :</label>
        <input type="text">
        <br>

        <label for="position">Position de départ :</label>
        <input type="number"  >
        <br>

        <label for="longueur">Longueur à extraire :</label>
        <input type="number" >
        <br>

        <input type="submit" value="Valider">
    </form>

    <?php
    if (isset($chaine)) {
        echo "<h2>Résultats :</h2>";
        echo "<p>La longueur de la chaîne est : $longueur</p>";
        echo "<p>La sous-chaîne extraite est : $sousChaine</p>";
        echo "<p>La chaîne inversée est : $chaineInverse</p>";
    }
    ?>

</body>
</html>






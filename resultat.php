<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
</head>
<body>

<?php
if (isset($_POST['nom']) && !empty($_POST['nom'])) {

    // Sécurisation
    $nom = htmlspecialchars($_POST['nom']);

    // Majuscules UTF-8
    $nomMaj = mb_strtoupper($nom, 'UTF-8');

    echo "<h1>Nom saisi : $nomMaj</h1>";

} else {
    echo "<p>Aucun nom fourni</p>";
}
?>

</body>
</html>
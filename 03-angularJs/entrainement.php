<?php
// Connexion
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entraînement BDD</title>
</head>
<body>
<ul>
    <?php 

$employes = $pdo -> query("SELECT * FROM employes");

    $employes -> fetchAll(PDO::FETCH_ASSOC);
     print_r($employes);

    ?>
</ul>


</body>
</html>


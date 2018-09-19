<!--  02-jquery\exemple_insert_select\connexion.php -->

<?php
    require 'connexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script> -->
    <title>Ajax Exercice</title>
</head>
<body>

<h1>Ajouter un employé</h1>

<form action="" method="post">
    <label for="prenom">Prenom :</label>
    <input type="text">

    <input type="submit" value="Ajouter">

</form>

    <ul>
        <?php

            // $tab = '';

            $resultat = $pdo -> query("SELECT * FROM employes");

            $prenom = $resultat -> fetch(PDO::FETCH_ASSOC);


            $tab['resultat'] = '';

            foreach($prenom as $emp) {
                $tab['resultat'] .= '<li>' . $prenom['prenom'] . '</li>';
            }

            echo $tab['resultat'];
        ?>
    </ul>
    
</body>
</html>
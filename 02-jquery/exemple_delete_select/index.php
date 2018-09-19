<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>
    <form action="" method="post">
        <select name="employe" id="employe">
            <?php 
            require 'connexion.php';
            $employes = $pdo -> query("SELECT * FROM employes") -> fetchAll(PDO::FETCH_ASSOC);

            foreach($employes as $emp) {
                echo '<option value="' . $emp['id_employes'] . '">' . $emp['prenom'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Supprimer" id="submit">
        </form>
</body>
</html>

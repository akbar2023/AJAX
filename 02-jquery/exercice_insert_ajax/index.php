<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="ajax.js"></script>
	</head>
	<body>

<!-- Exercice :
Ajouter un nouvel employe en AJAX
prenom, nom, sexe, service, salaire -->

				<!-- Champs pour ajouter un employé -->

		<form method="post" action="">
			<div>
				<label for="prenom">Prenom</label>
				<input type="text" id="prenom"  />
			</div><br>

			<div>
				<label for="nom">Nom</label>
				<input type="text" id="nom"  />
			</div><br>

			<div>
			<span>Sexe</span>
				<select name="sexe" id="sexe">
					<option value="m">Homme</option>
					<option value="f">Femme</option>
				</select>
			</div><br>

			<div>
				<label for="service">Service</label>
				<input type="text" id="service"  />
			</div><br>

			<div>
				<label for="salaire">Salaire</label>
				<input type="text" id="salaire"  />
			</div><br>
			
			<div><input type="submit" id="submit" value="Ajouter" /></div>
		</form>
		

<!-- Ici on sélectionne tous les champs à afficher avec la boucle foreach dans un  tableau, et qui affiche instantanément le nouvel employé si inséré
 -->
		<table border="1" id="employe"> 
		<?php
			require 'connexion.php';
			$employes = $pdo -> query("SELECT * FROM employes") -> fetchAll(PDO::FETCH_ASSOC);
			
			foreach($employes as $emp){
				echo '<tr>';
				echo 	'<td>' . $emp['id_employes'] . '</td>';
				echo 	'<td>' . $emp['prenom'] . '</td>';
				echo 	'<td>' . $emp['nom'] . '</td>';
				echo 	'<td>' . $emp['sexe'] . '</td>';
				echo 	'<td>' . $emp['service'] . '</td>';
				echo 	'<td>' . $emp['salaire'] . ' €</td>';
				echo '</tr>';
			}
		?>	
		</table>
			
	<body>
</html>
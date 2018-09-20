
$(document).ready(function(){
	// La suite sera éxécutée après le chargement de la page
	$("#submit").click(function(event){
		// on cible un evenement JS quel qu'il soit
		event.preventDefault(); // Annule le comportement initial du submit
		insertEmploye(); // On lance la fonction que l'on souhaite éxécuter
	});
	
	/* Ici on déclare la fonction insertEmploye() */
	function insertEmploye(){
		var prenom = $("#prenom").val();  // chaque variable prend la valeur de son champs correspondant du formulaire (ici var prenom prend la valeur du champs prenom)
		var nom = $("#nom").val();
		var sexe = $("#sexe").val();
		var service = $("#service").val();
		var salaire = $("#salaire").val();
		
		var parameters = {  /* On fait un tableau en Json pour chaque variable que la fonction $.post a besoin en paramèter */
			'prenom' : prenom,
			'nom' : nom,
			'sexe' : sexe,
			'service' : service,
			'salaire' : salaire
		};

		console.log(parameters);
		
		$.post('ajax.php', parameters, function(data){
			$("#employe").html(data.resultat);
			$("#prenom").val("");
			$("#nom").val("");
			$("#sexe").val("");
			$("#service").val("");
			$("#salaire").val("");
		}, 'json');
	}
});


// Fonction permettant de lancer les traitements à l'évènement "click".

$(document).ready(function(){
   $("#submit").click(function(event)  {
        event.preventDefault(); // Annule le comportement initial de submit (arrête le rechargement de la page lors du click)
        insertEmploye();
    });

    function insertEmploye(){
        prenom = $('#prenom').val();
        parameters = 'employe=' + prenom;

        $.post("ajax.php", parameters, function(data){

            // data contient ce que le PHP nous retourne a savoir un objet Json, où à l'indice "validation" il y aura 'OK' ou 'Erreur'
            if(data.validation == 'OK') {
                $('#resultat').append('<p style="background:green; color:white; padding:5px">L\'employé à bien été ajouté, Bravo !</p>');
                $('#prenom').val(""); // on vide le champs prenom
            }

        }, 'json');

    }

});







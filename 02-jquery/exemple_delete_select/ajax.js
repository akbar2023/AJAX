// Fonction permettant de lancer les traitements à l'évènement "click".
$(document).ready(function(){
    // La suite sera exécutée après le chargement de la page
    $("#submit").click(function(event){
        // on cible un evenement JS quel qu'il soit (ici click)
         event.preventDefault(); // Annule le comportement initial de submit (arrête le rechargement de la page lors du click)
         deleteEmploye(); // On lance la fonction que l'on souhaite exécuter
     });
 

    function deleteEmploye() {
        var id = $('#employe').find(':selected').val();
        var parameters = 'id=' + id;
        // On récupère ic l'id de la personne à supprimer. On le fait grâce à la 'value' de l'option selectionée dans le champs id=employe 

        $.post('ajax.php', parameters, function(data){
            // console.log(data);
            if(data.validation == 'OK') {
                $("#employe").html(data.resultat);
            }

        }, 'json');
        /* 
            la fonction post() de jquery, me permet de lancer une requête HTTP et transmettre des infos en post.
            Nous souhaitons exécuter le fichier ajax.php et lui transmettre en post l'id ($_POST['id'] = 12)
            La fonction post de jquery récupère la réponse en 3ème argument, et nous permet de la traiter dans une fonction
            Cette fonction peut récuperer la réponse affichée dans le fichier PHP, sous forme d'un tableau Json (data) qui contient des éléments (data.validation).
            Le tableau data que l'on récupère correspond à l'array PHP qui a été encodé dans le fichier PHP (echo json_encode($tab))
        */
    }

});
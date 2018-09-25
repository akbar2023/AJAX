$(document).ready(function(){
	$("#submit").click(function(event){
	event.preventDefault();
	affichageProduit();
});


	affichageProduit(){
		$.ajax({
			url : 'ajax.php',
			dataType : 'json',
			success : function(data){
				console.log(data);
			}

		});
	}





}); // fin function 


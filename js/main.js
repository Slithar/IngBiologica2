$(document).ready(function(){
	
	$("#formLogIn").submit(function(event) {
		event.preventDefault();

		if( $("#cedulaUsuario").val() == "" || $("#passwordUsuario").val() == "" ){
			return false;
		}

		else{
			var CI = $("#cedulaUsuario").val();
			var PSW = $("#passwordUsuario").val();

			$.ajax({
				url: 'logear.php',
				type: 'POST',
				dataType: 'html',
				data: "name="+CI+"&pwd="+PSW,
			})
			.done(function(response) {
				if(response == "true"){
					window.location="inicio.php";
				}
				else{

				}
			});
			
		}

	});	


});

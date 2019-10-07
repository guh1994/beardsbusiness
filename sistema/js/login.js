$("#logarUser").click(function(event){

	var user = $("#usuario").val();
	if($("#usuario").val() != '' && $("#senha").val() != ''){

		var data = $("#formLogin").serialize();

		$.ajax({

			type:'POST',
			url: './control/login.php',
			data: data,

			success : function (response){
				if (response == user){
					window.location.href = "./dashboard.php";
				}
				else{
					alert("Usuario ou senha invalidos");
				}
			}
		})
	}
})
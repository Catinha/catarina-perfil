

<center>

<div id = "usu·rio_2">

<form id="frmLogin">
	User:  <input type="text" name="user" ><br> <br> 
	Senha: <input type="password" name="pass"><br> <br>
	<input type="button" id="btnEnviar" value="Enviar">
</form>
</div>
</center>

<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04Content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				// $("#sct02" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "Status da Autentica√ß√£o:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#usu·rio_2" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>


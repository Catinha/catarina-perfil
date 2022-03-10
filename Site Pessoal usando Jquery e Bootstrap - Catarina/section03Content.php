

<center>

<div id = "usu�rio_2">

<form id="frmLogin">

<div class ="form-group" style="margin-top:-100px">
	
<label for="usr">Nome</label>
  <input type="text" class="form-control" name="user" id="usr">
</div>


  <label for="pwd">Senha</label>
  <input type="password" class="form-control" name="pass" id="pwd">


</div>
	
<button type="button" id="btnEnviar" class="btn btn-secondary" style="margin:center">Enviar</button>

	
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
				var outText = "Status da Autenticação:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#usu�rio_2" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>


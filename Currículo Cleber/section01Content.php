


<div id= "usu�rio">


<button type ="button" id="btnSct01" value="Login" class="btn btn-secondary" style="margin-bottom:-500px; margin-left: 150px">Login</button>


<script type="text/javascript">
	$(document).ready(function() {
		$("#btnSct01").click(function() {
			$("#sct01" ).load("section03Content.php");
		});
	});
</script>

<script> 
$(document).ready(function(){
$(".flip").click(function(){
$(".panel").toggle();
});
});
</script>
<style type="text/css"> 
div.panel,p.flip
{
line-height: 30px;
margin:auto;
font-size:16px;
padding:5px;
text-align:center;
background:#555;
border:solid 1px #666;
color:#ffffff;
border-radius:3px;
user-select:none
}
div.panel
{
display:none;
}
p.flip
{
cursor:pointer;
}
</style>


<p class="flip" style="margin-right:150px"; >Clique aqui</p>
<div class="panel" style="margin-right:150px";>
<p>
Espero que tenha me conhecido um pouco... <br>
Agora, quero conhecer você!<br>
 Identifique-se como "admin" senha "123456"<br>
 e escreva seu nome, idade e o que gosta de fazer </p>

</div>


</div>

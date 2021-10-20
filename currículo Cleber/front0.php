<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>insert title here</title>
		<style type="text/css">
			header{
				width: 100%;
				height: 20px;
				float: left;
				padding: 20px 10px;
				display: inline-bolck;
				text-align: center;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				font-size: 16px;
			    background-color:	#B0E0E6;
			}
			
			#menu a{
				text-decoration: none;
				color: #A0522D;
				
			
			}
				
			#menu a:hover{
				color: white;
				
			}
			
			

			
			.sct1{
				 
				width: 28%;
				height: 400px;
				float: left;
				margin-top: 60px ;
				margin-bottom: 70px;
				margin-left: 485.5px;
				border: 1px solid #363636;
				border-color: 	#808080;
				background-color: #F08080 ;
				position:absulte;
				border-radius: 15px; 
				
			}
			
			
			.sct2{
			    width:100%;
				height: 150px;
				float: left;
				position:absulte;
				margin-top:auto;   
				background-color: orange;
				
				
				}
			 	 
			 #usuário {
			 
			   	margin-top: 70px;
				margin-left: 160px;
				margin-bottom: 200px;
				}
			 
			 
			 #usuário_2 {width: 230px;
    			height: 220px;
				margin-top: 250px;
				margin-left: 13px;
				
				}
		
			 
			
			footer{
				width: 100%;
				height: 50px;
				background-color: yellow;
				float: left;			
			}
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
					$("#header").load("headerContent.php"   );
					$("#sct01" ).load("section01Content.php");
					$("#sct02" ).load("section02Content.php");
					$("#footer").load("footerContent.php"   );
				});
		</script>
	</head>
<body>
	<header id="header">innerHTML header </header>
	<section class="sct1" id="sct01" >innerHTML sct01</section>
	<section class="sct2" id="sct02">innerHTML sct02</section>
	
</body>
</html>
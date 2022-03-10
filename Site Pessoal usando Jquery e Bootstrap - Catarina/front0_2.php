
<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<title>insert title here</title>
<style type="text/css">

header{
				width: 100%;
				height: 70px;
				background-color: black;
				float: left;
				padding: 20px 10px;
				display: inline-bolck;
				text-align: center;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				font-size: 16px;
			}
			
			
			#menu a{
				text-decoration: none;
				color: #A0522D;
				
			
			}
				
			#menu a:hover{
				color: white;
				
			}
			
			.sct{
				width: 50%;
				height: 500px;
				float: left;
			}
			
#banner {

margin-top: -20px;

}


			#sct01{
				background-color: #d39066;
			}
			#sct02{
				background-color:#00000;
				
			}
			
			 #usu�rio {
			 
			   	margin-top: 70px;
				margin-left: 160px;
				margin-bottom: 200px;
				}
			 
			 
			 #usu�rio_2 {width: 230px;
    			height: 220px;
				margin-top: 250px;
				margin-left: 13px;
				
				}
			
			
			#texto {
				margin-top: 60px;
				margin-left:30px;
				]; 
				
				
				}
			
			
			footer{
				width: 100%;
				height: 70px;
				background-color: black;
				float: left;
				text-align: center;		
				padding: 20px 10px;	
			
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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
<body>

	<header id="header">innerHTML header</header>
	<section class="sct" id="sct01" >innerHTML sct01</section>
	<section class="sct" id="sct02">innerHTML sct02</section>
	<footer id="footer">innerHTML footer</footer>
</body>
</html>
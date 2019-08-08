<?php
 include("navbars.php");

?>
<!DOCTYPE html>
<html>

	<head>
		<title>ESCOLHAS DA IMAGEM | ADM</title>
		<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0' />
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<script src = "js/jquery.min.js"></script>
		<script src = "js/bootstrap.min.js"></script>
		<script src = "js/popper.min.js"></script>
		
		<script src = "jquery-3.3.1.min.js"></script>
		
   <style>
      .navbar{
	width: 100%; 
	height: 75px;
	font-family: verdana;
	font-size: 18px;
	background-color: #4682B4;
	margin: 0px auto;

	} 

	#escolher_img{
	display: block;
	margin: 100px auto;
	font-family: verdana;
	width: 60%;
	padding: 20px;
	background-color: #fff;
	color: #404040;
	border: 1px solid #4682B4;
	border-color:#4682B4;
	box-shadow: 0px 0px 5px 2px #4682B4;
}
	}
	
 </style>

	</head>
	
	<body style = "background-color: #f0f9fd;">
		
		<div id = "escolher_img">
		
		<p>selecione as imagens para as dicas da semana</p>
		
	<form  method = "post" action = "banner.php" enctype="multipart/form-data">
	
		<label>Imagem 1:</label>
		<input type="file" name="dica1" />
		<br /><br />
		
		<label>Imagem 2:</label>
		<input type="file" name="dica2" />
		<br /><br />

		<label>Imagem 3:</label>
		<input type="file" name="dica3" />
		<br /><br />
		
		<label>Imagem 4:</label>
		<input type="file" name="dica4" />

		<br /><br />
		<input type="submit">				
			

	</form>
		
		</div>
	
	</body>
</html>

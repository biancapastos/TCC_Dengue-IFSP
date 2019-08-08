<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Login</title>
	
	<!-- coisas do modal -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style type="text/css" media="screen">
	 	* {
		   box-sizing: border-box; 
		  }
		  body {
		    margin: 0;
		  }
		  #i_map, #i_ran, #i_gra, #i_tes, #i_log, #nav_sist{
		    border-radius: 50%;
			border: 5px double #646df0;
		  }
		  #main {
		    display: flex;
		    min-height:100vh;
		  }
		  #main > article {
		    flex: 1;
		  }
		  #main > nav {
		    flex: 0 0 3vw;
		    background: #ADD8E6;
		  }
		  #main > aside {
			flex: 0 0 10vw;
		    background: #ADD8E6;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1em;
		  }
		  header, footer {
		    background: #ADD8E6	;
		  }
		  header {
			height: 0vh;
		  }
		  footer{
			height: 0vh;
		  }
	</style>
	
	<style>
		input{
			padding: 10px 80px;
			margin: 8px;
			text-align: center;
			border: 1px solid #4682B4;
			width:50%;
		}
		input[type = submit]{
			width:20%;
		}
		button{
			margin: 5px;
			display: inline-block;
			
		}
		div{
			display: inline-block;
		}
		p{
			margin: 5px;
		}
	</style>
</head>

<body>

<div id="main">
	
	<article>
	
		<center>

	<div style = "border: 4px double #646df0; width: 70%; padding: 35px;">	
	
	
	<h3>Cadastre o local de um caso de dengue !!!</h3> 
			<hr />
	
	<form method = "post" action = "registra_cadastro_end.php">
	
		<label>Rua&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type = "text" name = "rua"  />
		<br />
		
		<label>Bairro&nbsp;&nbsp;</label>
		<input type = "text" name = "bairro"  />
		<br />
		
		<label>Numero</label>
		<input type = "text" name = "numero"  />
		<br />
		
		<label>Cidade&nbsp;</label>
		<input type = "text" name = "cidade"  />
		<br />
		
		<label>UF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
		<input type = "text" name = "uf"  />
		<br />
		
		<input type = "submit" value = "Cadastrar "/>
		<br />
	</form>
	</div>
	</center>
	
	
	</article>
<?php

	include("rodape_template.php");
?>	
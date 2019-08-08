<?php
	session_start();
	include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		
	<title>Pagina Inicial</title>
	
	<style type="text/css" media="screen">
	 	* {
		   box-sizing: border-box; 
		  }
		  body {
		    margin: 0;
		  }
		  #i_map, #i_ran, #i_gra, #i_tes, #i_log, #i_ver_cadastro, #nav_sist, #i_marcar_ponto {
		    border-radius: 50%;
			border: 5px double #646df0;
		  }
		  #i_logout{
		    border-radius: 50%;
			  
		  }
		  #main {
		    display: flex;
		    min-height:100vh;
		  }
		  #main > article {
		    flex: 1;
		  }
		  #main > nav {
		    flex: 0 0 5vw;
		    background: #ADD8E6;
		  }
		  #main > aside {
			flex: 0 0 20vw;
		    background: #ADD8E6;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1.5em;
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
		  p{
			  margin: 6px;
		  }
	</style>
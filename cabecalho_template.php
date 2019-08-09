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
		  #i_map, #i_ran, #i_gra, #i_tes, #i_log, #i_ver_cadastro, #nav_sist{
		    border-radius: 50%;
			border: 5px double #0b6b9e;
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
		    background: #0b6b9e;
		  }
		  #main > aside {
			flex: 0 0 10vw;
		    background: #0b6b9e;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1em;
		  }
		  header, footer {
		    background: #0b6b9e	;
		  }
		  header {
			height: 0vh;
		  }
		  footer{
			height: 0vh;
		  }
	</style>
	
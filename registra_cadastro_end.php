<?php

	include("conexao.php");
	
	$rua = $_POST["rua"];
	$cidade = $_POST["cidade"];
	$bairro = $_POST["bairro"];
	$numero = $_POST["numero"];
	$uf = $_POST["uf"];

	$insert = "INSERT INTO cadastro_pontos(rua, bairro, cidade, numero, uf) 
	VALUES ('$rua', '$bairro', '$cidade', '$numero', '$uf')";

	mysqli_query($link,$insert) or die("erro");

?>
<?php include("cabecalho_template.php"); ?>

</head>

<body>

	<div id = "main">
    
	 <article  style = "font-family: verdana; font-size: 18px;">	
	  <center>
	
		<p style = "font-size: 16px; color: grey; padding: 10px;"> Seu cadastro foi realizado com sucesso !!!</p>
		
		<a href = "cadastro_endereco.php"> Cadastre outro ponto</a>
		
	  </center>
	 </article>

<?php include("rodape_template.php"); ?>
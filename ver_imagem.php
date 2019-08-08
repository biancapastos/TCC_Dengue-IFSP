<?php
	require("conecta.php");
	  
	$codigo = $_GET['id'];
	$querySelecionaPorCodigo = "SELECT codigo,imagem FROM tabela_imagens WHERE codigo = $codigo";
	$resultado = mysql_query($querySelecionaPorCodigo);
	$imagem = mysql_fetch_object($resultado);
	Header( "Content-type: image/gif");
	echo $imagem->imagem;
?>
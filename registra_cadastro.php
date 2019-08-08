<?php
	include("conexao.php");
	
	$nome = $_POST["nome"];
	$idade = $_POST["idade"];
	$sexo = $_POST["sexo"];
	$email = $_POST["email"];
	$senha = md5($_POST["senha"]);

	$insert = "INSERT INTO usuario(nome, sexo, idade, email, senha, permissao) 
	VALUES ('$nome', '$sexo', '$idade', '$email', '$senha', '0')";

	mysqli_query($link,$insert) or die("erro");

	$id_inserido = mysqli_insert_id($link);
	echo $id_inserido;
?>
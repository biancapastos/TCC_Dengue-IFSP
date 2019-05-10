<?php
	session_start();
	include("conexao.php");
	
	$id = $_SESSION['autenticacao']; 
	
	$nome	= $_POST["nome"];
	$idade	= $_POST["idade"];
	$sexo	= $_POST["sexo"];
	$email	= $_POST["email"];
	$senha	= md5($_POST["senha"]);
	
	$update = "UPDATE usuario SET nome ='$nome', sexo ='$sexo', idade ='$idade', email ='$email', senha = '$senha' WHERE id_usuario = '$id' ";
	
	mysqli_query($link, $update) or die(mysqli_error($link));
	
	$_SESSION["email_alterado"] = $email;
	$_SESSION["senha_alterada"] = $senha;

?>
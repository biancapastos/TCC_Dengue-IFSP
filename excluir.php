<?php
	session_start();
	include("conexao.php");

	$delete = "DELETE FROM usuario WHERE id_usuario = " . $_SESSION["autenticacao"];

	mysqli_query($link,$delete) or die("erro");

	header("location: logout.php");

?>
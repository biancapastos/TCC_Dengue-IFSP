<?php
	//session_start();
	include("conexao.php");
	
	if(isset($_SESSION["email_alterado"]) && isset($_SESSION["senha_alterada"])){
		
		if($_SESSION["email_alterado"] != "" && $_SESSION["senha_alterada"] != ""){
			$select = " SELECT * FROM usuario WHERE email LIKE ' " . $_SESSION["email_alterado"] . " ' AND senha LIKE ' " . $_SESSION["senha_alterada"] . " ' ";
		}
		
	}else{
	
		$login = $_POST["login"];
		$senha = md5($_POST["senha"]);
		$select = " SELECT * FROM usuario WHERE email LIKE '$login' AND senha LIKE '$senha' ";
		
	}
	
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
	
	if(mysqli_num_rows($resultado) >= 1){
		$linha = mysqli_fetch_assoc($resultado);
		session_start();
		$_SESSION['autenticacao'] = $linha["id_usuario"];
		$_SESSION['permissao'] = $linha["permissao"];
		
		echo "1";
	}else{
		echo "0";
	}
	
?>
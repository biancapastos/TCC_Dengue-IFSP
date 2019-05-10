<?php

	if(isset($_SESSION["autenticacao"])){
		include("cabecalho.php");

		$id = $_SESSION["autenticacao"];
		
		$select = "SELECT * FROM usuario WHERE id_usuario = $id";
		
		$resultado = mysqli_query($link, $select);
		
		$linha = mysqli_fetch_array($resultado);
		
		$nome = $linha['nome'];
		$idade = $linha['idade'];
		$sexo = $linha['sexo'];
		$email = $linha['email'];
		
		if($sexo == 'F'){
			$sexo.= 'eminino';
		}else if($sexo == 'M'){
			$sexo.= 'asculino';
		}
?>

<div id = "ver_meu_cadastro">

<center>
	
	<h4>Informações Pessoais</h4>
	<hr />
		
		<div class = "ul">
		<ul>
			<li> <b>Nome:</b> <?= $nome ?> </li>
			<li> <b>Idade:</b> <?= $idade ?> </li>
			<li> <b>Sexo:</b> <?= $sexo ?> </li>
			<li> <b>E-mail:</b> <?= $email ?> </li>
		<ul>
		</div>
		
		<br />
		<button class = "alterar_cadastro" style = "display: inline-block;">Alterar Cadastro</button>
		
		<button class = "excluir_cadastro" style = "display: inline-block;">Excluir Cadastro</button>

	<hr />

</center>

</div>

<?php
	include("rodape.php");

	}else{
		header("location: home.php");
	}
?>
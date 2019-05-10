<?php
include("cabecalho.php");
	
	$id = $_SESSION["autenticacao"];
	$select = "SELECT * FROM usuario WHERE id_usuario = $id";
	
	$resultado = mysqli_query($link, $select);
	$linha = mysqli_fetch_array($resultado);
?>

<div id = "alterando">
	<center>
	<hr />
	
		<h4>Alterando Cadastro</h4>
	
			Nome: &nbsp;&nbsp;
			<input class = "cadast" type = "text" name = "alt_nome" id = "alt_nome" placeholder = " <?=$linha["nome"] ?> " />
			<br />
			
			Idade: &nbsp;&nbsp;
			<input class = "cadast" type = "number" name = "alt_idade" id = "alt_idade" min = "1" placeholder = " <?=$linha["idade"] ?> " />
			<br />
			
			Sexo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "radio" name = "alt_sexo" class = "alt_sexo" value = "F">Feminino
			<input type = "radio" name = "alt_sexo" class = "alt_sexo" value = "M">Masculino
			<br />
			
			Email: &nbsp;&nbsp;
			<input class = "cadast" type = "email" name = "alt_email" id = "alt_email" placeholder = " <?=$linha["email"] ?> " />
			<br />
			
			Senha: &nbsp;&nbsp;
			<input class = "cadast" type = "password" name = "alt_senha" id = "alt_senha" placeholder = "*********" />
			<br />
			<br />
			
			<button class = "alt_cadastro" style = "display: inline-block;"> Alterar </button>
			<!--
			<button class = "alt_senha" style = "display: inline-block;"> Alterar Senha </button>
			-->
	
	<hr />
</center>
</div>

<?php
include("rodape.php");
?>
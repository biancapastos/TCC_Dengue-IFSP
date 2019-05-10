<?php
	include("cabecalho.php");
?>

<div id = "index">
	<?php		
	if(isset($_SESSION["autenticacao"])){
		
		$id = $_SESSION["autenticacao"];
		
		$select = "SELECT nome FROM usuario WHERE id_usuario = $id";
		$resultado = mysqli_query($link, $select);
		
		$linha = mysqli_fetch_assoc($resultado);
		
		echo "<p>Olá <b>" . $linha['nome'] . "</b>!!</p><hr />";
		
	}else{
		echo "<p><b>Seja Bem-Vindo!</b></p><hr />";
	}
?>
			<p>Aqui você consegue:</p>
			
			<ul>
				<li>Marcar os casos de dengue do seu bairro em um mapa dinâmico e interativo</li>
				<li>Ter acesso a informação de outros bairros da cidade de Araraquara</li>
				<li>Ver gráficos e informações gerais sobre a doença</li>
			</ul>
			
			<hr />
			<p>Navegue pelo Menu!</p>
</div>

<?php
	include("rodape.php");
?>
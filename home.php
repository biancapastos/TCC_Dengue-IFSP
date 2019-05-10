<?php
include("cabecalho.php");
?>
	
	<div id = "home">
<?php		
	if(isset($_SESSION["autenticacao"])){
		
		$id = $_SESSION["autenticacao"];
		
		$select = "SELECT nome FROM usuario WHERE id_usuario = $id";
		$resultado = mysqli_query($link, $select);
		
		$linha = mysqli_fetch_assoc($resultado);
		
		echo "<h5 style = 'color: black;' >Olá <b>" . $linha['nome'] . "</b>!!</h5><hr />";
		
	}else{
		echo "<h5 style = 'color: black;' ><b>Seja Bem-Vindo!</b></h5><hr />";
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
	/*include("banner.html");*/
include("rodape.php");
?>
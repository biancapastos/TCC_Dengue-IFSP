<?php include("cabecalho_template.php"); ?>

</head>

<body>

	<div id="main">

     <article style = "font-family: verdana; font-size: 18px;">	
	  
		<center>
<?php		
	if(isset($_SESSION["autenticacao"])){
		
		$id = $_SESSION["autenticacao"];
		
		$select = "SELECT nome FROM usuario WHERE id_usuario = $id";
		$resultado = mysqli_query($link, $select);
		
		$linha = mysqli_fetch_assoc($resultado);
		
		echo "
		<p style = 'display: inline-block; width: 40%; font-size: 20px;'>
		
		Olá <b>" . $linha['nome'] . "</b>!!
		
		</p> 
		
		<div style = 'display: inline-block; position: absolute; width: 20%; text-align: right; margin: 15px;'>
		</div>
		
		";
		
	}else{
		echo "<br /><p><b>Seja Bem-Vindo!</b></p><br />";
	}
?>
			
			<div style = "padding: 0px 80px;"><hr /></div>
			<br />
			<p style = "padding: 0px 80px;">
				Este é um site que oferece informações sobre a dengue e que auxilia a visualização 
				e o monitoramento da doença na cidade de Araraquara.
			</p>
			<br />
			<p>Aqui você consegue:</p>
		</center>
		
		<div style = "padding: 0px 125px;">
			<ul>
				<li style = "padding: 2px;">Marcar casos de dengue em um mapa dinâmico e interativo.</li>
				<li style = "padding: 2px;">Realizar um teste de sintomas!</li>
				<li style = "padding: 2px;">Ter acesso a informação de varios bairros da cidade de Araraquara.</li>
				<li style = "padding: 2px;">Acessar um ranking dos bairros mais afetados com a doença.</li>
				<li style = "padding: 2px;">Ver gráficos e informações gerais sobre a doença.</li>
				<li style = "padding: 2px;">Saber mais sobre os desenvolvedores.</li>
				<li style = "padding: 2px;">E claro! Se cadastrar para receber dicas e informações exclusivas sobre a dengue na cidade.</li>
			</ul>
		</div>
		
		<br />
		<center>
			<p>Clique nas imagens ao lado para navegar pelo site!</p>
		</center>
	  
<?php include("banner.php"); ?>	
	 </article>
<?php include("rodape_template.php"); ?>
<?php
	if(isset($_SESSION["autenticacao"])){
		include("cabecalho.php");
?>

<div id = "inf_exclusivas">

<center>
	
	<hr />
	<p>Aqui você encontra informacoes exclusivas sobre a doença, a situação da cidade e do seu bairro.</p>
	
	<hr />
	<p>Navegue pelo Menu!</p>

</center>

</div>

<?php
	include("rodape.php");
	
	}else{
		header("location: home.php");
	}
?>
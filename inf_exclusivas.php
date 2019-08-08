<?php
	include("cabecalho.php");
	if(isset($_SESSION["autenticacao"])){
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
?>
		<div style = "text-align: center; margin: 50px auto; display: block; width: 63%; padding: 8px; background-color: #FFF; border: 1px solid #4682B4; box-shadow: 0px 0px 5px 2px #4682B4;">
			<hr />
			<p style = "font-size: 18px"> <b>Voce nao tem permissao para acessar esta pagina.</b> Cadastre-se no site ou faca o login.</p>
			<hr />
		</div>
<?php
	}
?>
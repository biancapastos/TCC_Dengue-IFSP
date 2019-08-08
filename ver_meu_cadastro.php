<?php
	session_start();
	include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<title>Meu Cadastro</title>
	
	<!-- coisas do modal -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style type="text/css" media="screen">
	 	* {
		   box-sizing: border-box; 
		  }
		  body {
		    margin: 0;
		  }
		  #i_map, #i_ran, #i_gra, #i_tes,#i_ver_cadastro {
		    border-radius: 50%;
			border: 4px double #4682B4;
		  }
		  #main {
		    display: flex;
		    min-height:100vh;
		  }
		  #main > article {
		    flex: 1;
		  }
		  #main > nav {
		    flex: 0 0 5vw;
		    background: #ADD8E6;
		  }
		  #main > aside {
			flex: 0 0 12vw;
		    background: #ADD8E6;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1.5em;
		  }
		  header, footer {
		    background: #ADD8E6	;
		  }
		  header {
			height: 0vh;
		  }
		  footer{
			height: 0vh;
		  }
	</style>
	
	<style>
		input{
			padding: 8px 60px;
			margin: 8px;
			text-align: center;
			border: 1px solid #4682B4;
		}
		button{
			margin: 5px;
			display: inline-block;
		}
	</style>
	
	<script>
/////////////////////////////////EXCLUIR CADASTRO//////////////////////////////////////////
		$(document).on('click', '.excluir_cadastro', function() {
			location.href = "excluir.php";
		});
		
//////////////////////////////////////ALTERAR//////////////////////////////////////////////
		$(document).on('click', '.alterar_cadastro', function() {		
			location.href = "alterando_cadastro.php";
		});
		
		//------------------------------------------//
		$(document).on('click', '.alt_cadastro', function() {
			
			var nome = $("#alt_nome").val();
			var idade = $("#alt_idade").val();
			var sexo = $(".alt_sexo:checked").val();
			var email = $("#alt_email").val();
			var senha = $("#alt_senha").val();
			
			$.ajax({ 
			
				url : "altera_cadastro.php",
				type : 'post', 
				data : { 
				
					nome: nome,
					idade : idade,
					sexo : sexo,
					email: email,
					senha: senha
				
				},
				
				beforeSend : function(){ 
				}					
			})
			
			.done(function(msg){
				location.href = "ver_meu_cadastro.php";
				$("#result_alterar").html("Cadastro alterado com sucesso!");
			})
			
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});
			
		});
	</script>
</head>

<body>
	
	<div id="main">
	
     <article style = "font-family: verdana; font-size: 18px;">	
<?php
	
	if(isset($_SESSION["autenticacao"])){

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
		<center>
		<div id = "ver_meu_cadastro">
			<h3>Informações Pessoais</h3> 
			<hr />
		<div style = "border: 4px double #646df0; width: 86%; padding: 35px;">	
			<div class = "ul" style = "width: 30%; text-align: justify;">
			
				 <b>Nome:</b> <?= $nome ?> 
				 <br />
				 <b>Idade:</b> <?= $idade ?> 
				 <br />
				 <b>Sexo:</b> <?= $sexo ?> 
				 <br />
				 <b>E-mail:</b> <?= $email ?> 
			
			</div>
			</div>
				
			<div class="container" style = "width: 23%; display: inline-block; padding: 0px;">
			<button style = "padding: 5px 35px; display: inline-block;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">
			Alterar Cadastro</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal2" role="dialog" >
				<div class="modal-dialog">
				  <!-- Modal content-->
				  <div class="modal-content" style = "width: 115%;">
					<div class="modal-header">
					<h4 class="modal-title">Alterando cadastro</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body" >
					Nome: &nbsp;&nbsp;
					<input type = "text" name = "alt_nome" id = "alt_nome" placeholder = " <?=$linha["nome"] ?> " />
					<br />
					
					Idade: &nbsp;&nbsp;
					<input type = "number" name = "alt_idade" id = "alt_idade" min = "1" placeholder = " <?=$linha["idade"] ?> " />
					<br />
					
					Sexo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type = "radio" name = "alt_sexo" class = "alt_sexo" value = "F">Feminino
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "alt_sexo" class = "alt_sexo" value = "M">Masculino
					<br />
					E-mail: &nbsp;&nbsp;
					<input type = "email" name = "alt_email" id = "alt_email" placeholder = " <?=$linha["email"] ?> " />
					<br />
					
					Senha: &nbsp;&nbsp;
					<input class = "cadast" type = "password" name = "alt_senha" id = "alt_senha" placeholder = "*********" />
					</div>
					<div class="modal-footer">
					  <button style = "padding: 6px 22px;" type="button" class = "alt_cadastro" class="btn btn-default" data-dismiss="modal">
					  Alterar</button>
					</div>
				  </div>
				  
				</div>
			  </div>
			</div>
			
			<button class = "excluir_cadastro" style = "border: 1px solid #66c4ed; display: inline-block; background-color: #66c4ed; border-color: #66c4ed; 
			color: white; padding: 5px 36px; border-radius: 6px; font-size: 18px; margin: 15px 0px 0px 0px;">
			Excluir Cadastro</button>

			<div id = "result_alterar" style = "padding: 20px;">
			</div>
			
		</div>
		</center>
<?php
	}else{
?>
		<hr />
		<p style = "font-size: 18px"> <b>Voce nao tem permissao para acessar esta pagina.</b>
		<br />Cadastre-se no site ou faca o login.</p>
		<hr />
<?php
	}
?>
</article>
	
<?php include("rodape_template.php"); ?>
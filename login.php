<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Login</title>
	
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
		  #i_map, #i_ran, #i_gra, #i_tes, #i_log{
		    border-radius: 50%;
			border: 5px double #0b6b9e;
		  }
		  #main {
		    display: flex;
		    min-height:100vh;
		  }
		  #main > article {
		    flex: 1;
		  }
		  #main > nav {
		    flex: 0 0 3vw;
		    background: #0b6b9e;
		  }
		  #main > aside {
			flex: 0 0 10vw;
		    background: #0b6b9e;
		  }
		  #main > nav {
		    order: -1;
		  }
		  header, footer, article, nav, aside {
		    padding: 1em;
		  }
		  header, footer {
		    background: #0b6b9e	;
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
			padding: 10px 80px;
			margin: 8px;
			text-align: center;
			border: 1px solid #4682B4;
		}
		button{
			margin: 5px;
			display: inline-block;
		}
		div{
			display: inline-block;
		}
		p{
			margin: 5px;
		}
	</style>
	
	<script>
//////////////////////////////////////////// CADASTRO //////////////////////////////////////////////////////////////
		$(document).on('click', '.btn_cadastro', function() {

			sexo = $(".sexo:checked").val();
			$.ajax({ 
			
				url : "registra_cadastro.php", 
				type : 'post', 
				data : { 
				
					nome : $("#nome").val(),
					idade : $("#idade").val(),
					sexo : sexo,
					email : $("#email").val(),
					senha : $("#senha").val(),
				
				},
				
				beforeSend : function(){ 
					$("#status").html("CADASTRANDO...");
				}					
			})
			
			.done(function(msg){
				$("#result_login").html("Cadastro realizado com sucesso!");
			})
			
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});
			
		});
		
//////////////////////////////////////////// LOGIN //////////////////////////////////////////////////////////////
		$(document).on('click', '.btn_login', function() {
			
			$.ajax({ 
			
				url : "autenticacao.php", 
				type : 'post', 
				data : { 
				
					login : $("#email_login").val(),
					senha : $("#senha_login").val()
				
				},
				
				beforeSend : function(){ 
					$("#status").html("AUTENTICANDO...");
				}					
			})
			
			.done(function(msg){
				if(msg == 1){
					location.href = "menu_teste3.php";
					
				}else{
					alert("Login ou senha invalidos")
				}
			})
			
			.fail(function(jqXHR, textStatus, msg){
				alert(msg);
			});
			
		});
	</script>
	
</head>

<body>
  
  <div id="main">
	
	<article>

		<center>
		
		<h3>Area de Login</h3>
		<hr />
		<br />
		
		<p style = "font-size: 17px;">
			Cadastre-se no site e receba dicas e informações exclusivas.
			<br />
			Verifique seus dados e os mude quando quiser!
		</p>
		
		<div class="container" style = "width: 20%;">
		 <button style = "padding: 7px 40px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
		 Fazer Login</button>

		 <!-- Modal LOGIN -->
		 <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				   <h4 class="modal-title">Logar-se</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				  <span  style = "font-size: 18px;">E-mail: </span>
					<input type = "email" name = "login" id = "email_login" placeholder = "usuario@email.com" />
					<br />
					
				  <span  style = "font-size: 18px;">Senha: </span>
					<input type = "password" name = "senha" id = "senha_login" placeholder = "**********" />
					<br />
				</div>
				<div class="modal-footer">
				<button style = "padding: 5px 25px;" type="button" class = "btn_login" class="btn btn-default" data-dismiss="modal">Logar</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		</div>
		  
		<div class="container" style = "width: 20%;">
		<button style = "padding: 7px 40px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">
		Cadastrar-se</button>

		<!-- Modal CADASTRO -->
		<div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog">
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				<h4 class="modal-title">Cadastre-se</h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				  Nome: &nbsp;&nbsp;
				<input type = "text" name = "nome" id = "nome"  placeholder = "Nome Sobrenome" required  />
				<br />
				
				Idade: &nbsp;&nbsp;
				<input type = "number" name = "idade" id = "idade" min = "1" max = "110"  placeholder = "25" />
				<br />
				
				Sexo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "radio" name = "sexo" class = "sexo" value = "F">Feminino
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" name = "sexo" class = "sexo" value = "M">Masculino
				<br />
				
				E-mail: &nbsp;&nbsp;
				<input type = "email" name = "email" id = "email"  placeholder = "usuario@email.com" required />
				<br />
				
				Senha: &nbsp;&nbsp;
				<input type = "password" name = "senha" id = "senha"  placeholder = "********" required />
				</div>
				<div class="modal-footer">
				  <button style = "padding: 6px 22px;" type="button" class = "btn_cadastro" class="btn btn-default" data-dismiss="modal">Cadastrar-se</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		</div>
		
		<br />
		<hr />
		<div id = "result_login" style = "font-size: 22px; color: green; font-weight: bold; text-align: center;">
		</div>
		
	</article>
	
<?php include("rodape_template.php"); ?>